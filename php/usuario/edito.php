<?php 
	include '../../Bd/conexao.php';

	$nome = $_POST['name'];
	$register = $_POST['register'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_SESSION['edite'];

	$str = $pdo->exec("UPDATE users SET name = '$nome', register = '$register', username = '$username', password = '$password' WHERE id = '$id'");
	if ($str > 0) {
		header("location: cadastro.php");
	}else{
		echo "erro padrao";
	}
 ?>