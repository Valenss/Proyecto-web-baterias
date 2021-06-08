
<?php

  
    session_start();
    include("includes/coneccion.php");
    $compra;
    if(isset($_POST['sumador'])){
    $sumador= filter_var($_POST['sumador']);
    }else{
        $sumador="0";
    }

    $cont;
    echo $sumador;
    
    if(!isset($_SESSION['autorizado'])){
        $_SESSION['autorizado']='no';
    }
   
    if(isset($_SESSION['contador'])){
        $_SESSION['contador']=$_SESSION['contador']+$sumador;
        $cont=$_SESSION['contador'];

        }else{
         $_SESSION['contador']=$sumador;
         $cont=$_SESSION['contador'];
        }   
   
   
    if(isset($_POST['cantidad'])){
    $cantidad= filter_var($_POST['cantidad']);
    $_SESSION['cantidad'][$cont]=$cantidad;
}else{
    $cantidad= 1;
    $_SESSION['cantidad']=$cantidad;
}
    if(isset($_SESSION['id_cliente'])){
    $id=$_SESSION['id_cliente'];
    }else{
        $id=0;
    }
    $nom;
    if(isset($_SESSION['producto'])){
    $_SESSION['productos'][$cont]=$_SESSION['producto'];
    
    }else{
        $b=0;
    }
   
    $sql = mysqli_query($conexion, "SELECT * FROM clientes WHERE id_cliente = $id");
   // $sql1 = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id_articulo = $nikId");
    
     /*$vector = array_push($id)[$id];
    for($i=0;$i<count($vector);$i++){
        echo $vector["clave$i"];
    }*/
    //$_SESSION['autorizado']='no';
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
    <?php if($_SESSION['autorizado']=='no'){

    header("location:login.php?mensaje=dos");
    }else{
        if($sql){
            while($row = mysqli_fetch_assoc($sql)){
                $nom= $row['nombre'];
            }
        }
   echo '
    
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/el-porteno.jpeg" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="inicio.php">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="carrito.php">Carrito</a>
        <a class="navegacion__enlace" href="usuarios.php">'.$nom.'</a>
    </nav>
        ';
        if(isset($_SESSION['productos'][$sumador])){
        foreach ($_SESSION['productos'] as $a=>$b){
            echo "a:".$a."B:".$b."";
            $sql1 = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id_articulo = $b");
        
        while($row = mysqli_fetch_assoc($sql1)){
            $compra=$row;
            $_SESSION['compra']=$compra;
            $total=$row["Precio"] * $cantidad;
            echo '
            <main class="contenedor">
      <table class="table table-striped table-hover">
				<tr>
                    <th>N°</th>
                    <th>imagen</th>
					<th>Articulo</th>
					<th>medidas</th>
                    <th>Descripcion</th>
					<th>Fecha</th>
                    <th>Cantidad</th>
					<th>sub total</th>
                    <th>Total</th>
				</tr>
        <tr>
            <td>'.$a.'</td>
            <td><img style="width: 30%" src='.$row['imagen'].'></td>
            <td>'.$row["id_articulo"].'</td>
            <td>'.$row["dimenciones"].'</td>
            <td>'.$row["descripcion"].'</td>
            <td>'.date("y-m-d").'</td>
            <td>'.$cantidad.'</td>
            <td>'.$row["Precio"].'</td>
            <td>'.$total.'</td>
        </tr>
        </table>
    </ main>
    ';
}}}};

?>
    <nav class="navegacion">
     <a class="navegacion__enlace" href="inicio.php">Seguir Agregando</a>
     <a class="navegacion__enlace" href="cancelarCompra.php">Cancelar Compra</a>
     <a class="navegacion__enlace" href="realizarCompra.php">Comprar</a>
    </nav>
    <footer class="footer">
        <p class="footer__texto">Baterias el Porteño - Todos los derechos Reservados 2021.</p>
    </footer>
         <!-- JavaScript -->
         <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
   
</body>
</html>


