<?php
$url_base = 'http://localhost/app/';

//conexion a la vase
include('../../db.php');

// eliminacion
if (isset($_GET['txtID'])) {
    //recoleccion de datos
    $textId = (isset($_GET['txtID']))?$_GET['txtID']:"";

    //sentencia de elimacion
    $eliminar = $conexion->prepare("DELETE FROM tbl_puestos WHERE id=:id_eliminar");

    //asignacion de valore
    $eliminar->bindParam(":id_eliminar",$textId);
    $eliminar->execute();
    header("Location:index.php");
}

// mostrar datos de la tabla
$sentencia = $conexion->prepare("SELECT * FROM  tbl_puestos");
$sentencia->execute();
$lista_tblpuestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);//lo utilizamos a travez de PDO

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
    <h3>Puestos</h3>
    <div class="card_header">
       
        <a href="crear.php" class="btn" href="" role="button">Agregar Registro</a>
    </div>
    <div class="card_body">
        <!-- tabla para visualizar mas cosas -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del puesto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista_tblpuestos as $registro){ ?>

                    <tr>
                        <td scope="row"> <?php echo $registro['id'];?> </td>
                        <td><?php echo $registro['nombre_puesto']?></td>
                        <td>
                            <a class="btn btn_edit" href="editar.php?txtID=<?php echo $registro['id'];?>" role="button">Editar</a>
                            <a class="btn btn_delet" href="index.php?txtID=<?php echo $registro['id'];?>" role="button">Eliminar</a>
                        </td>
                    </tr>

                <?php } ?> 
            </tbody>
        </table>
    </div>
</div>

<?php include('../../templates/footer.php');?>