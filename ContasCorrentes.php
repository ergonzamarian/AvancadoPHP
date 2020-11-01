<?php

$conta1 = [
    'titular' => 'Ergon',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Aliane',
    'saldo' => 500000
];
$conta3 = [
    'titular' => 'Vinicius',
    'saldo' => 1500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($contador = 0; $contador <= count($contasCorrentes); $contador++)
{
    echo $contasCorrentes[$contador]['titular'].PHP_EOL;
}


