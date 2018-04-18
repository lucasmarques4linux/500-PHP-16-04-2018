<?php 

function calculaImc($altura, $peso)
{
	$imc = $peso / ($altura * $altura);
	return round($imc,2);
}

function exibeImc($imc)
{
	if($imc <= 17){
		return 'Muito abaixo do peso.';
	}elseif($imc < 18.49){
		return 'Abaixo do peso.';
	}elseif($imc <= 24.99){
		return 'Peso normal.';
	}elseif($imc <= 29.99){
		return 'Acima do peso.';
	}elseif($imc <= 34.99){
		return 'Obesidade I.';
	}elseif($imc <= 39.99){
		return 'Obesidade II (severa).';
	}elseif($imc > 40){
		return 'Obesidade III (mórbida).';
	}
}
