<?php 

echo '<pre>';
// Funções para arrays
// Saiba mais em - https://secure.php.net/manual/pt_BR/ref.array.php

$array = [10,4,5,4,3,7,8,1];
print_r($array);
// Ordenando o array de forma crescente
sort($array);
print_r($array);

echo '<hr>';

// array_map - Aplica uma função em todos os elementos dos arrays dados
$array = [1,2,3];

function cubo (int $numero)
{
	return $numero * $numero * $numero;
}

foreach ($array as $num) {
	echo cubo($num) . '<br>';
}

$cubo = array_map('cubo', $array);
print_r($cubo);

$quadrado = array_map(function($num){
	return $num * $num;
}, $array);
print_r($quadrado);

echo '<hr>';

// array_filter - Filtra elementos de um array utilizando uma função callback

$array = [10,4,5,4,3,7,8,1];

function par($num)
{
	return ($num % 2 == 0) ? $num : null;
}
function impar($num)
{
	return ($num % 2 != 0) ? $num : null;
}

print_r(array_filter($array,'par'));
print_r(array_filter($array,'impar'));
print_r(array_filter($array,function($num){
	return ($num % 5 == 0) ? $num : null;
}));

echo '<hr>';

// array_key_existis  - Checa se uma chave ou índice existe em um array
$pessoa = ['nome' => 'Lucas','idade'=> 24];
if (array_key_exists('nome', $pessoa)) {
	echo $pessoa['nome'];	
}

// array_search - Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
echo '<br>';
$chave = array_search('Lucas',$pessoa);
echo $chave;
echo '<br>';
$chave = array_search(7,$array);
echo $chave;
echo '<br>';
if (in_array('Lucas', $pessoa)) {
	echo 'ok';
}
echo '<br>';

// in_array - Checa se um valor existe em um array
if (in_array(7,$array)) {
	echo 'ok';
}
echo '<br>';
// count - Conta o número de elementos de uma variável

echo count($array) . '<br>';

// explode - Converte uma string em array quebrando em um determinado caracter

$data = "17/04/2018";
$arrData = explode('/', $data);
print_r($arrData);

// implode - Converte um array em uma string juntando utilizando um determinado caracter
echo implode('-', $arrData);