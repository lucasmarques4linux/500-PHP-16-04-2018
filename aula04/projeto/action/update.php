<?php 

require_once '../db/banco.php';

$dados = ['email' => $_POST['email'],'senha' => $_POST['senha']];

$id = ($_POST['id']) ?: null;

editar('usuarios',$dados,'id='.$id);

header('location:../view/index.php');