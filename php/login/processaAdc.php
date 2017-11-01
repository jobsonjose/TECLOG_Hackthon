<?php 
require_once 'config.php';

$descricao = $_POST['descricao'];
$quantidade_atual = $_POST['quantidade_atual'];
$preco_por_caixa = $_POST['preco_por_caixa'];
$demanda = $_POST['demanda'];
$data_entrada = $_POST['created'];
$data_saida = $_POST['modified'];

$add_stm = $pdo->prepare("INSERT INTO products (descricao, quantidade_atual, preco_por_caixa, demanda, created, modified)
VALUES (?, ?, ?, ?, ?, ?)");
$add_stm->execute(array($descricao,$quantidade_atual,$preco_por_caixa,$demanda,$data_entrada,$data_saida));

header("location :index.php");
?>