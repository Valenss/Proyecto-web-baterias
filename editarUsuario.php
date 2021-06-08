<?php 
include("../PPT/includes/coneccion.php");
session_start();
$id=$_SESSION['id_cliente'];
$sql = mysqli_query($conexion, "SELECT * FROM clientes WHERE id_cliente = $id");
if(isset($sql)){
    while($row=mysqli_fetch_assoc($sql)){
        
        $nombre= $row['nombre'];
        $apellido = $row['apellido'];
        $cuit= $row['cuit_cuil'];
        $direccion= $row['direccion'];
        $telefono= $row['Telefono'];
        $mail= $row['mail'];
        $patente= $row['Numero_patente'];
    }
}
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
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/el-porteno.jpeg" alt="Logotipo">
        </a>
    </header>
    <nav class="navegacion">
        <a class="navegacion__enlace" href="inicio.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlace" href="carrito.php">Carrito</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="usuarios.php"><?php echo $nombre?></a>
    </nav>
    <form class="formulario" method="post" action="guardarEditarUsuario.php">
    <main class="contenedor">
    <p>Nombre: <input type="text" value="<?php echo $nombre?>" name="nombre"></p>
    <p >Apellido: <input type="text" value="<?php echo $apellido?>"name="apellido"></p>
    <p >cuit/cuil: <input type="text" value="<?php echo $cuit?>"name="cuit"></p>
    <p >Direccion: <input type="text" value="<?php echo $direccion?>"name="direccion"></p>
    <p >Telefono: <input type="text" value="<?php echo $telefono?>"name="telefono"></p>
    <p >Correo electronico: <input type="text" value="<?php echo $mail?>"name="mail"></p>
    <p >Patente N°: <input type="text" value="<?php echo $patente?>"name="patente"></p>
    <input type="submit" value="guardar" />
    <button><a href="inicio.php">Cancelar</a></button>
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
