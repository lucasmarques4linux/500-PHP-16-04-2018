<?php 

// foreach
echo '<pre>';

$nomes = ['Lucas', 'José', 'João'];
print_r($nomes);
echo '<hr>';

foreach ($nomes as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
}
echo '<hr>';

$lucas = ['nome' => 'Lucas', 'idade' => 24, 'profissao' => 'programador'];

print_r($lucas);

echo '<hr>';
foreach ($lucas as $key => $value) {
	echo $key . ' - ' . $value . PHP_EOL;
}
echo '<hr>';
$pessoas[] = $lucas;
$pessoas[] = ['nome' => 'João', 'idade' => 32, 'profissao' => 'gerente'];

print_r($pessoas);
echo $pessoas[0]['nome'] . PHP_EOL;
echo $pessoas[0]['idade'] . PHP_EOL;
echo '<hr>';

foreach ($pessoas as $key => $value) {
	echo $key . ' - ' . PHP_EOL;
	print_r($value);
}

echo '<hr>';

foreach ($pessoas as $value) {
	print_r($value);
}

echo '<hr>';

foreach ($pessoas as $pessoa) {
	echo $pessoa['nome'] . PHP_EOL;
}