<?php 
	include '../../Bd/conexao.php';

	$id = $_GET['id'];

	$str = $pdo->exec("DELETE FROM users WHERE id = '$id'");

	if ($str > 0) {
		header("location: cadastro.php");
	}else{
		echo "erro";
	}

 ?>