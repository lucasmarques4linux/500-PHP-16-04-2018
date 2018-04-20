<?php 

require_once dirname(__DIR__).'/connection.php';
require_once dirname(dirname(__DIR__)).'/config/dir-config.php';

function deletePost(int $id)
{
	$where = "id={$id}";
	delete('posts',$where);
}