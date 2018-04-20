<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>

<?php require_once dirname(__DIR__).'/actions/edit.php'; ?>

<form method="POST" action="<?= BASEDIR.'admin/posts/actions/update.php' ?>">
	<input type="hidden" name="id" value="<?= $post['id'] ?>">
	<p>Title: <input type="text" name="title" value="<?= $post['title'] ?>"></p>
	<p>Text: <textarea name="text"><?= $post['text'] ?></textarea></p>
	<p>Published: <input type="checkbox" name="published" <?= $post['published'] ? 'checked' : '' ?>></p>
	<p>Created at : <?= $post['created_at']?></p>
	<p><input type="submit" value="Salvar"></p>
</form>
<a href="<?= BASEDIR.'admin/posts/views/index.php' ?>"><button>Voltar</button></a>
<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>