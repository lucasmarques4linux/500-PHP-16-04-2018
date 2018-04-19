<?php 

// Atualizando registros no banco
require 'conexao.php';

// var_dump($con);

$id 	= 17;
$email 	= 'lucas@gmail.com';
$senha 	= '123456';

$query = "UPDATE usuarios SET email='{$email}',senha='{$senha}' WHERE id={$id}";

echo $query;
echo '<br>';
$result = pg_query($con,$query);
if ($result) {
	echo 'OK';
} else {
	echo 'Erro ao atualizar';
}