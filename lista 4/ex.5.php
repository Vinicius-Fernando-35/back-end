<?php

$aposta = 10;
$numero = 5;
$numsort = 5;

if ($numero == $numsort+1){
    echo "Você ganhou R$: ", $aposta * 5;
}
else {
    echo "Quase acertou, seu numero: $numero <br>";
    echo "Número sorteado: ", $numsort+1;
}

?>