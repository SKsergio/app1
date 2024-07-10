<?php $url_base = 'http://localhost/app/';

//conexion a la base 
include('../../db.php');

if ($_POST) {
    #Recolectando datos
    $user_name = (isset($_POST['user_name'])?$_POST['user_name']:"");
    $password = (isset($_POST['user_pswd'])?$_POST['user_pswd']:"");
    $mail = (isset($_POST['user_mail'])?$_POST['user_mail']:"");

    $sentencia = $conexion->prepare("INSERT INTO `tbl_usuarios`(`id`, `user`, `password`, `correo`) 
    VALUES (null, :user,:psw,:mail)");

    //asignacion a las variables
    $sentencia->bindParam(":user",$user_name);
    $sentencia->bindParam(":psw",$password);
    $sentencia->bindParam(":mail",$mail);

    //ejecuccion y retorno
    $sentencia->execute();
    header("Location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuarios</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/normalice.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/inputs.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/formcrear.css">
</head>
<?php include('../../templates/header.php');?>
<div class="card">

    <div class="card_header">
        <h3>Usuarios</h3>
    </div>
    <br>
    <div class="card_body">
        <form action="" method="post" enctype="multipart/form-data" class="form">

            <div class="form__group field" >     
                <input type="text" name="user_name" id="user_name" class="form__field" placeholder="User123...">
                <label for="user_name" class="form__label">Usuario</label>
            </div>

            <div class="form__group field" >     
                <input type="password" name="user_pswd" id="user_pswd" class="form__field" placeholder="******">
                <label for="user_pswd" class="form__label">Contraseña</label>
            </div>

            <div class="form__group field" >     
                <input type="text" name="user_mail" id="user_mail" class="form__field" placeholder="User123...">
                <label for="user_name" class="form__label">Correo Electonico</label>
            </div>

            <div class="botno">
                <button type="submit" class="btn btn_edit">Agregar Registro</button>
                <a class="btn btn_delet"href="index.php" role="button">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include('../../templates/footer.php');?>