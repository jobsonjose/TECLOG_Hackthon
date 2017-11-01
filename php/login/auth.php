<?php 
require_once 'config.php';
$sql = 'SELECT * FROM users';
$login = $_POST['username'];
$senha = $_POST['password'];
foreach ($pdo->query($sql) as $row) {
	if ($row['username'] == $login && $row['password'] == $senha) {
		header("location: index.php");
	} else{
		echo 'login ou senha invalidos';
	}
}
 ?>