<?php 
	include '../../Bd/conexao.php';

	$id = $_GET['id'];
	$_SESSION['edite'] = $id;

	$strm = $pdo->query("SELECT * FROM users WHERE id = '$id'");
	$result = $strm->fetchAll();

	$nome = $result[0]['name'];
	$password = $result[0]['password'];
	$username = $result[0]['username'];
	$register = $result[0]['register'];
 	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Usuario</title>
 </head>
 <body>
 	<form action="edito.php" method="POST">
		<input type="text" name="name" placeholder="Digite seu nome" value="<?=$nome?>">
		<input type="password" name="password" placeholder="Digite sua senha" value="<?= $password ?>">
		<input type="text" name="register" placeholder="Digite seu CPF" value="<?= $register ?>">
		<input type="text" name="username" placeholder="Digite seu Login" value="<?= $username ?>">
		<input type="submit" name="Enviar" value="Edite <?= $nome ?>">
 	</form>
 
 </body>
 </html>