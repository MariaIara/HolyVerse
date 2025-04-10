<?php

use Hefestos\Database\Tabela;

return (new Tabela('favorites'))
    ->id()
    ->int('external_verse_id')
    ->datetime('date')
    ->int('user_id')
    ->foreignKey('user_id', 'users', 'id');
