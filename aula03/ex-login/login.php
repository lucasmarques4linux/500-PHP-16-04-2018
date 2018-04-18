<!-- 
// Pagina para login de usuario, após logar, redirecionar para aplicação
// usuario = admin
// senha   = admin
 -->
<form action="" method="POST">
 <p>Login: <input type="text" name="login"></p>	
 <p>Senha: <input type="password" name="pass"></p>
 <p><input type="submit" value="Login"></p>	
</form>
<?php 

if (!empty($_POST)) {
	if ($_POST['login'] == 'admin' && $_POST['pass'] == 'admin') {
		session_start();
		$_SESSION['logado'] = true;		
		$_SESSION['nome'] = 'Administrador';
		header('Location:app.php');		
	} else {
		echo '<p style="color:red;">Login ou senha Inválidos</p>';
	}
}