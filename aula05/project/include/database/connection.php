<?php 

require_once  dirname(__DIR__).'/config/database-config.php';

switch (DB_CONNECTION) {
		case 'PostgreSQL':
			require_once dirname(__DIR__).'/database/funcs/postgres-funcs.php';
			break;
		case 'Mysql':
			require_once dirname(__DIR__).'/database/funcs/mysql-funcs.php';
			break;
		default:
			require_once dirname(__DIR__).'/database/funcs/mysql-funcs.php';
			break;
	}

