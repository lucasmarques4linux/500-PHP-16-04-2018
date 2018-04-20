<?php 

require_once dirname(__DIR__).'/connection.php';
require_once dirname(dirname(__DIR__)).'/config/dir-config.php';

function insertPost(array $data)
{
	insert('posts',$data);
}