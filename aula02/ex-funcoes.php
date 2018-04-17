<?php 

// Criar uma função que receba um número e retorne se ele é par ou ímpar

function isParImpar(int $num)
{
	if ($num % 2 == 0) {
		return 'Par' . PHP_EOL;
	} else {
		return 'Impar' . PHP_EOL;
	}
}
$num = readline('Valor: ');
echo isParImpar($num);

// Criar uma função que receba uma ídade e retorne se ele é maior de idade ou não

function isMaiorIdade(int $idade) : bool
{
	if ($idade >= 18) {
		return true;
	} else {
		return false;
	}
}
$idade = 18;
if(isMaiorIdade($idade)){
	echo 'Pode Tirar Habilitação' . PHP_EOL;
}

// Criar uma função que receba dois números e retorne o maior

function isMaior(int $num1, int $num2){
	if ($num1 > $num2) {
		return $num1;
	} else {
		return $num2;
	}
}

$valor1 = readline('Valor1: ');
$valor2 = readline('Valor2: ');

echo 'O Maior é ' . isMaior($valor1,$valor2) . PHP_EOL;

//Criar uma função que receba uma idade e um temHabilitacao (bool) e retorne se ele pode dirigir.

function podeDirigir(int $idade, bool $temHabilitacao){
	if (isMaiorIdade($idade) && $temHabilitacao) {
		return true;
	} else {
		return false;
	}
}

if (podeDirigir(19,true)) {
	echo 'Pode pegar o carro e dirigir' . PHP_EOL;
} else {
	echo 'Não pode dirigir ' . PHP_EOL;
}
