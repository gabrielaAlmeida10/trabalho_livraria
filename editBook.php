<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Alterar</title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <?php
  include("i_topo.php");
  include("i_menu.php");

  if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<p style='color: red; text-align: center;'>ID do livro não fornecido!</p>";
    exit;
  }

  $id = intval($_GET['id']);
  include("conexao.php"); 
  
  $query = "SELECT * FROM livros WHERE id = $id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $livro = mysqli_fetch_assoc($result);
  } else {
    echo "<p style='color: red; text-align: center;'>Livro não encontrado!</p>";
    exit;
  }
  ?>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2>Alterar Dados do Livro</h2>
            <?php
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

            // Busca o livro pelo ID
            $livro = array_filter($livros, fn($l) => $l['id'] === $id);
            if (empty($livro)) {
              echo "<p style='color: red;'>Livro não encontrado!</p>";
              exit;
            }
            $livro = array_values($livro)[0];
            ?>

            <form action="bd_alterar.php" method="post">
              <input type="hidden" name="id" value="<?= $livro['id']; ?>">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($livro['nome']); ?>"><br><br>

              <label for="autor">Autor:</label>
              <input type="text" name="autor" id="autor" value="<?= htmlspecialchars($livro['autor']); ?>"><br><br>

              <label for="qtd">Quantidade:</label>
              <input type="number" name="qtd" id="qtd" value="<?= $livro['qtd']; ?>"><br><br>

              <label for="valor">Valor (R$):</label>
              <input type="number" name="valor" id="valor" step="0.01" value="<?= $livro['valor']; ?>"><br><br>

              <input type="submit" value="Salvar Alterações" class="btn btn-success">
            </form>
          </div>
  </section>

  <?php include("i_rodape.php"); ?>

</body>

</html>