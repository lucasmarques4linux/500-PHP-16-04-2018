<?php 

// Deletando registros no banco
require 'conexao.php';

// var_dump($con);

$id = 17;

$query = "DELETE FROM usuarios WHERE id={$id}";

echo $query;
echo '<br>';
$result = pg_query($con,$query);
if ($result) {
	echo 'OK';
} else {
	echo 'Erro ao deletar';
}