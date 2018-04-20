<?php 
require_once dirname(dirname(dirname(__DIR__))).'/include/funcs/session-funcs.php';
require_once dirname(dirname(dirname(__DIR__))).'/include/database/posts/delete.php';

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

if ($request == 'POST') {
	
	$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

	deletePost($id);

	header('location:'.BASEDIR.'admin/posts/views/index.php');
}