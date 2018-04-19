<?php 

require_once '../db/banco.php';

$dados = ['email' => $_POST['email'],'senha' => $_POST['senha']];

inserir('usuarios',$dados);

header('location:../view/index.php');