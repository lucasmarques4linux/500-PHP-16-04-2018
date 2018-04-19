<?php include 'header.php'; ?>
<?php include BASEDIR.'action/list.php'; ?>
<div class="container">
	<div class="pull-right">
		<a class="btn btn-sm btn-primary"  href="new.php">Novo</a>
	</div>

	<table  class="table">
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
					<form method="post" action="<?= BASEDIR?>action/delete.php">
						<input type="hidden" name="id" value="<?= $user['id']?>">
						<input type="submit" class="btn btn-sm btn-danger" value="Excluir">
					</form>
					<a class="btn btn-sm btn-info"href="edit.php?id=<?=$user['id']?>">Editar</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php include 'footer.php'; ?>