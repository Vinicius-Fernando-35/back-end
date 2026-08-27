<?php

$peso = 80.0;
$altura = 1.90;
$imc = $peso/($altura * $altura);

if ($imc >= 19 && $imc < 25){
    echo "Você tem $imc IMC, você está no Peso Ideal";
}
elseif ($imc >= 25 && $imc < 30){
    echo "Você tem $imc IMC, você está em Sobrepeso";
}
elseif ($imc >= 30 && $imc < 35){
    echo "Você tem $imc IMC, você está em Obesidade Grau I";
}
elseif ($imc >= 35 && $imc < 40){
    echo "Você tem $imc IMC, você está em Obesidade Grau II";
}
elseif ($imc > 40){
    echo "Você tem $imc IMC, você está em Obesidade Grau III";
}
?>