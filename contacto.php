<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="contacto">
  <?php include_once ("header.php"); ?>
  <main class="container">
    <div class="row">
      <div class="col-12 mt-3 mb-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-12">
        <p>
          Te invito a que te contactes enviándome un mensaje o bien por
          whatsapp.
        </p>
      </div>
      <div class="col-sm-6 col-12">
        <form action="" method="POST">
          <div class="mb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow"
              required />
          </div>
          <div class="mb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow"
              required />
          </div>
          <div class="mb-3">
            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
              class="form-control shadow" required />
          </div>
          <div class="mb-3">
            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
              class="form-control shadow" required></textarea>
          </div>
          <div class="me-auto text-right">
            <button id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php include_once ("footer.php"); ?>
</body>

</html>