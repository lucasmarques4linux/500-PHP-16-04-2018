<?php 

require_once dirname(dirname(__DIR__)).'/config/database-config.php';

function conect()
{
	switch (DB_CONNECTION) {
		case 'PostgreSQL':
			return pg_connect(CON_STRING);
			break;
		case 'Mysql':
			return mysqli_connect(HOST,USER,PASS,DB);
			break;
		default:
			return false;
			break;
	}
}

function desconect($con)
{
	switch (DB_CONNECTION) {
		case 'PostgreSQL':
			pg_close($con);
			break;
		case 'Mysql':
			mysqli_close($con);
			break;
		default:
			return false;
			break;
	}
}