<?php 
	$host= "localhost";
	$dbname = "gestao";
	$user = "root";
	$password = "123";

	$dsn = "mysql:host=$host;dbname=$dbname";

	$pdo = new PDO($dsn, $user, $password);
	
 ?>