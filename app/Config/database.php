<?php
/* ----------------------------------------------------------------------
Aqui devem ser informados os dados da conexão com a base de dados.
Note que mais de uma conexão pode ser configurada, onde a chave é o nome
do ambiente (desenvolvimento, producao ou outro definido por você).
---------------------------------------------------------------------- */

return [
    'producao' => [
        'driver'  => 'mysql',
        'host'    => 'localhost',
        'nome_db'  => 'olimpo',
        'usuario' => 'root',
        'senha'   => 'senha_segura_123',
        'sqlite'  => '',
    ],

    'desenvolvimento' => [
        'driver'  => 'mysql',
        'host'    => 'localhost',
        'nome_db'  => 'holyverse',
        'usuario' => 'root',
        'senha'   => '',
    ]
];
