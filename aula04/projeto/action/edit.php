<?php

require_once '../db/banco.php';

if (isset($_GET['id'])) {
	$where = "id=".$_GET['id'];
	$user = buscar('usuarios','*',$where);
}