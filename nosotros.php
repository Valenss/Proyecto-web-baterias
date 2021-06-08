
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
    <?php
include("../PPT/includes/coneccion.php");
include("../PPT/includes/Menu.php");
?>
</head>
<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/el-porteno.jpeg" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
    <a class="navegacion__enlace" href="inicio.php">Tienda</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlace" href="carrito.php">Carrito</a>
        <a class="navegacion__enlace" href="usuarios.php">Usuarios</a>
    </nav>

    <main class="contenedor">
        <h1>Nosotros</h1>

        <div class="nosotros">
            <div class="nosotros__contenido">
                <p>Nam nec metus a risus auctor congue nec non felis. Donec eu diam facilisis, semper nisl sed, ultricies ligula. Duis convallis tortor eu mi interdum feugiat. Pellentesque diam dolor, dignissim sit amet metus vitae, viverra dapibus odio. Mauris lobortis odio nisi, ut pulvinar nisl accumsan non. Aliquam vitae diam elementum ipsum gravida mattis. Nulla facilisi. Etiam eu urna at arcu dignissim tempor. Vestibulum ultrices ex ante, quis gravida metus vehicula nec. Donec interdum ultricies diam, congue dictum libero auctor quis. </p>

                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin porta pretium felis, ac semper nulla pellentesque sed. Morbi condimentum mauris orci. In blandit et dolor vel consequat. Cras urna odio, euismod sit amet mauris a, varius dignissim neque. 
                </p>
            </div>
            <img class="nosotros__imagen" src="img/nosotros.jpg" alt="imagen nosotros">
        </div>
    </main>

    <section class="contenedor comprar">
        <h2 class="comprar__titulo">¿Porqué Comprar con nosotros?</h2>

        <div class="bloques">
            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_3.png" alt="porque comprar">
                <h3 class="bloque__titulo">Envío Gratis</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin porta pretium felis</p>
            </div> <!--.bloque-->

            <div class="bloque">
                <img class="bloque__imagen" src="img/icono_4.png" alt="porque comprar">
                <h3 class="bloque__titulo">La Mejor Calidad</h3>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin porta pretium felis</p>
            </div> <!--.bloque-->
        </div><!--.bloques-->
    </section> 

    <footer class="footer">
        <p class="footer__texto">Baterias el Porteño - Todos los derechos Reservados 2022.</p>
    </footer>
    	<!-- JavaScript -->
	  <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
</body>
</html>