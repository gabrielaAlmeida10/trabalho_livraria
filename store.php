<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Biblioteca</title>
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
              <span class="section-heading-lower">Lista de livros ofertados!</span>
            </h2>
            <a href="addBook.php" class="btn btn-success">Adicionar Novo Livro</a>
            <hr>
            <br />
            <p class="list-unstyled list-hours mb-5 text-left mx-auto">
              <?php
              $livros = [
                ['id' => 1, 'nome' => 'Livro A', 'autor' => 'Autor A', 'qtd' => 10, 'valor' => 29.90],
                ['id' => 2, 'nome' => 'Livro B', 'autor' => 'Autor B', 'qtd' => 5, 'valor' => 49.90],
                ['id' => 3, 'nome' => 'Livro C', 'autor' => 'Autor C', 'qtd' => 3, 'valor' => 19.90],
              ];
              ?>

            <table border="1" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Autor</th>
                  <th>Quantidade</th>
                  <th>Valor (R$)</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($livros as $livro): ?>
                  <tr>
                    <td><?= $livro['id']; ?></td>
                    <td><?= htmlspecialchars($livro['nome']); ?></td>
                    <td><?= htmlspecialchars($livro['autor']); ?></td>
                    <td><?= $livro['qtd']; ?></td>
                    <td><?= number_format($livro['valor'], 2, ',', '.'); ?></td>
                    <td>
                      <a href="editBook.php?id=<?= $livro['id']; ?>" class="btn btn-warning ">Editar</a>
                      <a href="deleteBook.php?id=<?= $livro['id']; ?>" class="btn btn-danger">Excluir</a>
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