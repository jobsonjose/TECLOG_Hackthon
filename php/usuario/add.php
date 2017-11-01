<?php 
	include '../../Bd/conexao.php';
	
	$nome = $_POST['name'];
	$registro = $_POST['registro'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	

	$stm = $pdo->exec("INSERT INTO users(name , register, password, username) VALUES('$nome', '$registro', '$password', '$username')");
	if($stm > 0){
		header("location: cadastro.php");
	}else{
		echo "erroe";
	}

 ?>