<?php 
include("../PPT/includes/coneccion.php");
session_start();
if(!isset($_SESSION['autorizado'])){
    $_SESSION['autorizado']='no';
}
if(isset($_SESSION['id_cliente'])){
    $id=$_SESSION['id_cliente'];
    echo $id;
}else{

}
if(isset($_SESSION['producto'])){
    $nikId=$_SESSION['producto'];
    echo $nikId;
}else{

}
$sql = mysqli_query($conexion, "SELECT * FROM clientes WHERE id_cliente = $id");
$sql1 = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id_articulo = $nikId");
$cant=$_SESSION['cantidad'];
$fecha=date("y-m-d");
$usuario=$id;
$cliente=$id;
$articulo=$nikId;
$des;
$precio;
$stock;
while($row = mysqli_fetch_assoc($sql1)){
    $des=$row['descripcion'];
    $precio=$row['Precio'];
    $stock=$row['stock'];
    $total=$precio * $cant;
    $N_stock= $stock - $cant;

}
//echo $des,' ',$precio,' ',$stock,' ',$total,' ',$N_stock,' ',$usuario,' ',$cliente,' ',$articulo,' ',$fecha;
$insert=mysqli_query($conexion,"INSERT INTO ventas (id_cliente,id_articulo,descripcion,id_usuario,fecha,precio,total,cantidad) VALUES ($cliente,$articulo,'$des',$usuario,'$fecha',$precio,$total,$cant)");
if($insert){
    header("location: inicio.php?msj=1");
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
    $upd=mysqli_query($conexion,"UPDATE catalogo set stock='$N_stock' WHERE id_articulo =$articulo");
    $_SESSION['producto']=0;
    $_SESSION['cantidad']=0;
}else{
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
    header("location: inicio.php?msj=2");
    $_SESSION['producto']=0;
    $_SESSION['cantidad']=0;
}

?>