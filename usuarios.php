<?php 
include("../PPT/includes/coneccion.php");
session_start();
if($_SESSION['autorizado']=='no'){

    header("location:login.php?mensaje=dos");
    }else{
$id=$_SESSION['id_cliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baterias el Porteño</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
 
$sql = mysqli_query($conexion, "SELECT * FROM clientes WHERE id_cliente = $id");
if(isset($sql)){
    while($row=mysqli_fetch_assoc($sql)){
        echo '
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/el-porteno.jpeg" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace" href="inicio.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlace" href="carrito.php">Carrito</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="usuarios.php">'.$row['nombre'].'</a>
    </nav>
    <form class="formulario">
    <main class="contenedor">
    <p >Nombre: '.$row['nombre'].'</p>
    <p >Apellido: '.$row['apellido'].'</p>
    <p >cuit/cuil: '.$row['cuit_cuil'].'</p>
    <p >Direccion: '.$row['direccion'].'</p>
    <p >Telefono: '.$row['Telefono'].'</p>
    <p >Correo electronico: '.$row['mail'].'</p>
    <p >Patente N°: '.$row['Numero_patente'].'</p>
    <button><a href="editarUsuario.php">editar</a></button>
    <button><a href="logout.php">Cerrar Secion</a></button>
    </main>
    </form>
    <footer class="footer">
        <p class="footer__texto">Baterias el Porteño - Todos los derechos Reservados 2021.</p>
    </footer>
         <!-- JavaScript -->
         <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
</body>
</html>
';
    }
}else{
    echo 'usuario no inicio secion';
}
    }
?>