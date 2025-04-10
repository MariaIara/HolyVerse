<?php

use Hefestos\Database\Tabela;

return ( new Tabela('notes') )
    ->id()
    ->string('content')
    ->datetime('date')
    ->int('favorite_id')
    ->foreignKey('favorite_id', 'favorites', 'id');