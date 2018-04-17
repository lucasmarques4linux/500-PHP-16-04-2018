<?php 

echo '<pre>';

// Array $pessoa -> Nome, Idade e Email
// Exibir na tela o conteúdo de cada informação seguindo o exemplo;
// Meu nome é
// Tenho x anos
// Meu email é

$pessoa = [
	'nome' => 'Lucas Marques',
	'idade' => 24,
	'email'=> 'lucasmarques73@hotmail.com'
	];

echo 'Meu nome é ' . $pessoa['nome'] . PHP_EOL;
echo 'Tenho ' . $pessoa['idade'] . ' anos' . PHP_EOL;
echo 'Meu email é ' . $pessoa['email'] . PHP_EOL;

echo '<hr>';

// Arrray PessoaS onde teremos 3 pessoa
// cada pessoa possui Nome, Idade e Email
// Exibir na tela o conteúdo de cada informação seguindo o exemplo;
// Meu nome é
// Tenho x anos
// Meu email é

$pessoas = [
	[
		'nome' => 'Lucas Marques',
		'idade' => 24,
		'email'=> 'lucasmarques73@hotmail.com'
	],
	[
		'nome' => 'João Silva',
		'idade' => 32,
		'email'=> 'j.silva@hotmail.com'
	],
	[
		'nome' => 'José Jorge',
		'idade' => 40,
		'email'=> 'jj@hotmail.com'
	]
];

foreach ($pessoas as $pessoaArray) {
	echo 'Meu nome é ' . $pessoaArray['nome'] . PHP_EOL;
	echo 'Tenho ' . $pessoaArray['idade'] . ' anos' . PHP_EOL;
	echo 'Meu email é ' . $pessoaArray['email'] . PHP_EOL;
	echo '<hr>';
}