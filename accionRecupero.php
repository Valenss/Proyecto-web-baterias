<?php

    session_start();
     include("includes/coneccion.php");

    // 1. Recibo los valores
    $usuario = filter_var($_POST['user'],FILTER_SANITIZE_STRING);
    $mail = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);

    // 2. Verifico si el usuario existe.
    $consulta1 = "select count(usuario) as nuevo from usuarios where usuario = '$usuario' ";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // 3. Estructura 
    if($existe==0){
        // No existe en la base de datos.
        header("location:login.php?mensaje=dos");
    }else {
        // Existe el usuario, recupero la clave de la BDD
        $consulta_mail_bdd = "SELECT clave FROM usuarios WHERE usuario='$usuario'";
        

        $resultado_mail_bdd = mysqli_query($conexion,$consulta_clave_bdd);

        while($a = mysqli_fetch_assoc($resultado_mail_bdd)){
            $mail_bdd = $a['mail'];
        }
         
    }
echo $_SESSION['mail'];
    // 4. Verificamos la clave
    if($mail === $mail_bdd){
        //Clave correcta - Recupero los datos
       $consulta_datos = "select * from usuarios where usuario = '$usuario' ";
       $resultado_consulta_datos = mysqli_query($conexion,$consulta_datos);
        
       while($b = mysqli_fetch_array($resultado_consulta_datos)){
           $_SESSION['usuario'] = $b['usuario'];
           $_SESSION['id_cliente'] = $b['id_cliente'];
           $_SESSION['roll']=$b['rol'];
           $_SESSION['autorizado']='si';
           header("location:contraseñaNueva.php");
       }


    }else echo '<br> Error en la clave<br>', $mail_bdd;

?>