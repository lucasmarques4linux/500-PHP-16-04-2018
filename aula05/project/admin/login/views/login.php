<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>
<p>login</p>
<a href="<?= BASEDIR.'index.php' ?>">Voltar</a>

<form action="<?= BASEDIR.'admin/login/actions/login.php' ?>" method="POST">
<?php if (hasErrorLogin()): ?>
	<p><?= getErrorLogin() ?></p>
<?php  endif;?>
	<input type="text" name="email">
	<input type="password" name="pass">
	<input type="submit" value="Login">
</form>

<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>