<?php

$contasCorrentes = [
    '123.456.789-15' => [
        'titular' => 'Ergon',
        'saldo' => 1000
    ],
    '156.165.452-21' => [
    'titular' => 'Aliane',
    'saldo' => 500000
    ],
    '165.983.521-15' => [
    'titular' => 'Vinicius',
    'saldo' => 1500
    ]
];

$contasCorrentes['265.265.148-19'] = [
    'titular' => 'Carlos',
    'saldo' => 1500
];
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf." ". $conta['titular']. PHP_EOL;
}


