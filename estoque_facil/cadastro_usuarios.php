<?php

include "config/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->rowcount() > 0){
    echo "Erro: este e-mail já está cadastrado.";
} else{
    $sql = "INSERT INTO tb_usuarios (nome_usuario, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql)){
        echo "Usuário cadastrado com sucesso!";
        echo "<br><a href='login.html'>Fazer login</a>";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}

?>