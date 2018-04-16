<?php 

// Utilize qualquer uma das estruturas acima, mostre os números de 200 à 300 mas quando encontrar o número 277 ele deve parar a execução;

for ($i=200; $i <= 300; $i++) { 
	if ($i == 277) {
		break;
	}
	echo $i . PHP_EOL;
}