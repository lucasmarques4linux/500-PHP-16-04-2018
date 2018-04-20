<?php 

require_once dirname(__DIR__).'/connection.php';

function findPost(int $id)
{
	$user = getUserLogged();
	$where = 'user_id='.$user['id'].' AND id='.$id;
	$post = find('posts','*',$where);
	return $post;
}

