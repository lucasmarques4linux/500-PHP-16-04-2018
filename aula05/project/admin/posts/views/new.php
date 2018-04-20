<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>

<form method="POST" action="<?= BASEDIR.'admin/posts/actions/create.php' ?>">
	<p>Title: <input type="text" name="title"></p>
	<p>Text: <textarea name="text"></textarea></p>
	<p>Published: <input type="checkbox" name="published"></p>
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="<?= BASEDIR.'admin/posts/views/index.php' ?>"><button>Voltar</button></a>
<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>