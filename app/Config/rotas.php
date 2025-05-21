<?php
/* ----------------------------------------------------------------------
Cada rota deve ser respondida com o retorno de uma função, seja ela uma
função anonima ou um metodo de controller. Consulte a documentação.
---------------------------------------------------------------------- */

use App\Controllers\HomeController;
use App\Controllers\NewController;
use App\Controllers\OldController;
use Hefestos\Rotas\Rota;
use App\Controllers\UserController;

Rota::get('/', function () {
    return view('landingpage');
});

Rota::get('/register', [UserController::class, 'registerView']);
Rota::post('/register', [UserController::class, 'register']);

Rota::get('/login', [UserController::class, 'loginView']);
Rota::post('/login', [UserController::class, 'login']);

Rota::post('/logout', [UserController::class, 'logout'])->filtro('logged');

Rota::get('/home', [HomeController::class, 'home'])->filtro('logged');

Rota::get('/bible/old', [OldController::class, 'index'])->filtro('logged');
Rota::get('/bible/new', [NewController::class, 'index'])->filtro('logged');
