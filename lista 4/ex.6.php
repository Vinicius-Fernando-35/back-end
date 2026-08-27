<?php

$idade = 16;
$deficiencia = "Sim";
$gestante = "Não";

if ($idade >= 60 || $deficiencia == "Sim" || $gestante == "Sim"){
    echo "Atendimento prioritário";
}
else{
    echo "Atendimento normal";
}

?>