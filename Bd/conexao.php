<?php 
	$host= "localhost";
	$dbname = "gestao";
	$user = "root";
	$password = "'$user'";

	$dsn = "mysql:host=$host;dbname=$dbname";

	$pdo = new PDO($dsn, $user, '$user');
	
	session_start();
 ?>