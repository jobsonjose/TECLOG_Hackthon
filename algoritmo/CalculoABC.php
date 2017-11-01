
<?php  
$quantidade = readline("Quantos produtos foram solicitados?");
$valor_total = 0;
for ($i=0; $i < $quantidade ; $i++) { 

	$preco_caixa = readline("Demanda anual: ");
	//$demanda_anual = readline("Preço por caixa: ");
	//$m1 = $preco_caixa * $demanda_anual;
	$_SESSION['Valor_unitario'][$i] = $preco_caixa;
} 
	
rsort($_SESSION['Valor_unitario']);
foreach($_SESSION['Valor_unitario'] as $chave => $valor ){
    echo "valor unitário: $valor\n";   

}
for ($i=0; $i < $quantidade; $i++) { 
	if ($i == 0) {
		$_SESSION['Valor_Acumulado'][$i] = $_SESSION['Valor_unitario'][$i];
		
	}else{

		$_SESSION['Valor_Acumulado'][$i] = $_SESSION['Valor_Acumulado'][$i -1] + $_SESSION['Valor_unitario'][$i];
		$valor_total = $_SESSION['Valor_Acumulado'][$i];
	}
}
foreach($_SESSION['Valor_Acumulado'] as $chave => $valor ){
    echo "valor acumulado: $valor\n";   

}
for ($i=0; $i < $quantidade; $i++) { 
	$_SESSION['Valor_Unitario_porcento'][$i] = ($_SESSION['Valor_unitario'][$i]/$valor_total)*100;
}
foreach ($_SESSION['Valor_Unitario_porcento'] as $key => $value) {
	echo "Porcentagem do total unitário: $value %\n";
}
for ($i=0; $i < $quantidade; $i++) { 
	if ($i == 0) {
		$_SESSION['Valor_Acumulado_porcento'][$i] = $_SESSION['Valor_Unitario_porcento'][$i];
		
	}else{

		$_SESSION['Valor_Acumulado_porcento'][$i] = $_SESSION['Valor_Acumulado_porcento'][$i -1] + $_SESSION['Valor_Unitario_porcento'][$i];
		$valor_total = $_SESSION['Valor_Acumulado_porcento'][$i];
	}
}
foreach($_SESSION['Valor_Acumulado_porcento'] as $chave => $valor ){
    echo "Porcentagem do total acumulado: $valor %\n";   

}



	




?>