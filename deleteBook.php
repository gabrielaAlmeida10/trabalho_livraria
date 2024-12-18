<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Livro</title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php include("i_topo.php"); ?>
  <?php include("i_menu.php"); ?>

  <section class="menu-container">
    <div class="container">
      <h2>Excluir Livro</h2>
      <?php
      // Dados mockados
      $livros = [
        ['id' => 1, 'nome' => 'Livro A', 'autor' => 'Autor A', 'qtd' => 10, 'valor' => 29.90],
        ['id' => 2, 'nome' => 'Livro B', 'autor' => 'Autor B', 'qtd' => 5, 'valor' => 49.90],
        ['id' => 3, 'nome' => 'Livro C', 'autor' => 'Autor C', 'qtd' => 3, 'valor' => 19.90],
      ];

      if (!isset($_GET['id']) || empty($_GET['id'])) {
          echo "<p style='color: red;'>ID do livro não fornecido!</p>";
          exit;
      }

      $id = intval($_GET['id']);

      $livro = array_filter($livros, fn($l) => $l['id'] === $id);
      if (empty($livro)) {
          echo "<p style='color: red;'>Livro não encontrado!</p>";
          exit;
      }
      $livro = array_values($livro)[0];
      ?>

      <p>Tem certeza que deseja excluir o livro abaixo?</p>
      <ul  class="no-bullets">
        <li><strong>ID:</strong> <?= $livro['id']; ?></li>
        <li><strong>Nome:</strong> <?= htmlspecialchars($livro['nome']); ?></li>
        <li><strong>Autor:</strong> <?= htmlspecialchars($livro['autor']); ?></li>
        <li><strong>Quantidade:</strong> <?= $livro['qtd']; ?></li>
        <li><strong>Valor:</strong> R$ <?= number_format($livro['valor'], 2, ',', '.'); ?></li>
      </ul>

      <form action="bd_delete.php" method="post">
        <input type="hidden" name="id" value="<?= $livro['id']; ?>">
        <input type="submit" value="Confirmar Exclusão" class="btn btn-danger">
      </form>
      <a href="store.php" class="btn btn-warning">Cancelar</a>
    </div>
  </section>

  <?php include("i_rodape.php"); ?>

</body>

</html>
