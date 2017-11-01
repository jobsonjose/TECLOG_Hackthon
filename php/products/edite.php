<?php 
	include '../../Bd/conexao.php';
	$id = $_GET['id'];
	$_SESSION['edito'] = $id;

	$query = $pdo->query("SELECT * FROM products WHERE id = '$id'");
	$result = $query->fetchAll();

	$descricao = $result[0]['descricao'];
	$quantidade_atual = $result[0]['quantidade_atual'];
	$preco_por_caixa = $result[0]['preco_por_caixa'];
	$demanda = $result[0]['demanda'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Products</title>
 </head>
 <body>
 	<form action="edito.php" method="POST">
 		<input type="text" name="descricao" placeholder="Digite o nome do Remedio" value="<?= $descricao?>">
 		<label>
 		Quantidade atual:
 		<input type="number" name="quantidade"  value="<?= $quantidade_atual?>" disabled>
 		</label>
 		<label>
 		Preço por Caixa:
 		<input type="number" name="preco-por-caixa" step="0.01" value="$<?= $preco_por_caixa ?>">
 		</label>
 		<input type="number" name="demanda" placeholder="Digite a demanda do Remedio" value="<?= $demanda ?>">
 		<input type="submit" name="Enviar" value="Editar">
 	</form>
 
 </body>
 </html>