<?php 

//Inserindo dados no banco
require 'conexao.php';

if (!empty($_POST)) {
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$query = "INSERT INTO usuarios(email,senha) VALUES ('{$email}','{$senha}')";

	$result = mysqli_query($con,$query);
	if ($result) {
		echo 'OK';
	} else {
		echo 'Erro ao inserir';
	}
}