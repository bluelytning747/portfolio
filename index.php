<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="inicio">
  <?php include_once ("header.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 mt-4 text-center div-cohete">
        <a href="proyectos.php">
          <img src="images/cohete.svg" class="cohete">
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 mt-sm-5 my-4 text-center offset-sm-3 mb-3">
        <div>
          <p class="p-1">Hola mi nombre es <span>Lucas</span>, soy programador web full stack.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
      </div>
    </div>
  </main>
  <?php include_once ("footer.php"); ?>
</body>

</html>