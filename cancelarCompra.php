<?php 
session_start();
header("location: inicio.php");
$cont=0;
unset( $_SESSION['producto']);
unset($_SESSION['contador']);
unset($_SESSION['cantidad']);
unset($_SESSION['productos'][$cont]);
unset($_SESSION['cantidad'][$cont]);
session_unset();
session_destroy();

?>