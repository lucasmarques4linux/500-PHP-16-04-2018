<?php require_once 'site/layout/header.php'; ?>
<?php require_once 'include/database/posts/list.php'; ?>

<?php if(listAllPosts()): ?>
<table border="1">
	<tr>
		<td>Title</td>
		<td>Text</td>
		<td>Created_at</td>
		<td>Author</td>
	</tr>
	<?php foreach (listAllPosts() as $post) :?>
		<tr>
			<td><?= $post['title'] ?></td>
			<td><?= $post['text'] ?></td>
			<td><?= $post['created_at'] ?></td>
			<td><?= $post['author'] ?></td>
		</tr>	
	<?php endforeach; ?>
</table>
<?php else : ?>
	<p>Sem posts</p>
<?php endif; ?>



<?php require_once 'site/layout/footer.php'; ?>