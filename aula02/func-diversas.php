<?php 

// empty -  Verifica se varivavel está vazia

$var = '';
if (empty($var)) {
	echo 'vazio';
}

echo '<hr>';

// isset - Verifica se variavel está setada(construida)

if (!isset($var2)) {
	echo 'Não foi criada';
}

echo '<hr>';
// is_bool - Verifica se a variavel é do tipo boolean
// is_int, is_array, is_float,is_string, etc;

$var = true;
if (is_bool($var)) {
	echo 'é bool';
}

echo '<hr>';

// unset - Destrói uma variavel
unset($var);
if (isset($var)) {
	echo 'está criada';
} else {
	echo 'não está criada';
}

echo '<hr>';

// strip_tags — Retira as tags HTML e PHP de uma string

$string = "<script>alert('ola')</script>";
echo strip_tags($string);

echo '<hr>';

// md5 - Calcula o MD5 hash de uma string
$senha = '123456';
echo md5($senha);
echo '<br>';
echo md5($senha);

echo '<hr>';

// sha1 - Calcula o hash sha1 de uma string
$senha = '123456';
echo sha1($senha);
echo '<br>';
echo sha1($senha);

echo '<hr>';

// hash - Calcular o hash da sting usando o parametro passado

$senha = '123456';
echo hash('md5',$senha);
echo '<br>';
echo hash('sha1',$senha);

echo '<hr>';
// crypt - Cria um hash de uma string
$senha = '123456';
echo crypt($senha);
echo '<br>';
echo crypt($senha);

// die() e exit() - Interrompem a execução do código