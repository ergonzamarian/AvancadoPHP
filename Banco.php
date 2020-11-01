<?php

require_once 'Funcoes.php';

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

$contasCorrentes['156.165.452-21'] = sacar( 500, $contasCorrentes['156.165.452-21']);
$contasCorrentes['156.165.452-21'] = depositar(6000, $contasCorrentes['156.165.452-21']);
titularComLetrasMaiusculas($contasCorrentes['156.165.452-21']);
unset($contasCorrentes['156.165.452-21']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){?>
        <dt>
            <h3>
                <?= $conta['titular'];?> <?= $cpf;?>
            </h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo'];?>
        </dd>
        <?php }?>
    </dl>
</body>
</html>



