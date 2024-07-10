<?php $url_base ='http://localhost/app/';

//conexion a la base
include('../../db.php');

// cargar los dartos
if (isset($_GET['txtID'])) {
    // validacion
    $id_update = (isset($_GET['txtID'])?$_GET['txtID']:"");

    //sentencia de seleccion
    $mostrar = $conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id_TXT");

    // asignacion
    $mostrar->bindParam(":id_TXT",$id_update);
    $mostrar->execute();
    
    // lo introducimos en una array asociativo para manejarlo mejor
    $datos_extraidos = $mostrar->fetchAll(PDO::FETCH_ASSOC);

    //tomamos el elemento dentro del array y lo vamos a cargar en los inputs 
    $datos = $datos_extraidos[0];
}

// actualizar datos 
if ($_POST) {
    // obteniendo y validando datos del formulario
    $id_change = (isset($_POST['txtID'])?$_POST['txtID']:"");
    $puesto = (isset($_POST['nombre_del_puesto'])?$_POST['nombre_del_puesto']:"");


    // creando sentencia
    $update_data = $conexion->prepare("UPDATE tbl_puestos SET nombre_puesto=:puesto_name WHERE id=:id_update");


    // asignando variables que vienen del metod post
    $update_data->bindParam(":puesto_name",$puesto);
    $update_data->bindParam(":id_update",$id_change);
    $update_data->execute();
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Puestos</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/normalice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/inputs.css">
</head>

<?php include('../../templates/header.php');?>

<div class="card">

    <div class="card_header">
        <h3>Puestos</h3>
    </div>
    <br>
    <div class="card_body">
        <form action="../puestos/editar.php" method="post" enctype="multipart/form-data" class="form">

            <div class="form__group field" >     
                <input type="text" name="txtID" id="txtID" class="form__field" placeholder="456" readonly
                value="<?php echo $datos['id']; ?>">
                <label for="txtID" class="form__label">ID</label>
            </div>

            <div class="form__group field" >     
                <input type="text" name="nombre_del_puesto" id="puesto_name" class="form__field" 
                placeholder="Mario..." value="<?php echo $datos['nombre_puesto'];?>">
                <label for="primer_nombre" class="form__label">Nombre del puesto</label>
            </div>

            <div class="botno">
                <button type="submit" class="btn btn_edit">Guardar Cambios</button>
                <a class="btn btn_delet"href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include('../../templates/footer.php');?>