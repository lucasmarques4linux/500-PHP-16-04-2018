<?php 

$fim = false;
do {
	echo '----------' . PHP_EOL;
	echo '-1 - Soma-' . PHP_EOL;
	echo '-2 - Subt-' . PHP_EOL;
	echo '-3 - Divi-' . PHP_EOL;
	echo '-4 - Mult-' . PHP_EOL;
	echo '-5 - Sair-' . PHP_EOL;
	echo '----------' . PHP_EOL;

	$opcao = readline('Escolha uma opcao: ');
	switch ($opcao) {
		case 0:
			echo 'Soma : ' . (2+2) . PHP_EOL;
			break;
		case 1:
			echo 'Subt : ' . (2-2) . PHP_EOL;
			break;
		case 2:
			echo 'Divi : ' . (2/2) . PHP_EOL;
			break;	
		case 3:
			echo 'Mult : ' . (2*2) . PHP_EOL;
			break;
		case 5:
			$fim = true;
			break;
		default:
			echo 'Opção Inválida' . PHP_EOL;
			break;
	}
} while (!$fim);