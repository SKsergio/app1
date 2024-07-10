<?php
$url_base = 'http://localhost/app/';

//conexion a la base
include('../../db.php');

//eliminar usuario
if (isset($_GET['txtID'])) {
    //obtenemos y validamos el id
    $userId = (isset($_GET['txtID'])?$_GET['txtID']:"");

    //sentencia de elimacion
    $elimacion = $conexion->prepare('DELETE FROM `tbl_usuarios` WHERE id=:delete_ID');

    $elimacion->bindParam(":delete_ID",$userId);
    $elimacion->execute();
    header("location:index.php");

}

//mostrar datos en la tabla 
$sentencia = $conexion->prepare("SELECT * FROM tbl_usuarios");
$sentencia->execute();
$list_User_table = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Usuarios</title>
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
<!-- contenido master -->

<div class="card">
    <h3>Puestos</h3>
    <div class="card_header">
       
        <a href="crear.php" class="btn" href="" role="button">Agregar Usuarios</a>
    </div>
    <div class="card_body">
        <!-- tabla para visualizar mas cosas -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del usuario</th>
                    <th>Contraseña</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list_User_table as $user){?>
                    <tr>
                        <td scope="row"><?php echo $user['id']?></td>
                        <td><?php echo $user['user']?></td>
                        <td>********</td>
                        <td><?php echo $user['correo']?></td>
                        <td>
                            <a class="btn btn_edit" href="editar.php?txtID=<?php echo $user['id'];?>" role="button">Editar</a>
                            <a class="btn btn_delet" href="index.php?txtID=<?php echo $user['id'];?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                <?php }?>
                
            </tbody>

        </table>
    </div>
</div>

<?php include('../../templates/footer.php');?>