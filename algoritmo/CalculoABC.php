<?php  
$quantidade = readline("Quantos produtos foram solicitados?");
$valor_total = 0;
for ($i=0; $i < $quantidade ; $i++) { 

	$preco_caixa = readline("Demanda anual: ");
	$demanda_anual = readline("Preço por caixa: ");
	$m1 = $preco_caixa * $demanda_anual;
	$_SESSION['Valor_Unitario'][$i] = $m1;
} 
	
rsort($_SESSION['Valor_Unitario']);
   
for ($i=0; $i < $quantidade; $i++) { 
	if ($i == 0) {

		$_SESSION['Valor_Acumulado'][$i] = $_SESSION['Valor_Unitario'][$i];		
	}
	else{

		$_SESSION['Valor_Acumulado'][$i] = $_SESSION['Valor_Acumulado'][$i -1] + $_SESSION['Valor_Unitario'][$i];
		$valor_total = $_SESSION['Valor_Acumulado'][$i];
	}
}

for ($i=0; $i < $quantidade; $i++) { 

	$_SESSION['Valor_Unitario_Porcento'][$i] = ($_SESSION['Valor_Unitario'][$i]/$valor_total)*100;
}

for ($i=0; $i < $quantidade; $i++) { 

	if ($i == 0) {

		$_SESSION['Valor_Acumulado_Porcento'][$i] = $_SESSION['Valor_Unitario_Porcento'][$i];		
	}
	else{

		$_SESSION['Valor_Acumulado_Porcento'][$i] = $_SESSION['Valor_Acumulado_Porcento'][$i -1] + $_SESSION['Valor_Unitario_Porcento'][$i];
		$valor_total = $_SESSION['Valor_Acumulado_Porcento'][$i];
	}
}

Imprimir($_SESSION['Valor_Unitario'], 0);
Imprimir($_SESSION['Valor_Acumulado'], 1);
Imprimir($_SESSION['Valor_Unitario_Porcento'], 2);
Imprimir($_SESSION['Valor_Acumulado_Porcento'], 3);

function Imprimir($imprimir, $tipo){

	foreach($imprimir as $chave => $valor ){

		if ($tipo == 0) {

    		echo "valor unitário: $valor\n";
		}
		if ($tipo == 1) {

			echo "valor acumulado: $valor\n";
		}
		if ($tipo == 2) {

			echo "Porcentagem do total unitário: $valor%\n";
		}
		if ($tipo == 3) {

			echo "Porcentagem do total acumulado: $valor%\n";
		}
	}
}

foreach($_SESSION['Valor_Acumulado_Porcento'] as $chave => $valor ) {

    if ($valor <= 70 ) {

		//echo "Está classificado como A com: $valor% \n";
		$_SESSION['Valor_Acumulado_Porcento'][$chave] = "Classificado como A com: $valor";
		echo $_SESSION['Valor_Acumulado_Porcento'][$chave] , "%\n";
	}
	if ($valor > 70 && $valor <= 90) {

		//echo "Está classificado como B com: $valor% \n";		
		$_SESSION['Valor_Acumulado_Porcento'][$chave] = "Classificado como B com: $valor";
		echo $_SESSION['Valor_Acumulado_Porcento'][$chave] , "%\n";
	}
	if ($valor > 90) {

		//echo "Está classificado como C com: $valor% \n";
		$_SESSION['Valor_Acumulado_Porcento'][$chave] = "Classificado como C com: $valor";
		echo $_SESSION['Valor_Acumulado_Porcento'][$chave] , "%\n";
	}
}
?>