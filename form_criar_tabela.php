<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alterar</title>

  <!-- Bootstrap core CSS -->
  <link href="css/general.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link
    href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <?php
  include("i_topo.php");
  ?>

  <!-- Navigation -->
  <?php
  include("i_menu.php");
  ?>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <form action="bd_criar_tabela.php" method="post">
              Sql:
              <textarea name="sql" rows="10" cols="10"></textarea>
              <input type="submit" value="Criar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include("i_rodape.php");
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>