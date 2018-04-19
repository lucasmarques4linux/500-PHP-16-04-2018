<?php include 'header.php'; ?>
<?php include BASEDIR .'action/edit.php' ?>
<form action="../action/update.php" method="POST">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" value="<?=$user['email']?>" name="email" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="senha">Senha</label>
		<input type="password" value="<?=$user['senha']?>" name="senha" class="form-control" required>
	</div>
	<input type="hidden" name="id" value="<?=$user['id']?>">
	<a href="index.php" class="btn btn-sm btn-warning">Voltar</a>
	<button type="submit" class="btn btn-sm btn-default">Salvar</button>
</form>
<?php include 'footer.php'; ?>