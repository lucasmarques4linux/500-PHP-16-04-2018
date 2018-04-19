<?php 

//Buscando informações do banco
require 'conexao.php';

$query = "SELECT * FROM usuarios";

echo $query;

echo '<br>';
$result = pg_query($con,$query);
// Para mais de um registro
$data = pg_fetch_all($result);

foreach ($data as $user) {
	echo $user['email'] . '<br>';
}