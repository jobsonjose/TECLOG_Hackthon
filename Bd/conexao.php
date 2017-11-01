<?php 
	$host= "localhost";
	$dbname = "bd";
	$user = "root";
	$password = "";

	$dsn = "mysql:host=$host;dbname=$dbname";

	$pdo = new PDO($dsn, $user, $password);
	
	session_start();
 ?>