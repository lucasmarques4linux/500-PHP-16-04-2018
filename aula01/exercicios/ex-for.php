<?php 

//Utilizando a estrutura de repetição FOR, imprima os números de 0 a 10;
//Utilizando a estrutura de repetição FOR, imprima os números pares de 0 a 20;
//Utilizando a estrutura de repetição FOR, imprima os números ímpares de 0 a 20;

echo '---------------------------'. PHP_EOL;
for ($i=0; $i <= 10; $i++) { 
	echo $i .PHP_EOL
}

echo '----------PARES-------------'. PHP_EOL;
for ($i=0; $i <= 20; $i++) { 
	if ($i % 2 == 0) {
		echo $i .PHP_EOL	
	}	
}

echo '----------ÍMPARES-----------'. PHP_EOL;
for ($i=0; $i <= 20; $i++) { 
	if ($i % 2 != 0) {
		echo $i .PHP_EOL	
	}	
}