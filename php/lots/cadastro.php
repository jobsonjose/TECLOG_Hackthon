<?php 
	include '../../Bd/conexao.php';
 	
 	$str = $pdo->query("SELECT * FROM lots");
 	$result = $str;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lots</title>
</head>
<body>
	<h4>Inserindo Lots</h4>
	<form method="POST" action="add.php">
		<input type="number" name="quantidade-de-entrada" placeholder="Quantidade de entrada">
		<input type="date" name="dia-entrada" placeholder="Data Entrada">
		<input type="date" name="validade" placeholder="Validade">
		<input type="number" name="quantidade-de-saida" placeholder="Quantidade de saida">
		<input type="submite" name="Enviar" value="Cadastrar o lot">
	</form>
	<?php 
		 for ($i=0; $i <count($result) ; $i++) {
                        echo "<tr>";
                        echo "<td>". $result[$i]['quantidade_de_entrada']."</td>";
                        echo "<td>". $result[$i]["entrada"]."</td>";
                        echo "<td>". $result[$i]["validade"]."</td>";
                        echo "<td>". $result[$i]["quantidade_saida"]."</td>";
	 ?>
	 					<a href="edit.php?id=<?=$i?>">Edite</a>
	 					<a href="delete.php?id-<?=$i?>">Delete</a>
	 					</tr>
	 <?php } ?>



</body>
</html>