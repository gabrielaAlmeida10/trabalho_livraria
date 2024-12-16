<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro</title>

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
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Cadastro Novo Livro no Estoque</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <form name="cadastro" method="post" action="bd_cadastro.php">
              Digite o código do livro: <input type="number" name="cod" size="80"><br><br>
              Digite o nome do livro: <input type="text" name="nome" size="80"><br><br>
              Digite o autor do livro: <input type="text" name="autor" size="80"><br><br>
              Digite a quantidade do livro:<input type="number" name="qtd" size="80"><br><br>
              <center><input type="submit" value="Enviar"><input type="reset" value="Limpar"></center>
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