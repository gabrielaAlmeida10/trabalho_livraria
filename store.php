<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Biblioteca</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-lower">Lista de livros ofertados!</span>
            </h2>
            <a href="adicionar_livro.php" class="btn btn-success mb-3">Adicionar Livro</a>
            <hr>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <?php
              // Conexão com o banco de dados
              $servername = "localhost";
              $username = "seu_usuario";
              $password = "sua_senha";
              $dbname = "sua_base_de_dados";

              // Cria conexão
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Verifica a conexão
              if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
              }

              // Consulta para buscar os livros
              $sql = "SELECT id, nome, valor FROM livros";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // Exibe os livros
                while ($row = $result->fetch_assoc()) {
                  echo "<li class='list-unstyled-item list-hours-item d-flex'>";
                  echo htmlspecialchars($row["nome"]) . "<span class='ml-auto'>R$ " . number_format($row["valor"], 2, ',', '.') . "</span>";
                  echo "<div class='ml-3'>";
                  echo "<a href='editar_livro.php?id=" . $row["id"] . "' class='btn btn-primary btn-sm'>Editar</a> ";
                  echo "<a href='deletar_livro.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Deletar</a>";
                  echo "</div>";
                  echo "</li>";
                }
              } else {
                echo "<li class='list-unstyled-item list-hours-item d-flex'>Nenhum livro cadastrado.</li>";
              }

              // Fecha a conexão
              $conn->close();
              ?>
            </ul>
            <hr>
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