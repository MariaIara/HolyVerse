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
        $verse = $this->daily_verse_model->get();

        return view('app/home');
    }
}
