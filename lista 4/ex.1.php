<?php

$idade = 16;
$ingresso = "Sim";

if ($idade >= 18 && $ingresso == "Sim"){
    echo "Pode entrar e assistir ao filme";
}
else{
    echo "Idade não permitida ou sem ingresso!";
}

?>