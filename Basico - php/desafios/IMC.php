<?php

$altura = 1.80;
$peso = 85;
$imc = $peso / ($altura ** 2);

echo "Seu imc é $imc" . PHP_EOL;

if($imc <= 18.4){
    echo "Você esta abaixo do nivel aceitavel";
}elseif($imc >= 18.5 && $imc <= 24.9 ){
    echo "Você esta dentro do nivel aceitavel";
}else{
    echo "Você esta acima do nivel acitavel";
}

echo "". PHP_EOL;
