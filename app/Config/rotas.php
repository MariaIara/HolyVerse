<?php
/* ----------------------------------------------------------------------
Cada rota deve ser respondida com o retorno de uma função, seja ela uma
função anonima ou um metodo de controller. Consulte a documentação.
---------------------------------------------------------------------- */

use Hefestos\Rotas\Rota;
use App\Controllers\UserController;

Rota::get('/', function () {
    return view('landingpage');
});

Rota::get('/register', [UserController::class, 'registerView']);
Rota::post('/register', [UserController::class, 'register']);
Rota::get('/login', [UserController::class, 'loginView']);
Rota::post('/login', [UserController::class, 'login']);

// Rota::agrupar('logged', function(){
//     Rota::get('/home', function () {
//         return view('app/home');
//     });

//     Rota::post('/logout', [UserController::class, 'logout']);
// });

Rota::get('/home', function () {
    return view('app/home');
})->filtro('logged');

Rota::post('/logout', [UserController::class, 'logout'])->filtro('logged');