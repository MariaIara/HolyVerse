<?php

use Hefestos\Database\Tabela;

return (new Tabela('favorites'))
    ->id()
    ->string('book')
    ->string('chapter')
    ->string('number')
    ->datetime('date')
    ->int('user_id')
    ->foreignKey('user_id', 'users', 'id');
