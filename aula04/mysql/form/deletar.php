<?php 

require_once '../../bancoMysql.php';

if (!empty($_POST)) {
	
	$id = $_POST['id'];
	$where = "id={$id}";
	deletar('usuarios',$where);
	header('location:form.php');
}