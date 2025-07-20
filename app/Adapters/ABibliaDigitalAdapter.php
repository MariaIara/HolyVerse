<?php

namespace App\Adapters;

use App\Interfaces\APIBibleInterface;
use App\Models\DailyVerse;
use Hefestos\Ferramentas\ClienteHttp;

class ABibliaDigitalAdapter implements APIBibleInterface
{
    protected string $api_url = 'https://www.abibliadigital.com.br/api';
    protected string $version = 'nvi';
    public DailyVerse $daily_verse_model;

    public function __construct(DailyVerse $model)
    {
        $this->daily_verse_model = $model;
    }

    public function getDailyVerse(): array
    {
        $today = date('Y-m-d');

        if ($verse = $this->daily_verse_model->where('date', $today)->primeiro()) {
            return [
                $verse,
                $this->daily_verse_model->formatReference($verse)
            ];
        }

        $response = (new ClienteHttp())
            ->adicionarHeaders([
                'Authorization' => env('the_bible_api_key')
            ])
            ->get("{$this->api_url}/verses/{$this->version}/random")
            ->resposta('array');

        $daily_verse = [
            'verse' => $response['text'],
            'book' => $response['book']['name'],
            'chapter' => $response['chapter'],
            'number' => $response['number']
        ];

        $this->daily_verse_model->insert($daily_verse);

        return [
            $daily_verse['verse'],
            $this->daily_verse_model->formatReference($daily_verse)
        ];
    }

    public function getBooks(string $testament)
    {
        $books_response = (new ClienteHttp())
            ->adicionarHeaders([
                'Authorization' => env('the_bible_api_key')
            ])
            ->get("{$this->api_url}/books")
            ->resposta('array');

        if ($testament === 'new') {
            $books = array_filter(
                $books_response,
                fn($book) => $book['testament'] === 'NT'
            );

            return array_map(
                fn($book) => $book['name'],
                $books
            );
        }

        $books = array_filter(
            $books_response,
            fn($book) => $book['testament'] === 'VT'
        );

        return array_map(
            fn($book) => $book['name'],
            $books
        );
    }

    public function getChapters()
    {
        dd('teste');
    }

    public function getChapter()
    {
        //
    }

    public function getVerse()
    {
        //
    }
}
