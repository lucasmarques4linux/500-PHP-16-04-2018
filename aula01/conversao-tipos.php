<?php 

echo '<pre>';

$boolean = true;
var_dump($boolean);
echo '<hr>';
$int = (int) false;
var_dump($int);
echo '<hr>';
$float = (float) true;
var_dump($float);
echo '<hr>';
$string = (string) 10;
var_dump($string);
echo '<hr>';
$array = (array) 10;
var_dump($array);
echo '<hr>';
$object = (object) 10;
var_dump($object);
echo '<hr>';
$null = (unset) 10;
var_dump($null);