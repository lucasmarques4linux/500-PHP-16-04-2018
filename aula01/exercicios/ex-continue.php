<?php 

// Utilize qualquer uma das estruturas acima, mostre os números de 10 à 50 ignorando os múltiplos de 5;

for ($i=10; $i <= 50 ; $i++) { 
	if ($i % 5 == 0) {
		continue;
	}
	echo $i . PHP_EOL;
}