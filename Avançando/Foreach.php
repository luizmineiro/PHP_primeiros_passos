<?php
$conta1 = [
    'titular' => 'João',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Vinicius',
    'saldo' => 8000
];
$conta3 = [
    'titular' => 'Matheus',
    'saldo' => 300
];

$contasCorretes = [
    $conta1, 
    $conta2,
    $conta3
];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
};
