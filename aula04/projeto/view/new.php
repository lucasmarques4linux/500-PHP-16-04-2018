<?php include 'header.php'; ?>
<form action="../action/new.php" method="POST">
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="senha">Senha</label>
		<input type="password" name="senha" class="form-control" required>
	</div>
	<a href="index.php" class="btn btn-sm btn-warning">Voltar</a>
	<button type="submit" class="btn btn-sm btn-default">Salvar</button>
</form>
<?php include 'footer.php'; ?>