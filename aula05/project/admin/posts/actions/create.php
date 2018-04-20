<?php 
require_once dirname(dirname(dirname(__DIR__))).'/include/funcs/session-funcs.php';
require_once dirname(dirname(dirname(__DIR__))).'/include/database/posts/create.php';

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

if ($request == 'POST') {
	
	$title = filter_input(INPUT_POST, 'title');
	$text = filter_input(INPUT_POST, 'text');
	$published = filter_input(INPUT_POST, 'published',FILTER_VALIDATE_BOOLEAN);
	$userId = getUserLogged()['id'];
	$created_at = date('Y-m-d');

	$data = [
		'title' => $title,
		'text'  => $text,
		'user_id' => $userId,
		'created_at' => $created_at
		];

	($published) ? $data['published'] = true : null;
	
	insertPost($data);

	header('location:'.BASEDIR.'admin/posts/views/index.php');
}