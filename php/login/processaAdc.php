<?php 
require_once 'config.php';

$descricao = $_POST['descricao'];
$quantidade_atual = $_POST['quantidade_atual'];
$preco_por_caixa = $_POST['preco_por_caixa'];
$demanda = $_POST['demanda'];

$sql = "INSERT INTO products(descricao, quantidade_atual, preco_por_caixa, demanda) VALUES(:descricao, :quantidade_atual, :preco_por_caixa, :demanda)";

$stmt = $pdo->prepare( $sql );
$stmt->bindParam( ':descricao', $descricao );
$stmt->bindParam( ':quantidade_atual', $quantidade_atual );
$stmt->bindParam( ':preco_por_caixa', $preco_por_caixa );
$stmt->bindParam( ':demanda', $demanda );
 
$result = $stmt->execute();
 
if (!$result) {
    var_dump($stmt->errorInfo());
    exit;
}
 
// echo $stmt->rowCount() . "linhas inseridas";


header("location: index.php");
?>