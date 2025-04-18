<?php

namespace App\Filtros;

class AutenticatedFilter
{
    public function aplicar()
    {
        if(!sessao('user')){
            return redirecionar('/login');
        }
    }
}