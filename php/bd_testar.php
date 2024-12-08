<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Testar</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link
		href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>
	<?php
	session_start();
	include("i_topo.php");
	include("i_menu.php");
	?>

	<section class="page-section">
		<div class="container">
			<div class="product-item">
				<div class="product-item-title d-flex">
					<div class="bg-faded p-5 d-flex mr-auto rounded">
						<?php
						$servidor = $_POST['servidor'];
						$usuario = $_POST['usuario'];
						$senha = $_POST['senha'];
						$banco = $_POST['banco'];



						@$db = mysqli_connect($servidor, $usuario, $senha, $banco);
						if (!$db) {
							echo "Não deu para conectar ao Banco de Dados";
							exit;
						} else {
							echo "Conexão com Sucesso !!</br>";
							echo "<a href=form_criar_tabela.php>Criar Tabela</a>";
							$_SESSION['servidor'] = $servidor;
							$_SESSION['usuario'] = $usuario;
							$_SESSION['senha'] = $senha;
							$_SESSION['banco'] = $banco;

						}


						?>

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