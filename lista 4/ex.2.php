<?php

$ingresso = "Não";
$cortesia = "Sim";

echo "Bem vindo ao Camarote da FAPI <br>";

if ($ingresso == "Sim" || $cortesia == "Sim"){
    echo "Pode entrar e curtir o after";
}
else {
    echo "Sem ingresso ou cortesia!";
}

?>