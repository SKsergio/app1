<?php
$url_base = 'http://localhost/app/';

//conexion a la vase
include('../../db.php');

if ($_POST) {
    // recolectando los datos
    $nombre_del_puesto = (isset($_POST['nombre_del_puesto'])?$_POST['nombre_del_puesto']:"");

    //insertar
    $insercion = $conexion->prepare("INSERT INTO tbl_puestos(id, nombre_puesto) VALUES (null ,:nombre_del_puesto)");

    //asignacion de los valores que vienen del Formulario
    $insercion->bindParam(":nombre_del_puesto",$nombre_del_puesto);
    $insercion->execute();
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Puestos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/normalice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/inputs.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/formcrear.css"> -->

</head>
<?php include('../../templates/header.php');?>

<div class="card">

    <div class="card_header">
        <h3>Puestos</h3>
    </div>
    <br>
    <div class="card_body">
        <form action="" method="post" enctype="multipart/form-data" class="form">

            <div class="form__group field" >     
                <input type="text" name="nombre_del_puesto" id="puesto_name" class="form__field" placeholder="Mario...">
                <label for="primer_nombre" class="form__label">Nombre del puesto</label>
            </div>

            <div class="botno">
                <button type="submit" class="btn btn_edit">Agregar Registro</button>
                <a class="btn btn_delet"href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php include('../../templates/footer.php');?>