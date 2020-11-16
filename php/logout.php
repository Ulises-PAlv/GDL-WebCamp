<?php
    session_start();
    $usr = $_SESSION['usuario'];
    session_destroy();

    echo '<script type="text/javascript">
        alert("Adios ' . $usr . '");
        window.location.assign("../index.php");
        </script>';
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>AgsWebCamp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="firma.png" type="image/png">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">
</head>

<body>


  <header class="site-header">
      <div class="hero">
          <div class="contenido-header contenedor">
              <nav class="redes-sociales">
                  <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </nav>

              <div class="informacion-evento">
                  <div class="clearfix">
                      <p class="fecha"><i class="far fa-calendar-alt"></i>23 Nov</p>
                      <p class="ciudad"><i class="fas fa-map-marked-alt"></i>Aguascalientes, MX.</p>
                  </div>
                  <h1 class="nombre-sitio mb-2">AgsWebCamp</h1>
                  <p class="slogan">La motivación es lo que te pone en marcha, <span>el hábito es lo que hace que sigas</span></p>
              </div>
          </div>
      </div>
  </header>
</body>