<?php
//Array associativo
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
//array de arrays
$contasCorretes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorretes); $i++) {
    echo $contasCorretes[$i]['titular'] . PHP_EOL;
}
