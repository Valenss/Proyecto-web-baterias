<?php
include("../PPT/includes/coneccion.php");
session_start();
$id=$_SESSION['id_cliente'];
$nombre = filter_var($_POST['nombre']);
$cuit = filter_var($_POST['cuit']);
$apellido=filter_var($_POST['apellido']);
$direccion=filter_var($_POST['direccion']);
$telefono=filter_var($_POST['telefono']);
$mail=filter_var($_POST['mail']);
$patente=filter_var($_POST['patente']);
$update = mysqli_query($conexion,"UPDATE clientes SET nombre='$nombre', apellido='$apellido',cuit_cuil='$cuit',direccion='$direccion',Telefono='$telefono',Numero_patente='$patente',mail='$mail' WHERE id_cliente = $id");
if($update){
    header('location: usuarios.php');
}else{
     header('location: inicio.php');
}


        //$nombre=mysqli_real_escape_string($conexion,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        /*$apellido = mysqli_real_escape_string($conexion,(strip_tags($_POST["apellido"],ENT_QUOTES)));
        $cuit= mysqli_real_escape_string($conexion,(strip_tags($_POST["cuit"],ENT_QUOTES)));
        $direccion= mysqli_real_escape_string($conexion,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        $telefono= mysqli_real_escape_string($conexion,(strip_tags($_POST["telefono"],ENT_QUOTES)));
        $mail= mysqli_real_escape_string($conexion,(strip_tags($_POST["mail"],ENT_QUOTES)));
        $patente= mysqli_real_escape_string($conexion,(strip_tags($_POST["patente"],ENT_QUOTES)));
        $update = mysqli_query($conexion,"UPDATE clientes SET nombre='$nombre', apellido='$apellido',cuit/cuil='$cuit',direccion='$direccion',Telefono='$telefono',Numero_patente='$patente',mail='$mail' WHERE id_cliente = $id");
         header("inicio.php");*/    
?>