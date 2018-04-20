<?php 

require_once dirname(__DIR__).'/connection.php';
require_once dirname(dirname(__DIR__)).'/funcs/session-funcs.php';
require_once dirname(dirname(__DIR__)).'/config/dir-config.php';

function verifyLogin(string $email,string $pass)
{
	$where = "email='{$email}' AND pass='{$pass}'"; 
	$user = find('users','*',$where);
	if ($user) {
		initSessionUser($user);
		return true;
	} else {
		sessionError('Username or password is invalid');
		return false;
	}
}