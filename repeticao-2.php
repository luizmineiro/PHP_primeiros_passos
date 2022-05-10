<?php

for($contador = 1; $contador <= 15; $contador++){
    if ($contador == 13) {
        continue; //ou break
    }
    echo "#$contador" . PHP_EOL;
}


/*
o continue vai pular o 13 
o break vai interromper o looping quando a variavel for igaul a 13 
*/