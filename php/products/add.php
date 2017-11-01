<?php 
	include '../../Bd/conexao.php';

	$descricao = $_POST['descricao'];
	$quantidade_atual = $_POST['quantidade-atual'];
	$preco_por_caixa = $_POST['preco-por-caixa'];
	$demanda = $_POST['demanda'];

	$strm = $pdo->exec("INSERT INTO products(descricao, quantidade_atual, preco_por_caixa, demanda) VALUES('$descricao', '$quantidade_atual', '$preco_por_caixa', '$demanda')");
	if ($strm > 0) {
		header("location: cadastro.php");
	}else{
		echo "erro";
	}

 ?>