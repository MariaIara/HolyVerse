<?php

namespace App\Controllers;

use Hefestos\Core\Controller;

class OldController extends Controller
{
    public function index()
    {
        return view('app/bible/old-testament');
    }
}
