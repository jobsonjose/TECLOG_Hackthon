<?php 
	include '../../Bd/conexao.php';
	$str = $pdo->query("SELECT * FROM products");
	$result = $str->fetchAll();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Products</title>
 </head>
 <body>
 	<form action="add.php" method="POST">
 		<input type="text" name="descricao" placeholder="Descrição do Remedio">
 		<label>
 		Quantidade Atual
 		<input type="number" name="quantidade-atual" value=0 disabled>
 		</label>
 		<label>
 		Preco por Caixa
 		<input type="number" name="preco-por-caixa" step="0.01">
 		</label>
 		<input type="number" name="demanda" placeholder="Digite a demanda do Produto">
 		<input type="submit" name="enviar" value="Cadastrar">
 	</form>
 </body>
 	<table>
 		<tr>
 			<th>Descrição</th>
 			<th>Quantidade Atual</th>
 			<th>Preço por Caixa</th>
 			<th>Demanda</th>
 		</tr>
 		<tr>
 		<?php for ($i=0; $i < count($result) ; $i++):
 			$id = $result[$i]['id'];
 			$descricao = $result[$i]['descricao'];
 			$quantidade_atual = $result[$i]['quantidade_atual'];
 			$preco_por_caixa = $result[$i]['preco_por_caixa'];
 			$demanda = $result[$i]['demanda'];
 			 ?>
 			 <td><?= $descricao ?></td>
 			 <td><?= $quantidade_atual ?></td>
 			 <td><?= $preco_por_caixa ?></td>
 			 <td><?= $demanda ?></td>
 			 <td><a href="edite.php?id=<?=$id?>">Edite</a></td>
 			 <td><a href="delete.php?id=<?=$id?>">Delete</a></td>
 		<?php endfor; ?>
 		</tr>
 	</table>
 </html>