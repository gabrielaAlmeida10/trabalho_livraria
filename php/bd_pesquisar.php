<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" haref="https://image.flaticon.com/icons/svg/566/566944.svg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pesquisar</title>

  <!-- Bootstrap core CSS -->
  <link href="css/style.css" rel="stylesheet">

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
            <p class="mb-0">Resultados Encontrados:</p>
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
            <?php
            $criterio = $_POST["criterio"];
            $chave = $_POST["chave"];

            if (!$criterio || !$chave) {
              echo 'Impossivel realizar pesquisa...faltam dados';
              exit;
            }
            $criterio = addslashes($criterio);
            $chave = addslashes($chave);
            @$db = mysqli_connect('localhost:3307', 'root', '', 'db_aluno');
            if (!$db) {
              die('não encontrei o servidor');
            }
            mysqli_select_db($db, 'db_aluno');
            $query = "select * from livros where " . $criterio . " like '%" . $chave . "%'";
            $result = mysqli_query($db, $query);
            $num_results = mysqli_num_rows($result);
            echo '<p>Número de livros encontrados: ' . $num_results . '</p>';
            for ($i = 0; $i < $num_results; $i++) {
              $row = mysqli_fetch_array($result);
              echo '<br />Código: ';
              echo stripslashes($row[0]);
              echo '<br />Nome: ';
              echo stripslashes($row[1]);
              echo '<br />Autor: ';
              echo stripslashes($row[2]);
              echo '<br />Quantidade: ';
              echo stripslashes($row[3]);
              echo '</p>';
            }
            mysqli_close($db);
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>