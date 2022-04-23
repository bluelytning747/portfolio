<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="proyectos">
    <?php include_once ("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-3">
                <div class="row-card proyecto bordes">
                    <div class="p-3">
                        <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiante">
                        <h2 class="p-3 d-block">ABM CLIENTES</h2>
                    </div>
                    <p class="p-3 pb-5">Alta, baja y modificación de un registro de clientes. Realizado en
                        HTML, CSS, PHP, Bootstrap y Json.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="row-card proyecto bordes">
                    <div class="p-3">
                        <img src="images/abmventas.png" alt="ABM Clientes" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiante">
                        <h2 class="p-3 d-block">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <p class="p-3 pb-5 d-block">Sistema de gestión de clientes, productos y ventas. Realizado en HTML,
                        CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-3">
                <div class="row-card proyecto bordes">
                    <div class="p-3">
                        <img src="images/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">
                    </div>
                    <div class="col-12 color-gradiante">
                        <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
                    </div>
                    <p class="p-3 pb-5 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery,
                        AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                        funcionalidades a fines.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center link-rojo">
                            <a href="" target="_blank">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once ("footer.php"); ?>
</body>

</html>