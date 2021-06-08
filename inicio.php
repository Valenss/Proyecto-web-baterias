<?php 
session_start();

if(isset($_GET['msj'])){
    $msj=$_GET['msj'];
    if($msj=1){
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';

    }else{
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';

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
    
      
   
<?php include("includes/coneccion.php");?>
</head>
<body>

    
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
        <h1>Nuestros Productos</h1>

        <div class="grid">
            <!--.cosulta sql-->
            <?php             
            $sql = mysqli_query($conexion, "SELECT * FROM catalogo ORDER BY id_articulo ASC");
            $valor;
            while($row = mysqli_fetch_assoc($sql)){
                echo '
                <div class="producto">
                    <a href="producto.php?nik='.base64_encode($row["id_articulo"]).'">
                    <img class="producto__imagen" src='.$row["imagen"].' id="miImagen" name="miImagen">
                    <div class="producto__informacion">
                        <p class="producto__nombre" id="Medidas">Medidas: '.$row["dimenciones"].'</p>
                        <p class="producto__precio" id="Precio">$:'.$row["Precio"].'</p>
                        <p></p>
                    </div>
                </a>
            </div>
            ';
        }
            ?>
            <div class="grafico grafico--camisas"></div>
            <div class="grafico grafico--node"></div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__texto">Baterias el Porteño - Todos los derechos Reservados 2021.</p>
    </footer>
         <!-- JavaScript -->
         <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script type="text/javascript">
       function enviar(){
           document.getdocumentElement.onclik();

       }
       </script>
    
</body>
</html>