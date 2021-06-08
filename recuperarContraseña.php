<?php 
include("../PPT/includes/coneccion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <title>El Porteño</title>
<!-- CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">  

<!-- Archivos a incluir -->
</head>
<body class="contenedor">
<legend>Recuperar Contraseña</legend>
                    <form class="formulario" action="accionRecupero.php" method="post">
                        <div class="form-group">
                            <label for="user">Ingrese su usuario</label>
                            <input type="text" id="user" required name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">Ingrese su mail</label>
                            <input type="text" required id="pass" name="pass" class="form-control">
                        </div>  
                        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>                      
                    </form>

        <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>