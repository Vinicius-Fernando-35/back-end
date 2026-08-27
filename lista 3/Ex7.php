<?php

$valor = 100;
$valormin = 50;
$idade = 16;
$estoque = 150;
$quantidade = 20;
$status = "Pago";

if ($valor >= $valormin){
    echo "Entrega gratis!";
}
else {
    echo "Seu valor é de $valor";
}

if ($idade >= 18){
    echo "Voce pode beber!";
}
else {
    echo "Você não pode beber";
}

if ($quantidade <= $estoque){
    echo "Pedido aceito!";
}
else {
    echo "Pedido negado";
}

if ($status == "Pago"){
    echo "Liberado!";
}

?>