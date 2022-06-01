<?php

function sacar(array $conta, float $valorDoSaque)
{
    if ($valorDoSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor ");
    } else {
        $conta['saldo'] -= $valorDoSaque;
    }

    return $conta;
}

function depositar(array $conta, float $valorDeDeposito): array
{
    if($valorDeDeposito < 0){
        exibeMensagem('O valor depositado precisa ser positivo'); 
    } else {
        $conta['saldo'] += $valorDeDeposito;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
    echo $conta['titular'] . PHP_EOL;
}