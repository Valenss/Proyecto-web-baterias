<?php
    function menu(){ ?>
        <!-- Etiqueta NAV general -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">

            <!-- Enlace al inicio y boton responsive -->    
            <a class="navbar-brand" href="index.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    
            
        <!-- div colapsable y lista final -->    
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            
                <!-- Elementos de la lista del menu -->
                <li class="nav-item active">
                <a class="nav-link" href="inicio.php">inicio</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="clientes.php">Clientes</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="catalogo.php">Catalogo</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ventas.php">Ventas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Facturacion</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Reportes de Ventas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Cerrar Sesion</a>
                </li>

            </ul>
        </div>                            
            
            </div>
        </nav>        
    <?php
    }
?>