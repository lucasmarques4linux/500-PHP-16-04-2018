<form method="POST" action="">
	<p><input type="number" name="num1" placeholder="Número 1"></p>
	<p><input type="number" name="num2" placeholder="Número 2"></p>
	<input type="submit" value="Calcular">
</form>
<?php

if (!empty($_POST)) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	echo '<p>Soma: ' .($num1+$num2) . '</p>';
	echo '<p>Subt: ' .($num1-$num2) . '</p>';
	echo '<p>Mult: ' .($num1*$num2) . '</p>';
	echo '<p>Divi: ' .($num1/$num2) . '</p>';
}