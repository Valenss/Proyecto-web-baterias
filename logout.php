<?php 
    session_start();
    $_SESSION['autorizado']='no';
    session_destroy();
    header("location: inicio.php");
?>