<?php

namespace App\Models;

use Hefestos\Core\Model;

class User extends Model
{
    // tabela do banco de dados ao qual o model está relacionado
    protected string $tabela = 'users';
}