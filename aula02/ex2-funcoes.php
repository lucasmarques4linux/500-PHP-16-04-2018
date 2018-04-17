<?php 

// echo $numero = rand(0,10);
// Criar uma função que gere um array com números aleatórios de 0 a 10. Essa função vai receber como parametros, a quantidade de indices do array. E retornar o array preenchido.
echo '<pre>';
function montarArray(int $indice)
{
	for ($i=0; $i < $indice; $i++) { 
		$array[] = rand(0,10);
	}
	return $array;
}
$tam = 10;
$numeros = montarArray($tam);

// Exibir todos os números do array separados por virgula;
foreach ($numeros as $value) {
	echo $value . ',';
}
echo '<hr>';
// O primeiro número do array;
echo $numeros[0];
echo '<hr>';
// o último número do array;
echo $numeros[$tam - 1];
echo '<hr>';
// os números pares separados por virgula;
foreach ($numeros as $value) {
	if ($value % 2 == 0) {
		echo $value . ',';
	}
}
echo '<hr>';
// os números ímpares separados por virgula;
foreach ($numeros as $value) {
	if ($value % 2 != 0) {
		echo $value . ',';
	}
}
echo '<hr>';
// o maior número;
$maior = $numeros[0];
foreach ($numeros as $value) {
	if ($value > $maior) {
		$maior = $value;
	}
}
echo $maior;
echo '<hr>';
// o menor número;
$menor = $numeros[0];
foreach ($numeros as $value) {
	if ($value < $menor) {
		$menor = $value;
	}
}
echo $menor;
echo '<hr>';
// array em ordem crescente;
for ($i=0; $i < $tam; $i++) { 
	for ($j= $i + 1; $j < $tam; $j++) { 
		if ($numeros[$i] > $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}
}
print_r($numeros);
echo '<hr>';
// array em ordem decresente;
for ($i=0; $i < $tam; $i++) { 
	for ($j= $i +1; $j < $tam; $j++) { 
		if ($numeros[$i] < $numeros[$j]) {
			$temp = $numeros[$i];
			$numeros[$i] = $numeros[$j];
			$numeros[$j] = $temp;
		}
	}
}
print_r($numeros);