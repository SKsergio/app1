<?php
$url_base ='http://localhost/app/';

//conexion a la base de datos
include('../../db.php');

//cargar datos en los inputs
if ($_GET['txtID']) {
    $id_buscar = (isset($_GET['txtID'])?$_GET['txtID']:"");

    //sentencia
    $show = $conexion->prepare('SELECT * FROM tbl_usuarios WHERE id=:id_show');

    $show->bindParam(":id_show",$id_buscar);
    $show->execute(); //ejecucion

    //guaradamos en un array
    $datos_extraidos = $show->fetchAll(PDO::FETCH_ASSOC);
    $data = $datos_extraidos[0];
    print_r($data);
}

// actualizacion de datos
if ($_POST) {
    //ALMACENAR DATOS EN VARIABLES
    $id_update = (isset($_POST['id_user'])?$_POST['id_user']:"");
    $user_name = (isset($_POST['user_name'])?$_POST['user_name']:"");
    $password = (isset($_POST['user_pswd'])?$_POST['user_pswd']:"");
    $mail = (isset($_POST['user_mail'])?$_POST['user_mail']:"");

    $update = $conexion->prepare("UPDATE tbl_usuarios SET user=:user, `password`=:pswd, `correo`=:email WHERE id=:ID");

    $update->bindParam(":ID",$id_update);
    $update->bindParam(':user',$user_name);
    $update->bindParam(':pswd',$password);
    $update->bindParam(':email',$mail);

    $update->execute();
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/normalice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/inputs.css">
</head>
<?php include('../../templates/header.php');?>
<div class="card">

    <div class="card_header">
        <h3>Editar Usuarios</h3>
    </div>
    <br>
    <div class="card_body">
        <form action="" method="post" enctype="multipart/form-data" class="form">

            <div class="form__group field" >     
                <input type="text" name="id_user" id="id_user" class="form__field" placeholder="1" value="<?php echo $data['id'];?>" readonly>
                <label for="id_user" class="form__label">Id</label>
            </div>

            <div class="form__group field" >     
                <input type="text" name="user_name" id="user_name" class="form__field" placeholder="User123..." value="<?php echo $data['user'];?>">
                <label for="user_name" class="form__label">Usuario</label>
            </div>

            <div class="form__group field" >     
                <input type="password" name="user_pswd" id="user_pswd" class="form__field" placeholder="******" value="<?php echo $data['password'];?>">
                <label for="user_pswd" class="form__label">Contraseña</label>
            </div>

            <div class="form__group field" >     
                <input type="text" name="user_mail" id="user_mail" class="form__field" placeholder="User123..." value="<?php echo $data['correo'];?>">
                <label for="user_name" class="form__label">Correo Electonico</label>
            </div>

            <div class="botno">
                <button type="submit" class="btn btn_edit">Guardar Cambios</button>
                <a class="btn btn_delet"href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>
</div>



<?php include('../../templates/footer.php');?>