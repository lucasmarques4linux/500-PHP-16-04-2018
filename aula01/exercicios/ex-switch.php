<?php 

//Se nota maior ou igual a 7 e frequencia maior ou igual a 8 -> Imprima aprovado;
//Se nota maior ou igual a 5 ou nota menor que 7 e frequencia maior ou igual a 8 -> Imprima recuperação;
//Se nota menor que 5 ou frequencia menor que 8 -> Imprima reprovado;

$nota = readline('nota: ');
$frequencia = readline('frequencia: ');

switch (true) {
	case ($nota > 7 && $frequencia >= 8):
		echo 'Aprovado' . PHP_EOL;
		break;
	case (($nota >= 5 || $nota < 7) && $frequencia >= 8 ):
		echo 'Recuperacao' . PHP_EOL;
		break;
	case ($nota < 5 || $frequencia < 8):
		echo 'Reprovado' . PHP_EOL;
		break;
	default:
		echo 'Dados inválidos' . PHP_EOL;
		break;
}