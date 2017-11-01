<?php 
	include '../../Bd/conexao.php';
	
	$id = $_GET['id'];

	$stm = $pdo->exec("DELETE FROM products WHERE id = '$id'");

	if ($stm > 0) {
		header("location: cadastro.php");
	}else{
		echo "erro";
	}
 ?>