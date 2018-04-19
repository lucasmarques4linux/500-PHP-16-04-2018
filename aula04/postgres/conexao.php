<?php 

$host 	= "localhost";
$port	= "5432";
$dbname	= "aula03";
$dbuser = "lucas";
$dbpass = "123";

$conString = "host={$host} port={$port} dbname={$dbname} user={$dbuser} password={$dbpass}";

echo '<pre>';
echo $conString;
echo '<hr>';
$con = pg_connect($conString);

// var_dump($con);