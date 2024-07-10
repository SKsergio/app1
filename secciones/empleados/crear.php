<?php
$url_base = 'http://localhost/app/';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Registro</title>
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
        <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/css_emp/formcrear.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_base;?>css/inputs.css" >

   </head>     
<?php include('../../templates/header.php');?>

<div class="card">
    <div class="card_header">
        <h3>Datos del Empleado</h3>
    </div>
    <br>
    <div class="card_body">
        <!-- formulario -->
        <form action="" method="post" enctype="multipart/form-data" class="form">
            <!-- textos -->
            <div class="form__group field" >     
                <input type="text" name="primer_nombre" id="primer_nombre" class="form__field" placeholder="Mario...">
                <label for="primer_nombre" class="form__label">Primer Nombre</label>
            </div>

            <div class="form__group field">
                <input type="text" name="segundo_nombre" id="segundo_nombre" class="form__field" placeholder="Ernesto...">    
                <label for="segundo_nombre" class="form__label">Segundo Nombre</label>
            </div>

            <div class="form__group field">
                <input type="text" name="primer_apellido" id="primer_apellido" class="form__field" placeholder="Quintanilla...">
                <label for="primer_apellido" class="form__label">Primer Apeliido</label>
            </div>

            <div class="form__group field">
                <input type="text" name="Segundo_apellido" id="Segundo_apellido" class="form__field" placeholder="Herrera...">  
                <label for="Segundo_apellido" class="form__label">Segundo Apellido</label> 
            </div>

            <!-- documentos -->
            <div class="frm_con">
                <label for="foto" class="docs_lbl">Foto</label>
                <input type="file" name="foto" id="foto" class="doc_form">
            </div>

            <div class="frm_con">
                <label for="CV" class="docs_lbl">CV(PDF)</label>
                <input type="file" name="CV" id="CV" class="doc_form">
            </div>

            <!-- option y fechas -->
            <div class="frm_con">
                <label for="puesto" class="opt_lbl">Puesto</label>
                <select name="idpuesto" id="idpuesto" class="opt">
                    <option value="">option</option>
                    <option value="">option 2</option>
                    <option value="">option 3</option>
                    <option value="">option 4</option>
                </select>
            </div>

            <div class="frm_con">
                <label for="fech" class="opt_lbl">Fecha de Ingreso</label>
                <input type="date" name="date" id="fech" placeholder="fecha" class="fecha">
            </div>

            <!-- botones -->
            <div class="botno">
                <button type="submit" class="btn btn_edit">Agregar Registro</button>
                <a class="btn btn_delet"href="index.php" role="button">Cancelar</a>
            </div>
            
        </form>
    <div class="car_footer">

    </div>
</div>

<?php include('../../templates/footer.php');?>