<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Questôes Matemáticas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<h1>Questões Matemáticas</h1>

<h2>Questão 1: Greatest Common Divisor</h2>
<? 
/* FUNÇÃO PARA DESCOBRIR O MAIOR DIVISOR COMUM */
function getGCD($number1 = 0,$number2 = 0){
	
	/* SEPARA O MAIOR E MENOR VALOR */
	if($number1 > $number2){
		$max = $number1;
		$min = $number2;
	}else{
		$max = $number2;
		$min = $number1;
	}

	/* VERIFICA O RESTO DA DIVISÃO, SE FOR 0 , FOI ENCONTRADO O DIVISOR */
	if($max%$min == 0){
		return $min;
	}else{
		/* SE NÃO FOR 0 , FAZ O RESTO DA DIVISÃO DO MAIOR PELO MENOR E PERCORRE A FUNÇÃO NOVAMENTES */
		$max = $max % $min;
		return getGCD($min,$max);
	}
}

/* NUMEROS UTILIZADOS PARA TESTAR A QUESTÃO 1*/
$arrayTest = array(
				array(10),
				array(2,4),
				array(10,5),
				array(21,13),
				array(100,100),
				array(123,456),
				array(883,991),
				array(579,965),
				array(969,741),
				array(546,858),
				array(1000,255)
			);

/* REPETIÇÃO AONDE É VERIFICADO SE É UM ARRAY MULTIMENCIONAL 
*  PEGANDO OS NUMEROS DE TESTE, CHAMANDO UMA FUNÇÃO PARA CALCULAR O MAIOR DIVISOR COMUM,
*  LIMITANDO A 2 NUMEROS NA FUNÇÃO E RETORNANDO O RESULTADO */
foreach($arrayTest as $count => $result){
	if(is_array($result)){
		$num1 = 0;
		foreach ($result as $count2 => $result2) {			
			if($num1!=0){
				$num2 = $result2;
				$finalResult = getGCD($num1,$num2);
				echo "O maior divisor comum dos numeros <u>".$num1."</u> e <u>".$num2."</u> é <b>".$finalResult."</b> <br>";
				break;
			}else{
				$num1 = $result2;
			}
		}
	}
}
?>


<h2>Questão 2: Square Root</h2>

<?
/* FUNÇÃO PARA DESCOBRIR A RAIZ QUADRADA */
function getSR($number){
	/* REPETE O LAÇO PELO NUMERO QUE FOI INSERIDO */
	$result = 1;
	for($x2 = 1; $x2 < $number; $x2++){
		/* CALCULO PARA ENCONTRAR A RAIZ */
	 	$compara = number_format((($result + 19/$result)/2),3, '.', '');
		if($result == $compara){
			break;
		}
	 	$result = ($result +$number/$result)/2;
		/* FORMATA O NUMERO */
	 	$result = number_format($result,3, '.', '');
	}
	return $result;
}

/* NUMEROS UTILIZADOS PARA TESTAR A QUESTÃO 2*/
$arrayTest = array(10,11,12,13,14,15,16,17,18,19,20);

/* REPETIÇÃO AONDE BUSCA OS VALORES NO ARRAY DE TESTE,
*  CHAMA A FUNÇÃO, CALCURA E RETORNA A RAIZ QUADRADA */
foreach ($arrayTest as $count3 => $resultSR) {
	echo "A raiz quadrada de <u>".$resultSR."</u> é <b>".getSR($resultSR)."</b> <br>";
}
?>
</body>
</html>
