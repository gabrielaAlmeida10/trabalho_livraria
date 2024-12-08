<?php
	session_start();

	echo $_SESSION['servidor'];
	
	$sql = $_POST['sql'];

	@ $db = mysqli_connect($_SESSION['servidor'], $_SESSION['usuario'], $_SESSION['senha'], $_SESSION['banco']);
	exit();
	$result = mysqli_query($db, $sql);
?>