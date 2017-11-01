<?php  
require_once "config.php";

$name= $_POST['name'];
$register= $_POST['register'];
$password= $_POST['password'];
$username= $_POST['username'];
$add_stm = $pdo->prepare("INSERT INTO users (name, register, password, username)
VALUES (?, ?, ?, ?)");
$add_stm->execute(array($name,$register,$password,$username));

header("location: login.php");
?>