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
            <p class="list-unstyled list-hours mb-5 text-left mx-auto">
            <p>teste</p>
            <a href="editBook.php" class="btn btn-warning">Editar</a>
            <a href="deleteBook.php" class="btn btn-danger">Excluir</a>


            </ul>
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