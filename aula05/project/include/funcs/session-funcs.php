<?php 

session_start();

function initSessionUser(array $user)
{
	$_SESSION['user'] = $user;
	$_SESSION['logged'] = true;
}

function isLogged()
{
	return (isset($_SESSION['logged'])) ? $_SESSION['logged']: false;
}

function logout(){
	session_destroy();
}

function sessionError(string $error)
{
	$_SESSION['error'] = $error;
}

function hasErrorLogin()
{
	return (isset($_SESSION['error'])) ? true : false;
}

function getErrorLogin()
{
	$error = $_SESSION['error'];
	unset($_SESSION['error']);
	return $error;
}

function getUserLogged()
{
	return $_SESSION['user'];
}