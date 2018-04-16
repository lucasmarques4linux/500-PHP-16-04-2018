<?php 

//Para ser promovido, vamos verificar Se salario maior ou igual a 1000, Se o tempo de serviço é maior ou igual a 12 meses e Se não tem reclamações;
//Caso tudo seja verdadeiro, mostre Parabéns, você foi promovido;

$salario = readline('salario: ');
$tempoServico = readline('tempoServico: ');
$reclamacoes = readline('reclamacoes: ');

if ($salario >= 1000 && $tempoServico >= 12 && !$reclamacoes) {
	echo 'Parabéns, você foi promovido' . PHP_EOL;
}