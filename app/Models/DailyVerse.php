<?php

namespace App\Models;

use Hefestos\Core\Model;
use Hefestos\Ferramentas\ClienteHttp;

class DailyVerse extends Model
{
    protected string $tabela = 'daily_verses';

    public function getVerse(): array
    {
        $today = date('Y-m-d');;

        if ($verse = $this->where('date', $today)->primeiro()) {
            return $verse;
        }

        $response = (new ClienteHttp())
            ->adicionarHeaders([
                'Authorization' => 'Bearer ' . env('the_bible_api_key')
            ])
            ->get('https://www.abibliadigital.com.br/api/verses/nvi/random')
            ->resposta('array');

        $daily_verse = [
            'verse' => $response['text'],
            'book' => $response['book']['name'],
            'chapter' => $response['chapter'],
            'number' => $response['number']
        ];

        $this->insert($daily_verse);

        return $daily_verse;
    }

    public function formatReference(array $response): string
    {
        return $response['book'] . ' ' . $response['chapter'] . ':' . $response['number'];
    }
}
