<?php

use Hefestos\Database\Tabela;

return (new Tabela('daily_verses'))
    ->id()
    ->string('verse')
    ->string('book')
    ->string('chapter')
    ->string('number')
    ->date('date');
