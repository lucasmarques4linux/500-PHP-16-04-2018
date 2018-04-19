<?php 

//Buscando informações do banco
require_once '../../bancoMysql.php';

$data = buscarTodos('usuarios');
?>
<table border="1">
	<tr>
		<td>Email</td>
		<td>Senha</td>
		<td>Ações</td>
	</tr>
	<?php foreach ($data as $user) :?>
		<tr>
			<td><?= $user['email'] ?></td>
			<td><?= $user['senha'] ?></td>
			<td>
				<form method="post" action="deletar.php">
					<input type="hidden" name="id" value="<?= $user['id']?>">
					<input type="submit" value="Excluir">
				</form>
				<a href="form.php?id=<?=$user['id']?>">Editar</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>