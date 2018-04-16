<?php 

echo '----------' . PHP_EOL;
echo '-0 - Soma-' . PHP_EOL;
echo '-1 - Subt-' . PHP_EOL;
echo '-2 - Divi-' . PHP_EOL;
echo '-3 - Mult-' . PHP_EOL;
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
	default:
		echo 'Opção Inválida' . PHP_EOL;
		break;
}

//-------------------------------

$num = 10;

switch (true) {
	case ($num > 10 && $num < 20):
		echo 'Número ' . $num;
		break;
	case ($num < 10 || $num > 20):
		echo 'Número ' . $num;
		break;
	default:
		# code...
		break;
}

// http://dontpad.com/switch