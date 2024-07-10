<?php
$url_base = 'http://localhost/app/';
?>

<body>
    <!-- cabecera -->
    <header class="content__head">
        <!-- cabecera -->
        <nav class="nav container_nav">

            <!-- logo -->
            <img src="<?php echo $url_base;?>css/img/logo.svg" alt="logo" class="logo_nav">

            <!-- menu hamburguesa -->
            <div class="nav_hamburguer">
            </div>

            <!-- menu -->
            <div class="nav_overlay">
                <!-- crud -->
                <ul class="nav_menu">
                   <li class="nav_item">
                        <a href="<?php echo $url_base;?>index.php" class="nav_link">Sitio Web</a>
                   </li> 
                   <li class="nav_item">
                        <a href="<?php echo $url_base;?>secciones/empleados/index.php" class="nav_link">Empleados</a>
                   </li> 
                   <li class="nav_item">
                        <a href="<?php echo $url_base;?>secciones/puestos/index.php" class="nav_link">Puestos</a>
                    </li>
                    <li class="nav_item">
                        <a href="<?php echo $url_base;?>secciones/usuarios/index.php" class="nav_link">Usuarios</a>
                    </li> 

                    <!-- login -->
                    <li class="nav__login">
                        <a href="" class="login_sign">Cerrar Sesion</a>
                    </li>
                    <li class="nav__login nav__login__border">
                        <a href="" class="login_sign">Iniciar Cesion</a>
                    </li> 
                </ul>
            </div>
        </nav>
    </header>
       

<main class="container">