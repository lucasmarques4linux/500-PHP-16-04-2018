<?php 

echo '<pre>';
// $array[] = 'valor1';
// $array[] = 'valor2';
// $array[] = 10;

// $array = array('valor1','valor2',10);
$array = ['valor1','valor2',10];
$array[] = 10;
$array[10] = 50;
$array[10] = 40;

// echo $array; Não funciona
print_r($array);
var_dump($array);
echo '<hr>';
echo $array[0] . PHP_EOL;
echo $array[1] . PHP_EOL;
echo $array[2] . PHP_EOL;

echo '<hr>';
for ($i=0; $i <= 2 ; $i++) { 
	echo $array[$i] . PHP_EOL;
}
echo '<hr>';
$i = 2;
echo $i . PHP_EOL;
echo $array[$i];

echo '<hr>';

// $arrayAssoc['nome'] = 'Lucas Marques';
// $arrayAssoc['idade'] = 24;

$arrayAssoc = ['nome' => 'Lucas Marques', 'idade' => 24];
$arrayAssoc['profissao'] = 'Programador';

print_r($arrayAssoc);

echo '<hr>';

echo $arrayAssoc['nome'] . PHP_EOL;
echo $arrayAssoc['idade'] . PHP_EOL;