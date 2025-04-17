<?php

namespace App\Controllers;

use Hefestos\Core\Controller;

class UserController extends Controller
{
    public function registerView()
    {
        return view('auth/register');
    }

    public function register()
    {
        $dados = $this->dadosPost();
    }

    public function loginView()
    {
        return view('auth/login');
    }

    public function login()
    {
        dd($this->dadosPost());
    }
}
