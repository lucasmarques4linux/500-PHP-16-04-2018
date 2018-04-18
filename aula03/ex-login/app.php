<?php 

session_start();
// if ($_SESSION['logado']) {
// 	$nome = $_SESSION['nome'];
// } else {
// 	header('location:login.php');
// }
if (!$_SESSION['logado']) {
	header('location:login.php');
}
$nome = $_SESSION['nome'];

?>

<!-- // aplicação, acesso permitido apenas para usuario logado. -->
<p>Bem Vindo, <strong><?= $nome ?></strong></p>
<p><a href="logoff.php">Sair</a></p>