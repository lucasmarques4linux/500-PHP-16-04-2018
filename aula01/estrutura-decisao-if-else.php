<?php 

// IF

$condicao = true;

if ($condicao) {
	echo 'Verdadeiro';
}
echo '<hr>';
$idade = 19;

if ($idade > 18) {
	echo 'Maior de Idade';
}
echo '<hr>';

//IF e ELSE
$idade = 17;

if ($idade >= 18) {
	echo 'Maior de Idade';
} else {
	echo 'Menor de Idade';
}

// IF, ELSE IF e ELSE
echo '<hr>';
$nota = 5;
$frequencia = 7;

if ($nota >= 6 && $frequencia >= 7) {
	echo 'Aprovado';
} else if ($nota >= 4 && $nota < 6 && $frequencia >= 7){
	echo 'Recuperacao';
} else {
	echo 'Reprovado';
}