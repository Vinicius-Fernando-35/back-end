<?php

include "config/conexao.php";

$pesquisa = $_GET["pesquisa"] ?? "";

$sql = "SELECT * FROM tb_produtos where nome_produto like '%$pesquisa%' ";
$resultado = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Produtos | Estoque Fácil</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">

    <h1>Estoque Fácil</h1>
    <p class="subtitulo">Produtos cadastrados na loja</p>

    <div class="formulario">

      <h2>Lista de Produtos</h2>
      <form action="listar.php" method="GET">
        <input type="text" name="pesquisa" placeholder="Digite o nome do produto">
        <button type="submit">Pesquisar</button>
        <a href="listar.php">Limpar</a>
      </form>
      <table>
        <tr>
          <th>ID</th>
          <th>Imagem</th>
          <th>Produto</th>
          <th>Categoria</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th>Ação</th>
        </tr>

        <?php while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>

          <tr>
            <td><?php echo $produto["id_produto"]; ?></td>
            <td>
              <?php if ($produto["imagem"]): ?>
                <img width="70px" src="uploads/<?=$produto["imagem"] ?>">
              <?php else: ?>
                <span>Sem imagem</span>
              <?php endif; ?>
            </td>
            <td><?php echo htmlspecialchars($produto["nome_produto"]); ?></td>
            <td><?php echo htmlspecialchars($produto["categoria"]); ?></td>
            <td>R$ <?php echo number_format($produto["preco_produto"], 2, ",", "."); ?></td>
            <td><?php echo $produto["quantidade"]; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $produto['id_produto']; ?>">Editar</a>
              -
              <a href="excluir.php?id=<?php echo $produto['id_produto']; ?>"
                onclick="return confirm('Deseja mesmo excluir este produto?')">
                Excluir
              </a>

            </td>
          </tr>

        <?php } ?>

      </table>

      <a href="cadastrar.html" class="botao">Voltar</a>

    </div>

  </div>

</body>

</html>