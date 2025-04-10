<?php

use Hefestos\Database\Tabela;

return (new Tabela('daily_verses'))
    ->id()
    ->int('external_verse_id')
    ->datetime('date');
