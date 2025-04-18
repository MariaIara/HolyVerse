<?php

namespace App\Controllers;

use App\Models\User;
use Hefestos\Core\Controller;

class UserController extends Controller
{
    public function registerView()
    {
        return view('auth/register');
    }

    public function register()
    {
        $form_data = $this->dadosPost();

        $user_model = new User();

        if($user_model->primeiroOnde(['email' => $form_data['email'], 'email'])){
            return redirecionar('/register')->com('feedback', 'Já existe um usuário com este email!');
        }
        
        $form_data['password'] = encriptar($form_data['password']);
        $user_model->insert($form_data);

        return redirecionar('/login');
    }

    public function loginView()
    {
        return view('auth/login');
    }

    public function login()
    {
        $form_data = $this->dadosPost();

        $user_model = new User();

        $autenticateted_user = $user_model->where('email', $form_data['email'])->primeiro();

        if(!$autenticateted_user || !password_verify($form_data['password'], $autenticateted_user['password'])){
            return redirecionar('/login')->com('feedback', 'Dados inválidos!');
        }

        sessao()->guardar('user', $autenticateted_user);
        
        return redirecionar('/home');
    }

    public function logout(){
        sessao()->destruir();

        return redirecionar('/login');
    }
}
