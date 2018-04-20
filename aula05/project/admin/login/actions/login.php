<?php

require_once dirname(dirname(dirname(__DIR__))).'/include/database/login/login.php';

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

if ($request == 'POST') {
	
	$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
	$pass = filter_input(INPUT_POST, 'pass');

	if (verifyLogin($email,$pass)) {
		header('location:'.BASEDIR.'admin/posts/views/index.php');
	} else {
		header('location:'.BASEDIR.'admin/login/views/login.php');
	}
}