<?php 

echo '<pre>';
$temperaturas = [
	// 'chave' => 'valor'
	'2018' => [
			'Janeiro' => 28,
			'Fevereiro' => 29,
			'Marco' => 27
		],
	'2017' => [
			'Janeiro' => 26,
			'Fevereiro' => 30,
			'Marco' => 28
		]
];

print_r($temperaturas);

echo '<hr>';
echo $temperaturas['2018']['Janeiro'];