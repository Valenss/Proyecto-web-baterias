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
       <!-- JavaScript -->
       <script src="jquery/jquery-3.5.1.slim.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
	<div class="container">
		<div class="content">
			<h2>Catalogo</h2>
			<hr />
			<form class="form-inline" method="POST" action="">
			<div class="form-group">
						<input type="text" placeholder="Buscar catalogo" name="palabra">
						<input type="submit" value="Buscar catalogo" name="buscar">
			</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>N°</th>
                    <th>Id_Articulo</th>
					<th>Codigo_tudor</th>
					<th>CCA-SAE</th>
                    <th>Aplicacion</th>
                    <th>Dimenciones</th>
                    <th>Comercial</th>
					<th>Precio</th>
					<th>Imagen</th>
                    <th>Descripcion</th>
				</tr>
				<?php
				
				if(isset($_POST["buscar"])){
					$buscar = $_POST["palabra"];
					$sql = mysqli_query($conexion, "SELECT * FROM catalogo WHERE id_articulo like '$buscar%' ORDER BY id_articulo ASC");
				}else{
					$sql = mysqli_query($conexion, "SELECT * FROM catalogo ORDER BY id_articulo ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['id_articulo'].'</td>
                            <td>'.$row['codigo_tudor'].'</td>
                            <td>'.$row['cca-sae'].'</td>
                            <td>'.$row['Aplicacion'].'</td>
                            <td>'.$row['dimenciones'].'</td>
                            <td>'.$row['comercial'].'</td>
                            <td>'.$row['Precio'].'</td>
							<td><img style="width: 15%;" src='.$row['imagen'].'></td>
							<td>'.$row['descripcion'].'</td>
                        
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
</body>
</html>