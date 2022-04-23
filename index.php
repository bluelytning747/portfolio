<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
  <header>
    <nav class="navbar navbar-expand-md mb-4">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
            <li class="nav-item">
              <a class="nav-link px-4 py-1 active">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <div class="d-inline">
            <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
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
  <footer class="container">
    <div class="row mt-5 pb-3">
      <div class="col-12 col-sm-3 text-center text-sm-start">
        <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">Sponsor
        <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
      </div>
      <div class="col-12 col-sm-3 text-sm-start pt-2 p-sm-0">
        <a href="lucas.caceres.2001.08@gmail.com">lucas.caceres.2001.08@gmail.com</a>
      </div>
    </div>
  </footer>
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=3455436888" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
  </div>
  <script src="css/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>