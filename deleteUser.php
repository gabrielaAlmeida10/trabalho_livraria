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
      <h2>Excluir Cliente</h2>
      <?php
      // Dados mockados
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

      <p>Tem certeza que deseja excluir o cliente abaixo?</p>
      <ul  class="no-bullets">
        <li><strong>ID:</strong> <?= $cliente['id']; ?></li>
        <li><strong>Nome:</strong> <?= htmlspecialchars($cliente['nome']); ?></li>
        <li><strong>Email:</strong> <?= htmlspecialchars($cliente['email']); ?></li>
        <li><strong>Telefone:</strong> <?= htmlspecialchars($cliente['telefone']) ?></li>
      </ul>

      <form action="bd_delete.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <input type="submit" value="Confirmar Exclusão" class="btn btn-danger">
      </form>
      <a href="store.php" class="btn btn-warning">Cancelar</a>
    </div>
  </section>

  <?php include("i_rodape.php"); ?>

</body>

</html>
