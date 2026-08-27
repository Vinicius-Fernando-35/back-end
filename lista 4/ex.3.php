<?php

$email = "jp@gmail.com";
$senha = "1234";

echo "Bem vindo ao FACEBOOK <br>";

if($email == "jp@gmail.com" && $senha == "123"){
    echo "Acesso Liberado <br>";
    header ("Location: https://www.facebook.com");
}
else{
    echo "Email ou senha inválida!";
}

?>