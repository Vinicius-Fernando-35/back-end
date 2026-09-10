<?php

$a = false;
$b = 0;
$c = "true";
$d = true;

// $a é booleano (true)
if (is_bool($a) === true) {
    echo "Sim, R$a é booleano\n";
}

// $b NÃO é booleano (é um inteiro)
if (is_bool($b) === false) {
    echo "Não, R$b não é booleano\n";
}

// $c NÃO é booleano (é uma string)
var_dump(is_bool($c)); // Saída: bool(false)

// $d é booleano (true)
var_dump(is_bool($d)); // Saída: bool(true)

?>