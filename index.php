<?php 
session_start();
$_POST['roll'];
if(isset($_POST['roll']) != 1){
    header("location: inicio.php");
}else{
    echo '
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
<?php include("includes/Menu.php"); ?>
<?php include("includes/coneccion.php");?>
</head>
<body class="contenedor">
<?php menu();?>
    

        <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
';}
?>