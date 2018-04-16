<?php 

// Receba dois números e retorne qual o maior número;
$num1 = readline('primeiro numero: ');
$num2 = readline('segundo numero: ');

if ($num1 > $num2) {
	echo 'Maior: ' . $num1 . PHP_EOL;
} else if ($num1 < $num2){
	echo 'Maior: ' . $num2 . PHP_EOL;
} else {
	echo 'Número Iguais' . PHP_EOL;
}

// Receba um número e retorne se ele é par ou ímpar;

$num = readline('numero: ');
if ($num % 2 == 0) {
	echo $num . ' é par' . PHP_EOL;
} else {
	echo $num . ' é ímpar' . PHP_EOL;
}