<?php

namespace App\Controllers;

use App\Models\DailyVerse;
use Hefestos\Core\Controller;

class HomeController extends Controller
{
    private DailyVerse $daily_verse_model;

    public function __construct(DailyVerse $model)
    {
        $this->daily_verse_model = $model;
    }

    public function home()
    {
        $response = $this->daily_verse_model->getVerse();

        $verse = $response['verse'];
        $reference = $this->daily_verse_model->formatReference($response);

        return view('app/home', [
            'verse' => $verse,
            'reference' => $reference
        ]);
    }
}
