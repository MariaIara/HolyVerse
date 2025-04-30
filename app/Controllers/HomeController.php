<?php

namespace App\Controllers;

use Hefestos\Core\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('app/home');
    }
}
