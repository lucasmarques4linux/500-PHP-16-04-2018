<?php 

require_once dirname(__DIR__).'/connection.php';

function listPostsForUser()
{
	$user = getUserLogged();
	$where = 'user_id='.$user['id'];
	$order = 'created_at';
	$posts = findAll('posts','*',$where,null,$order);
	return $posts;
}

function listAllPosts()
{
	// $order = 'created_at';
	// $posts = findAll('posts','*',null,null,$order);
	$query = "SELECT * FROM users u INNER JOIN posts p ON u.id = p.user_id ORDER BY p.created_at";

	$con = conect();
	if (DB_CONNECTION == 'PostgreSQL') {
		$result = pg_query($con,$query);
		$posts = pg_fetch_all($result);
	} else if (DB_CONNECTION == 'MySQL') {
		$result = mysqli_query($con,$query);
		$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	desconect($con);

	return $posts;	
}

