<?php 

//Inserindo dados no banco
require 'conexao.php';

// var_dump($con);

$email = 'lucas2@gmail.com';
$senha = '123';

$query = "INSERT INTO usuarios(email,senha) VALUES ('{$email}','{$senha}')";

echo $query;
echo '<br>';

$result = pg_query($con,$query);
if ($result) {
	echo 'OK';
} else {
	echo 'Erro ao inserir';
}