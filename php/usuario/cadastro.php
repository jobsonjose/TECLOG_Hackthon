<?php 
	include '../../Bd/conexao.php';
	$str = $pdo->query("SELECT * FROM users");
	$result = $str->fetchAll();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Usuario</title>
 </head>
 <body>
 	<h4>Cadastre-se aqui</h4>
 	<form action="add.php" method="POST">
 		<input type="text" name="name" placeholder="Seu nome">
 		<input type="text" name="registro" placeholder="Seu CPF">
 		<input type="password" name="password" placeholder="Senha *****">
 		<input type="text" name="username" placeholder="Digite seu login">
 		<input type="submit" name="Enviar" value="Cadastre-se">
 	</form>
 </body>
 <table>
 	<tr>
	 	<th>Nome</th>
	 	<th>Registro</th>
	 	<th>Username</th>
 	</tr>
 	<tr>
 	<?php 
 		for ($i=0; $i < count($result) ; $i++):
 	 	$id = $result[$i]['id'];
 	 	$nome = $result[$i]['name'];
 	 	$register = $result[$i]['register'];
 	 	$username = $result[$i]['username'];
 	 ?>
	 	<td><?=$nome?></td>	
	 	<td><?=$register?></td>	
	 	<td><?=$username?></td>	
	 	<td><a href="edite.php?id=<?=$id?>">Edite</a></td>	
	 	<td><a href="delete.php?id=<?=$id?>">Delete</a></td>	
 	</tr>
 	<?php endfor; ?>
 </table>


 </html>