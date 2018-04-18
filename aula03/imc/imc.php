<?php 

include 'funcs.php';
if (!empty($_POST)) {
	
	$altura = $_POST['altura'];
	$peso = $_POST['peso'];

	$imc = round(calculaImc($altura,$peso),2);

	$msg = exibeImc($imc);

	echo '<div class="row">
		 <h2>' . $msg. '</h2>
		 </div>';
}