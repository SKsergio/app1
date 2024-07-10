<?php
$url_base = 'http://localhost/app/';

require('../../db');


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- letras -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- archivos css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/menu.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/normalice.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/index.css">
   </head>     
<?php include('../../templates/header.php');?>

<!-- contenido -->

<div class="card">
    <h3>Empleados</h3>
    <div class="card_header">
       
        <a href="./crear.php" class="btn" href="" role="button">Agregar Empleados</a>
    </div>
    <div class="card_body">
        <!-- tabla para visualizar cosasss -->
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">puesto</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Roberto</td>
                        <td>Imagen.jpg</td>
                        <td>Curriculumn vitae</td>
                        <td>Agresor de simios</td>
                        <td>19 02 2044</td>
                        <td>
                            <a href="" class="btn btn_cart" href="" role="button">Carta</a>
                            <a href="" class="btn btn_edit" href="" role="button">Editar</a>
                            <a href="" class="btn btn_delet" href="" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row"></td>
                        <td> </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>

<?php include('../../templates/footer.php');?>