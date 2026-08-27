<?php

$nome = "Vinicius";
$senha = "Vini2010@";
$confirmarsenha = "Vini2010@";
$dataanasc = "1/4/2010";

if ($nome != ""){
    echo "Nome aceito!";
}
else{
    echo "Por favor, preencher o cadastro!";
}

if ($senha != $confirmarsenha){
    echo "Senhas não batem!";
}
else{
    echo "Acesso liberado";
}

echo "Sua data de nascimento é...", $dataanasc;

?>