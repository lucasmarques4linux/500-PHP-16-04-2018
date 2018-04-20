<?php 

require_once dirname(dirname(dirname(__DIR__))).'/include/funcs/session-funcs.php';
require_once dirname(dirname(dirname(__DIR__))).'/include/config/dir-config.php';


logout();
header('location:'.BASEDIR);