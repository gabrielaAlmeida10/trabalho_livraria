<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clientes</title>
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php
  include "i_topo.php";
  ?>
  <br />
  <?php
  include "i_menu.php";
  ?>

  <section class="menu-container">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-lower">Lista de clientes cadastrados!</span>
            </h2>
            <a href="addUser.php" class="btn btn-success">Cadastrar Novo Cliente</a>
            <hr>
            <br />
            <p class="list-unstyled list-hours mb-5 text-left mx-auto">
              <?php
              $users = [
                ['id' => 1, 'nome' => 'Marina', 'telefone' => '11111111111', 'email' => 'aaaa@gmail.com'],
                ['id' => 2, 'nome' => 'Caitlin', 'telefone' => '22222222222', 'email' => 'aaaa@gmail.com'],
                ['id' => 3, 'nome' => 'Ambar', 'telefone' => '44944444444', 'email' => 'aaaa@gmail.com'],
              ];
              ?>

            <table border="1" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Telefone</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $user): ?>
                  <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= htmlspecialchars($user['nome']); ?></td>
                    <td><?= htmlspecialchars($user['telefone']); ?></td>
                    <td><?= htmlspecialchars($user['email']); ?></td>
                    <td>
                      <a href="editUser.php?id=<?= $user['id']; ?>" class="btn btn-warning ">Editar</a>
                      <a href="deleteUser.php?id=<?= $user['id']; ?>" class="btn btn-danger">Excluir</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include "i_rodape.php";
  ?>
</body>

</html>