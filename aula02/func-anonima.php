<?php 

echo '<pre>';
$nomes = ['Lucas', 'João', 'Marcos'];

$encontrado = array_filter($nomes, function($nome) use (){
	if ($nome == 'João') {
		return $nome;
	}
});

var_dump($encontrado);
$msg = '4Linux';

$var = function($text) use ($msg){ 
	echo 'Olá ' . $msg . $text; 
};
// var_dump($var);
$var('testando');