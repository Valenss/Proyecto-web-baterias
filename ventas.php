<?php
include("../PPT/includes/coneccion.php");
include("includes/Menu.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baterias el Porteño</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">  


</head>
<body class="container">
<?php
    menu();
    ?>
    
	<main class="contenedor">
		<div class="content">
			<br>
			<br>
			<h2>Lista de Ventas</h2>
			<hr />
			<form class="form-inline" method="POST" action="">
			<div class="form-group">
						<input type="text" placeholder="Buscar Cliente" name="palabra">
						<input type="submit" value="Buscar Cliente" name="buscar">
			</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>N°</th>
                    <th>Id_Ventas</th>
					<th>Id_Cliente</th>
					<th>Id_Articulo</th>
                    <th>Descripcion</th>
                    <th>Id_Usuario</th>
					<th>Fecha</th>
					<th>Precio</th>
				</tr>
				<?php
				
				if(isset($_POST["buscar"])){
					$buscar = $_POST["palabra"];
					$sql = mysqli_query($conexion, "SELECT * FROM ventas WHERE id_venta like '$buscar%' ORDER BY id_venta ASC");
				}else{
					$sql = mysqli_query($conexion, "SELECT * FROM ventas ORDER BY id_cliente ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_ventas'].'</td>
                            <td>'.$row['id_cliente'].'</td>
                            <td>'.$row['id_articulo'].'</td>
                            <td>'.$row['descripcion'].'</td>
                            <td>'.$row['id_usuario'].'</td>
                            <td>'.$row['fecha'].'</td>
                            <td>'.$row['precio'].'</td>
                        
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
	</main>
	<!-- JavaScript -->
	  <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
</body>
</html>