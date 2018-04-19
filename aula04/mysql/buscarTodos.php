<?php 

//Buscando informações do banco
require 'conexao.php';

$query = "SELECT * FROM usuarios";

// echo $query;

echo '<br>';
$result = mysqli_query($con,$query);
// Para mais de um registro
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

if (count($data) <= 0) {
	echo 'Não encontrou nada';
}

// foreach ($data as $user) {
// 	echo $user['email'] . '<br>';
// }
?>
<table border="1">
	<tr>
		<td>Email</td>
		<td>Senha</td>
	</tr>
	<?php foreach ($data as $user) :?>
		<tr>
			<td><?= $user['email'] ?></td>
			<td><?= $user['senha'] ?></td>
		</tr>
	<?php endforeach; ?>
</table>