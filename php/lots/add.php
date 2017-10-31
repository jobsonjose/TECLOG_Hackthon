<?php 
	include '../../Bd/conexao.php';

	$quantidade_entrada = $_POTS['quantidade-de-entrada'];
	$dia_entrada = $_POTS['dia-entrada'];
	$validade = $_POTS['validade'];
	$quantidade_saida = $_POTS['quantidade-de-saida'];
	$produto = ??;
	$usuario_logado = ??;

	$srt = $pdo->exec("INSERT INTO lots(quantidade_de_entrada, entrada, validade, quantidade_saida) VALUES('$quantidade_entrada', '$dia_entrada', '$validade', '$quantidade_saida')");
	if($srt > 0){
		header("location: cadastro.php");
	}else{
		echo "erro";
	}

 ?>