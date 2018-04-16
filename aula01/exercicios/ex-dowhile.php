<?php 

//Utilizando a estrutura de repetição DOWHILE, imprima os números de 0 a 10;
//Utilizando a estrutura de repetição DOWHILE, imprima os números pares de 0 a 20;
//Utilizando a estrutura de repetição DOWHILE, imprima os números ímpares de 0 a 20;

echo '---------------------------'. PHP_EOL;
$num = 0;
do {
	echo $num . PHP_EOL;
	$num++;
} while ( $num <= 10);

echo '----------PARES-------------'. PHP_EOL;
$num = 0;
do {
	if ($num % 2 == 0) {
		echo $num . PHP_EOL;
	}
	$num++;
} while ($num <= 20);

echo '----------ÍMPARES-----------'. PHP_EOL;
$num = 0;
do {
	if ($num % 2 != 0) {
		echo $num . PHP_EOL;
	}
	$num++;
} while ($num <= 20);	