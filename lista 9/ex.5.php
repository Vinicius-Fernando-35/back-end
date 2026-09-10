<?php

$contatos = ["(14)74899-8439", "(14)15662-8543", "(14)00817-5432", "(14)56680-9090", "(14)35358-2314"];
$soma = 0;

foreach($contatos as $num){
    $soma = $soma + 1;
}

echo "Há $soma contatos";

?>