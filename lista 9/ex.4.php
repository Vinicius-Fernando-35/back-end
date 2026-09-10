<?php

$numeros = [1,2,3,4,5,6,7,8,9,10];
$_maior= 0;

foreach($numeros as $maior){
    if($maior > $_maior){
        $_maior = $maior;
    }
}

echo "O maior número da lista é: $_maior";

?>