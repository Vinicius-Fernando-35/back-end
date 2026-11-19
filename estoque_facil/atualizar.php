<?php
include 'config/conexao.php';

// Garante que o formulário foi enviado via POST e que o ID não está vazio
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['id'])) {
    die("Erro: ID do produto não recebido. <a href='listar.php'>Voltar para lista</a>");
}

$id         = $_POST['id'];
$nome       = $_POST['nome'];
$categoria  = $_POST['categoria'];
$preco      = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE tb_produtos SET
            nome_produto = :nome,
            categoria = :categoria,
            preco_produto = :preco,
            quantidade = :quantidade
        WHERE id_produto = :id";

$stmt = $conexao->prepare($sql);

$atualizou = $stmt->execute([
    ':nome'       => $nome,
    ':categoria'  => $categoria,
    ':preco'      => $preco,
    ':quantidade' => $quantidade,
    ':id'         => $id
]);

if ($atualizou) {
    echo "Produto atualizado com sucesso! ";
} else {
    echo "Erro ao atualizar produto. ";
}

echo "<a href='listar.php' class='botao'>Voltar para lista</a>";
?>