<?php include 'editar.php' ?>

<form action="" method="POST">
	<p>Email: <input type="email" name="email" value="<?=$user['email']?>"required></p>
	<p>Senha: <input type="password" name="senha" value="<?=$user['senha']?>" required></p>
	<input type="hidden" name="id" value="<?=$user['id']?>">
	<p><input type="submit" value="Salvar"></p>
</form>

<?php include 'inserir.php'; ?>
<?php include 'buscar.php'; ?>