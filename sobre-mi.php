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
  <title>Sobre mí</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="sobre-mi">
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
              <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 py-1 active">Sobre mí</a>
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
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 mt-4">
          <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
          <p class="pb-sm-5">Apasionado por la tecnología. Actualmente cursando programación web Full Stack.</p>
          <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
        </div>
        <div class="col-12 col-sm-3 mt-4 offset-sm-2">
          <img src="images/lucas-caceres.png" alt="Lucas Caceres" title="Lucas Caceres" class="img-fluid img-circle foto">
        </div>
      </div>
    </div>
    <section class="color-gradiante pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Javascript</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/1209/javascript.jpeg">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>PHP</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>HTML5</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>React.js</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>jQuery</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Bootstrap</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
            </div>
          </div>
        </div>
        <div class="row mt-sm-4 mt-0">
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Laravel</h3>
              <img class="img-fluid d-block mx-auto" width="90"
                src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>MySQL</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>CSS</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/6727/css.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Git</h3>
              <img class="img-fluid d-block mx-auto" width="60" src="https://img.stackshare.io/service/1046/git.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Apache</h3>
              <img class="img-fluid d-block mx-auto" width="110"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1200px-Apache_Software_Foundation_Logo_%282016%29.svg.png">
            </div>
          </div>
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Mercadopago</h3>
              <img class="img-fluid d-block mx-auto" width="60"
                src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="experiencia">
      <div class="container">
        <div class="row col-12 pt-5 pb-0">
          <h2 class="fw-bold"><i class="fas fa-briefcase px-4"></i>Experiencia laboral</h2>
        </div>
      </div>
      <div class="container">
        <div class="row py-5 mx-0">
          <div class="col-sm-6 col-12 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-experiencia shadow-lg me-sm-1">
              <div class="col-4 px-5 logo">
                <img src="images/logo.png" class="img-circle" title="logo">
              </div>
              <div class="col-8 p-3 px-1">
                <h3 class="fw-bold fs-5">Nombre del cargo</h3>
                <h4 class="fw-bold fs-4">Nombre de la empresa</h4>
                <h5 class="fs-6">AGOS 2017-PRESENTE</h5>
                <ul class="fw-light fs-6 px-3">
                  <li>Lorem, ipsum dolor sit amet consectetur.</li>
                  <li>Mollitia necessitatibus autem magni deleniti. </li>
                  <li>Nulla hic debitis veniam rem, iure repellat.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-experiencia shadow-lg me-sm-1">
              <div class="col-4 px-5 logo">
                <img src="images/logo.png" class="img-circle" title="logo">
              </div>
              <div class="col-8 p-3 px-1">
                <h3 class="fw-bold fs-5">Nombre del cargo</h3>
                <h4 class="fw-bold fs-4">Nombre de la empresa</h4>
                <h5 class="fs-6">ENER 2018-PRESENTE</h5>
                <ul class="fw-light fs-6 px-3">
                  <li>Lorem, ipsum dolor sit amet consectetur.</li>
                  <li>Mollitia necessitatibus autem magni deleniti. </li>
                  <li>Nulla hic debitis veniam rem, iure repellat.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="formacion">
      <div class="container">
        <div class="row col-12 pt-5 pb-0">
          <h2 class="fw-bold"><i class="fas fa-graduation-cap px-4"></i>Estudios</h2>
        </div>
      </div>
      <div class="container">
        <div class="row py-5 mx-0">
          <div class="col-sm-6 col-12 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-experiencia shadow-lg me-sm-1">
              <div class="col-4 px-5 logo">
                <img src="images/logo-2.png" class="img-circle" title="logo">
              </div>
              <div class="col-8 p-3 px-1">
                <h3 class="fw-bold fs-5">Nombre del curso</h3>
                <h4 class="fw-bold fs-4">DePC</h4>
                <h5 class="fs-6">AGOS 2017-PRESENTE</h5>
                <ul class="fw-light fs-6 px-3">
                  <li>Lorem, ipsum dolor sit amet consectetur.</li>
                  <li>Mollitia necessitatibus autem magni deleniti. </li>
                  <li>Nulla hic debitis veniam rem, iure repellat.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-experiencia shadow-lg me-sm-1">
              <div class="col-4 px-5 logo">
                <img src="images/logo-2.png" class="img-circle" title="logo">
              </div>
              <div class="col-8 p-3 px-1">
                <h3 class="fw-bold fs-5">Nombre del curso</h3>
                <h4 class="fw-bold fs-4">DePC</h4>
                <h5 class="fs-6">ENER 2018-PRESENTE</h5>
                <ul class="fw-light fs-6 px-3">
                  <li>Lorem, ipsum dolor sit amet consectetur.</li>
                  <li>Mollitia necessitatibus autem magni deleniti. </li>
                  <li>Nulla hic debitis veniam rem, iure repellat.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="cursos">
      <div class="container mb-3">
        <div class="row col-12 pt-4 pb-5">
          <h2 class="fw-bold"><i class="fas fa-graduation-cap px-4"></i> Cursos de desarrollo profesional</h2>
        </div>
      </div>
      <div class="container mb-5">
        <div class="row p-5 mx-0 mr-sm-3 shadow-lg card-curso bg-white me-sm-3">
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/utn.jpg" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12 col-sm-10 p-3">
                <h3>Programa Ejecutivo en Project Management</h3>
                <h4>Universidad Tecnológica Nacional</h4>
                <h5>Expedición: may 2018</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/ean.jpg" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12 col-sm-10 p-3">
                <h3>Diplomatura en Marketing</h3>
                <h4>Escuela Argentina de Negocios</h4>
                <h5>Expedición: dic 2017</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/fundacion-impulsar.png" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12 col-sm-10 p-3">
                <h3>Capacitación en Planes de Negocio</h3>
                <h4>Fundación Impulsar</h4>
                <h5>Expedición: may 2018</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/unlam.png" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12- col-sm-10 p-3">
                <h3>Programación Web ASP.NET</h3>
                <h4>Universidad Nacional de La Matanza</h4>
                <h5>Expedición: dic 2019</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/microsoft.jpg" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12- col-sm-10 p-3">
                <h3>Programación C# .NET</h3>
                <h4>Microsoft</h4>
                <h5>Expedición: dic 2006</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-2 py-3 my-auto d-none d-sm-block">
                <img src="images/sin-logo.png" class="img-fluid baw" title="depcsuite">
              </div>
              <div class="col-12 col-sm-10 p-3">
                <h3>English Intermediate B2</h3>
                <h4>Instituto John Milton de Cultura Inglesa</h4>
                <h5>Expedición: dic 2006</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="idiomas">
      <div class="container">
        <div class="row py-5 mx-0">
          <div class="col-sm-6 col-12 pb-3 pb-sm-0">
            <div class="row mr-sm-1 bg-white card-idioma shadow-lg me-sm-1">
              <div class="col-4 text-center card">
                <i class="fas fa-comment-alt"></i>
              </div>
              <div class="col-8 p-5">
                <h2>IDIOMAS</h2>
                <ul>
                  <li>ESPAÑOL - Nativo</li>
                  <li>INGLÉS - Básico A2</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="row mr-sm-1 bg-white card-idioma shadow-lg me-sm-1">
              <div class="col-4 text-center card">
                <i class="fas fa-star"></i>
              </div>
              <div class="col-8 p-5">
                <h2>HOBBIES</h2>
                <ul>
                  <li>Natación</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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