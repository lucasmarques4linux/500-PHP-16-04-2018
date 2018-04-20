<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>
<?php require_once dirname(dirname(dirname(__DIR__))).'/include/database/posts/list.php'; ?>

<p><a href="<?= BASEDIR.'admin/posts/views/new.php' ?>"><button>Novo</button></a></p>
<?php if(listPostsForUser()): ?>
	<table border="1">
		<tr>
			<td>Title</td>
			<td>Created At</td>
			<td>Published</td>
			<td>Actions</td>
		</tr>
	<?php foreach (listPostsForUser() as $post) :?>
		<tr>
			<td><?= $post['title'] ?></td>
			<td><?= $post['created_at'] ?></td>
			<td><?= $post['published'] ? 'true' : 'false' ?></td>
			<td>
				<a href="<?= BASEDIR."admin/posts/views/edit.php?id={$post['id']}"?>"><button>Edit</button></a>
				<form method="POST" action="<?= BASEDIR.'admin/posts/actions/delete.php' ?>">
					<input type="hidden" name="id" value="<?= $post['id']  ?>">
					<input type="submit" value="Delete">
				</form>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php else : ?>
	<p>Sem posts</p>
<?php endif; ?>

<?php require_once dirname(dirname(__DIR__)).'/layout/header.php'; ?>