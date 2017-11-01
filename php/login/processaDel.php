<?php 
include_once("config.php");
$id =$_GET['id'];

$del_stm = $pdo->prepare("DELETE FROM products WHERE id =?");
$del_stm->execute(array($id));
header("location: index.php");

?>