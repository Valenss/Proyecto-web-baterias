<?php
session_start();
use function PHPSTORM_META\sql_injection_subst;
include("../PPT/includes/coneccion.php");
include("includes/Menu.php");
//session_start();
/*if(isset($_SESSION['valor'])){
    echo $_SESSION['valor'];
}else{
    echo 'el valor no llego';
}*/
$nik=base64_decode( $_GET['nik']);
$sql = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id_articulo = $nik");
$imge;
$dimenciones;
$descripcion;
$precio;
if(isset($sql)){
    
    while ($row = mysqli_fetch_assoc($sql)){
        $imge = $row['imagen'];
        $precio= $row['Precio'];
        $dimenciones= $row['dimenciones'];
        $descripcion= $row['descripcion'];
        $_SESSION['producto']=$nik;
        

        echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrontEnd Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php menu()?>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/el-porteno.jpeg" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
    <a class="navegacion__enlace navegacion__enlace--activo" href="inicio.php">Tienda</a>
    <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
    <a class="navegacion__enlace" href="carrito.php">Carrito</a>
    <a class="navegacion__enlace" href="usuarios.php">Usuarios</a>
    </nav>

    <main class="contenedor">
        <h1></h1>

        <div class="camisa">
            <img class="camisa__imagen" src="'.$imge.'"alt="Imagen del Producto">

            <div class="camisa__contenido">
                <p>Descripcion'.$descripcion.'</p>
                <p>dimenciones'.$dimenciones.'</p>
                <p>Precio'.$precio.'</p>

                <form class="formulario"  method="post" action="carrito.php">
                    <input class="formulario__campo" type="number" name="cantidad" placeholder="Cantidad" min="1">
                    <input style=" display: none" value="1" type="number" name="sumador"></input>
                    <input class="formulario__submit" type="submit" name="ja" value="Agregar al Carrito" onclick="Contar()">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">El Porteño - Todos los derechos Reservados 2021.</p>
    </footer>
    	<!-- JavaScript -->
	  <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
</body>
</html>
';
    }
    
}else{

    echo 'no llego ningun valor';
}
?>