<?php

include 'config/conexao.php';

$id = $_GET["id"];

$sql = "DELETE FROM tb_produtos where id_produto = $id";

if($conexao -> query($sql)){
  echo "✅Produto excluido com sucesso!";
}
else{
  echo "❌Erro ao excluir o produto";
}

echo "<a href='cadastrar.html' class='botao'>Voltar</a>";

?>