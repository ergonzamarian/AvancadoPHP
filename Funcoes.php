<?php

function exibeMensagem(String $mensagem)
{
    echo $mensagem . '<br>';
}
function sacar(float $valorASacar, array $conta): array
{
    if($valorASacar>$conta){

        exibeMensagem("Você não pode Sacar!!");
    }
    else{

        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function depositar(float $valorADepositar, array $conta): array
{
    if($valorADepositar>0)
    {
        $conta['saldo'] += $valorADepositar;
    }
    else{
        exibeMensagem("Deposito deve ser maior que zero!!");
    }
    return $conta;
}
function titularComLetrasMaiusculas(array &$conta)
{

    $conta['titular'] = strtoupper($conta['titular']);
}
function exibeConta(array $conta)
{
    echo "<li>Titulaar: {$conta['titular']}. Saldo: {$conta['saldo']}} </li>";

}