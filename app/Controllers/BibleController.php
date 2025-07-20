<?php

namespace App\Controllers;

use App\Adapters\ABibliaDigitalAdapter;
use App\Interfaces\APIBibleInterface;
use App\Models\DailyVerse;
use Hefestos\Core\Controller;

class BibleController extends Controller
{
    private DailyVerse $daily_verse_model;
    protected APIBibleInterface $bible_api;

    public function __construct(DailyVerse $model)
    {
        $this->daily_verse_model = $model;
        $this->bible_api = new ABibliaDigitalAdapter($this->daily_verse_model);
    }

    public function index($testament)
    {
        if (!in_array($testament, ['new', 'old'])) {
            return redirecionar('/404');
        }

        $books = $this->bible_api->getBooks($testament);

        return view('app/bible/' . $testament . '-testament', [
            'books' => $books
        ]);
    }
}
