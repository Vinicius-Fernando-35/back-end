<?php

$nome = "John Wick";
$acesso = 3;

if($acesso == 1){
    echo "Bem vindo $nome, Você tem Acesso básico ao sistema";
}
elseif($acesso == 2){
    echo "Bem vindo $nome, Você tem Acesso intermediário ao sistema";
}
elseif($acesso == 3){
    echo "Bem vindo $nome, Você tem Acesso de aministrador ao sistema";
}
else{
    echo "Erro. Número de acesso inválido.";
}

?>