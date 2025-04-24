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

        if ($user_model->where('email', $form_data['email'])->primeiro()) {
            return redirecionar('/register')->com('feedback', 'Já existe um usuário com este email!');
        }

        $form_data['password'] = encriptar($form_data['password']);
        $user_model->insert($form_data);

        $user = $user_model->where('email', $form_data['email'])->primeiro();
        unset($user['password']);

        sessao()->guardar('user', $user);

        return redirecionar('/home');
    }

    public function loginView()
    {
        return view('auth/login');
    }

    public function login()
    {
        $form_data = $this->dadosPost();

        $user_model = new User();

        $user = $user_model->where('email', $form_data['email'])->primeiro();

        if (!$user || !password_verify($form_data['password'], $user['password'])) {
            return redirecionar('/login')->com('feedback', 'Dados inválidos!');
        }

        unset($user['password']);

        sessao()->guardar('user', $user);

        return redirecionar('/home');
    }

    public function logout()
    {
        sessao()->destruir();

        return redirecionar('/login');
    }
}
