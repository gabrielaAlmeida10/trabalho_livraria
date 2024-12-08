<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alterar</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <?php
    include ("i_topo.php");
  ?>

  <!-- Navigation -->
<?php
    include ("i_menu.php");
  ?>


<?php
      $cod=$_POST['cod'];
      $nome=$_POST['nome'];
      $autor=$_POST['autor'];
      $qtd=$_POST['qtd'];
       if (!$cod && !$nome && !$autor && !$qtd)
      {
       echo 'Não há alterações a serem feitas<br>';
       exit;
      }
      
      @ $db = mysqli_connect('localhost:3307','root','', 'db_aluno'); 
      if (!$db)
      {
       echo 'não encontrei o servidor';
       exit;
      }
      mysqli_select_db($db,'db_aluno');
      
      $query = "update db_aluno set autor='$autor', cod='$cod', qtd='$qtd' where nome='$nome'";
      $resulty = mysqli_query($db,$query);
      if (mysqli_affected_rows($db)) echo "<section class='page-section'>
			<div class='container'>
				<div class='product-item'>
					<div class='product-item-title d-flex'>
						<div class='bg-faded p-5 d-flex mr-auto rounded'>
							 <p>$nome, $autor, $cod e $qtd atualizados no Banco de Dados.</br></p>
						</div>
					</div>
				</div>
			</div>
		</section>"; 
      else echo mysqli_error($db).'<br>';
      mysqli_close($db);
    ?>
	

 <?php
    include ("i_rodape.php");
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
