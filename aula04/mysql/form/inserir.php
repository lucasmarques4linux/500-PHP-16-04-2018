<?php 

//Inserindo dados no banco
require_once '../../bancoMysql.php';

if (!empty($_POST)) {
	$dados = ['email' => $_POST['email'],'senha' => $_POST['senha']];
	$id = ($_POST['id']) ?: null;
	//$id = ($_POST['id']) ? $_POST['id'] : null;
	// if($_POST['id']){ $id = $_POST['id']; } else { $id = null; }

	if ($id) {
		editar('usuarios',$dados,'id='.$id);
	} else {
		inserir('usuarios',$dados);
	}
}