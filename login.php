<?php
    session_start();
    if(!isset($_SESSION['autorizado'])){
        $_SESSION['autorizado']='no';
    }

    //$_SESSION['autorizado']='no';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller el Porteño</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  

    <!-- Archivos a incluir -->
    <?php 
    
    $mensaje = "Ingrese los datos";
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){$mensaje = 'El dato ya existe en la base de datos.';}
        if($_GET['mensaje']=='dos'){$mensaje = 'El dato usuario no esta registrado.';}
    } 
    include("../PPT/includes/coneccion.php");
    ?> 


</style>

</head>
<body class="container">

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <?php
                    if($_SESSION['autorizado']=='no'){
                ?>

                    <br>
                    <legend>Formulario de ingreso.</legend>
                    <form action="login_bd.php" method="post">
                        <div class="form-group">
                            <label for="user">Ingrese su usuario</label>
                            <input type="text" id="user" required name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Ingrese su clave</label>
                            <input type="password" required id="pass" name="pass" class="form-control">
                        </div>  
                        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>                      
                    </form>
                    <br>
                    <div class="row">
                        
                        <div class="col text-center"><a href="recuperarContraseña.php">Olvidé mi clave</a></div>
                    </div>
                    <br>
                    <?php echo $mensaje; ?>

                <?php
                    } else echo '<br>Bienvenido a la aplicacion Web';
                ?>
            </div>
      </div>
    </div>


    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>