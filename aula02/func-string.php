<?php 

$string = 'o rato roeu a roupa do rei de roma';

echo $string . '<br>';

// String em MAIUSCULO
echo strtoupper($string) . '<br>';
// String em minusculo
echo strtolower($string) . '<br>';
// String primeia letra em Maiusculo
echo ucfirst($string) . '<br>';
// String primeira letra de cada palavra em Maiusculo
echo ucwords($string). '<br>';
// Quantidade de caracteres da string
echo strlen($string). '<br>';
// Substituir valores em uma string
echo str_replace(['rato','roeu'], ['cachorro','comeu'], $string) . '<br>';
// Removendo espaço em branco no inicio e final da string

$string = '       tex to          ';
echo $string . '<br>';
echo strlen($string) . '<br>';
$novaString = trim($string);
echo $novaString . '<br>';
echo strlen($novaString) . '<br>';