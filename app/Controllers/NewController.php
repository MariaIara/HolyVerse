<?php

namespace App\Controllers;

use Hefestos\Core\Controller;

class NewController extends Controller
{
    public function index()
    {
        return view('app/bible/new-testament');
    }
}
