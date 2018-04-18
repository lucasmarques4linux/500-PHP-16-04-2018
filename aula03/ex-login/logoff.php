<?php 

// Pagina para destruir a sessao e redirecionar para login

session_start();
session_destroy();
header('location:login.php');