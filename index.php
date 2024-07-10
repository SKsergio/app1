<!--con esto incluimos el header dentro de esat seccion, tanto el header como el footer son documentos apartes -->
<?php
$url_base = 'http://localhost/app/';
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
   </head>     
<?php include('./templates/header.php');?>

<br />

<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
    <p class="col-md-8 fs-4">
      Using a series of utilities, you can create this jumbotron, just like the
      one in previous versions of Bootstrap. Check out the examples below for
      how you can remix and restyle it to your liking.
    </p>
    <button class="btn btn-primary btn-lg" type="button">Example button</button>
  </div>
</div>

<?php include('./templates/footer.php');?>
<!--con esto incluimos el header dentro de esat seccion, tanto el header como el footer son documentos apartes -->