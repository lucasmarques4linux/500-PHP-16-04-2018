<?php 

require_once '../db/banco.php';

$id = $_POST['id'];
$where = "id={$id}";
deletar('usuarios',$where);

header('location:view/index.php');