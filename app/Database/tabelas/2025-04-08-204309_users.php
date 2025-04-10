<?php

use Hefestos\Database\Tabela;

return (new Tabela('users'))
    ->id()
    ->string('username')
    ->string('email')
    ->string('password')
    ->int('seeds')
    ->string('pictures')
    ->int('favorite_verse')
    ->datetime('last_access');
