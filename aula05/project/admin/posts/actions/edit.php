<?php 

require_once dirname(dirname(dirname(__DIR__))).'/include/database/posts/find.php';

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

if ('GET' == $request) {
	$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
	$post = findPost($id);
}
