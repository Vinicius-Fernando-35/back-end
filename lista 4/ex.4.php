<?php

$email = "jp@gmail.com";
$senha = "123";
$status = "Desativado";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "jp@gmail.com" && $senha == "123" && $status == "Ativado"){
    echo "Acesso Liberado <br>";
    header ("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha inválida!";
}

?>