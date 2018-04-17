<?php 

function negrito(string $msg = 'padrao')
{
	echo '<strong>'.$msg.'</strong>' . PHP_EOL;
}
$numero = 74;
function soma(int $num1,int $num2)
{
	global $numero;
	$numero = 10;
	echo $numero . PHP_EOL;
	$resultado = $num1 + $num2;
	return $resultado;
}
$empresa = '4Linux';
negrito($empresa);
echo '<hr>';
echo soma(3,5);
echo '<br>';
echo soma(40,10);
echo '<hr>';
var_dump(soma(3,100));
echo '<hr>';
echo $numero;

echo '<hr>';

function adicionar(&$fruta)
{
	++$fruta;
}

$laranjas = 5;
++$laranjas;
adicionar($laranjas);
echo $laranjas;