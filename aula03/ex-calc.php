<form action="" method="POST">
	<input type="number" name="num1" placeholder="Número 1">
	<input type="number" name="num2" placeholder="Número 2">
	<select name="op">
		<option value="add">Add</option>
		<option value="sub">Sub</option>
		<option value="div">Div</option>
		<option value="mul">Mul</option>
	</select>
	<input type="submit" value="Calcular">
</form>
<?php 
	
	if (!empty($_POST)) {
		switch ($_POST['op']) {
			case 'add':
				$result = $_POST['num1'] + $_POST['num2'];
				break;
			case 'sub':
				$result = $_POST['num1'] - $_POST['num2'];
				break;
			case 'div':
				$result = $_POST['num1'] / $_POST['num2'];
				break;
			case 'mul':
				$result = $_POST['num1'] * $_POST['num2'];
				break;
			default:
				$result = "Inválido";
				break;
		}
		echo "Resultado: " . $result;
	}
 ?>