<?php

$status = 16;

if ($status == 1){
    echo "Pedido recebido";
}
elseif ($status == 2){
    echo "Pedido em preparação";
}
elseif ($status == 3){
    echo "Pedido enviado";
}
elseif ($status == 4){
    echo "Pedido entregue";
}
else{
    echo "Status inválido";
}

?>