<?php 
	include '../../Bd/conexao.php';

	$id = $_SESSION['edito'];
	$descricao = $_POST['descricao'];
	$quantidade_atual = $_POST['quantidade'];
	$preco_por_caixa = $_POST['preco-por-caixa'];
	$demanda = $_POST['demanda'];


	$stm = $pdo->exec("UPDATE products SET descricao = '$descricao', quantidade_atual = '$quantidade_atual', preco_por_caixa = '$preco_por_caixa', demanda = '$demanda' WHERE id = '$id'");
	
	if ($stm > 0) {
		header("location: cadastro.php");
	}else{
		echo "erro";
	}
 ?>