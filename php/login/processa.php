<?php  
include_once("config.php");

$desc = $_POST['descricao'];
$id = $_POST['id'];
$quantidade_atual = $_POST['quantidade_atual'];
$preco_por_caixa= $_POST['preco_por_caixa'];
$demanda = $_POST['demanda'];
// $created = $_POST['created'];
// $modified = $_POST['modified'];
$upd_stm = $pdo->prepare("UPDATE products SET descricao =?, quantidade_atual =? ,preco_por_caixa =? , demanda =? WHERE id =?");
$upd_stm->execute(array($desc,$quantidade_atual,$preco_por_caixa,$demanda, $id));
header("location: index.php");



?>