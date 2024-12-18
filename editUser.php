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
    echo "<p style='color: red; text-align: center;'>Cliente não encontrado!</p>";
    exit;
  }
  ?>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2>Alterar Dados do Cliente</h2>
            <?php
            $users = [
              ['id' => 1, 'nome' => 'Marina', 'telefone' => '11111111111', 'email' => 'aaaa@gmail.com'],
              ['id' => 2, 'nome' => 'Caitlin', 'telefone' => '22222222222', 'email' => 'aaaa@gmail.com'],
              ['id' => 3, 'nome' => 'Ambar', 'telefone' => '44944444444', 'email' => 'aaaa@gmail.com'],
            ];

            if (!isset($_GET['id']) || empty($_GET['id'])) {
              echo "<p style='color: red;'>ID do Cliente não fornecido!</p>";
              exit;
            }

            $id = intval($_GET['id']);

            $user = array_filter($users, fn($l) => $l['id'] === $id);
            if (empty($user)) {
              echo "<p style='color: red;'>Cliente não encontrado!</p>";
              exit;
            }
            $user = array_values($user)[0];
            ?>

            <form action="bd_alterar.php" method="post">
              <input type="hidden" name="id" value="<?= $user['id']; ?>">
              <label for="nome">Nome:</label>
              <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($user['nome']); ?>"><br><br>

              <label for="telefone">Telefone:</label>
              <input type="text" name="telefone" id="telefone" value="<?= htmlspecialchars($user['telefone']); ?>"><br><br>

              <label for="email">Email:</label>
              <input type="text" name="email" id="email" value="<?= $user['email']; ?>"><br><br>

              <input type="submit" value="Salvar Alterações" class="btn btn-success">
            </form>
          </div>
  </section>

  <?php include("i_rodape.php"); ?>

</body>

</html>