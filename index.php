<?php
    session_start();
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
<!--
              <div class="login dropdown">
                    <a href="#" class="btn btn-outline-danger login-button dropdown-toggle"
                    role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="php/ingresar.php">Ingresar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="php/registrar.php">Registrarse</a>
                    </div>
              </div>
-->

              <?php
                if(isset($_SESSION["logueado"])) {
                  echo "<button class='btn btn-danger login fs-md' style='width: 10rem;'><a href='php/logout.php' style'color: white !important; font-weight: bolder; text-decoration: none !important;'>Cerrar sesión</a></button>";
                } else {
                  echo '<div class="login dropdown">';
                  echo '<a href="#" class="btn btn-outline-danger login-button dropdown-toggle"
                  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i> Login</a>';
                  echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="php/ingresar.php">Ingresar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="php/registrar.php">Registrarse</a>
                  </div>';
                  echo '</div>';
                }
              ?>

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
    <!--Fin Header-->

    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <img src="img/logo.svg" alt="Logo-Barra">
            </div>
            <div class="menu-movil">
                <i class="fas fa-chevron-circle-down"></i>
            </div>
            <!--Para mobiles-->

            <nav class="navegacion-principal clearfix">
                <a href="./index.php">Home</a>
                <a href="./html/aboutUs.php">Acerca de</a>
                <a href="./html/contactanos.php">Contactanos</a>
                <a href="php/certificaciones.php">Certificaciónes</a>
            </nav>
        </div>
    </div>
    <!--Fin de la barra de navegacion-->

    <section class="seccion contenedor">
      <h2 class="separador">La mejor manera de aprender de Desarrollo Web en Español</h2>
      <p class="font-p">Somos la mejor plataforma de aprendizaje para todo aquel programador o diseñador web que quiera mejorar sus habilidades y conseguir un mejor futuro. Aqui encontraras muchos cursos acerca de tecnologias y lenguajes de progrmación que sabemos que son muy requeridas y necesarias para poder tener una mejor compresión.</p>

    </section>
    <!--Fin de seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="./img/bg-talleres.jpg">
          <source src="./multimedia/video.mp4" type="video/mp4">
          <source src="./multimedia/video.webm" type="video/webm">
          <source src="./multimedia/video.ogv" type="video/ogv">
        </video>
      </div>
      <!--Fin Contenedor-vido-->

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2 class="separador">Programa del Próximo Evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fa fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comments"></i>Conferencias</a>
              <a href="#seminarios"><i class="fa fa-university"></i>Seminarios</a>
            </nav>

              <div id="talleres" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>HTML5, CSS3 y JavaScript</h3>
                  <p><i class="fas fa-user-clock"></i>16:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>30 Nov</p>
                  <p><i class="fas fa-user-tie"></i>Ing. José Israel Castañeda Piña</p>
                </div>

                <div class="detalle-evento">
                  <h3>PHP y Basicos de Laravel</h3>
                  <p><i class="fas fa-user-clock"></i>20:00 hrs</p>
                  <p><i class="fa fa-calendar"></i>23 Dic</p>
                  <p><i class="fas fa-user-tie"></i>Ing. Ulises Alvirde Bonilla</p>
                </div>
                <a href="#" class="button float-rigth">Ver Todos</a>
              </div>
          </div>
        </div>
      </div>

    </section>

    <section class="invitados contenedor seccion">
      <h2 class="separador">Nuestros profesores</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="./img/invitado1.jpg" alt="invitado1">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="./img/invitado2.jpg" alt="invitado1">
            <p>Shari Herrera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="./img/invitado3.jpg" alt="invitado1">
            <p>Greforio Sanchez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="./img/invitado4.jpg" alt="invitado1">
            <p>Susana Rivera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="./img/invitado5.jpg" alt="invitado1">
            <p>Harold Garcia</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="./img/invitado6.jpg" alt="invitado1">
            <p>Susan Sanchez</p>
          </div>
        </li>

      </ul>

    </section>

    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">4</p>Invitados</li>
          <li><p class="numero">15</p>Talleres</li>
          <li><p class="numero">3</p>Certificados</li>
          <li><p class="numero">9</p>Conferencias</li>        
        </ul>

      </div>
    </div>

    <section class="precios seccion">
      <h2 class="separador">Precios de Conferencias</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por dia</h3>
              <p class="numero">$30</p>
              <ul>
                <li><i class="fas fa-check-circle"></i>Todas las conferencias</li>
                <li><i class="fas fa-check-circle"></i>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Todos los dias</h3>
              <p class="numero">$50</p>
              <ul>
                <li><i class="fas fa-check-circle"></i>Todas las conferencias</li>
                <li><i class="fas fa-check-circle"></i>Acceso al foro</li>
                <li><i class="fas fa-check-circle"></i>Todos los talleres</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Pase por 2 dias</h3>
              <p class="numero">$45</p>
              <ul>
                <li><i class="fas fa-check-circle"></i>Todas las conferencias</li>
                <li><i class="fas fa-check-circle"></i>Todos los talleres</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <div id="mapa" class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7403.063599545847!2d-102.32116575615257!3d21.91409809181785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eee23dfea56d%3A0xc2edcc935471e5fa!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes%2C%2020130%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1605305627555!5m2!1ses!2smx" width="1310" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <section class="seccion">
      <h2 class="separador">Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">  
        <div class="testimonial">
          <blockquote>
            <p>Muy buena pagina de para certificarse para los lenguajes de JavaScript, PHP y C++; además sus cursos son muy completos y muy bien explicados.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/carlos-Usr.jpeg" alt="imagen testimonial">
              <cite>Juan Carlos Alvares Flores <span>Programador en @google</span></cite>
            </footer>
          </blockquote>
        </div>

        <div class="testimonial">
          <blockquote>
            <p>Muy buena pagina de para certificarse para los lenguajes de JavaScript, PHP y C++; además sus cursos son muy completos y muy bien explicados.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/chava-Usr.jpeg" alt="imagen testimonial">
              <cite>Jesus Salvador Diosdado Herrera <span>Senior Developer en @industrasSanGil</span></cite>
            </footer>
          </blockquote>
        </div>

        <div class="testimonial">
          <blockquote>
            <p>Muy buena pagina de para certificarse para los lenguajes de JavaScript, PHP y C++; además sus cursos son muy completos y muy bien explicados.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>
      </div>
    </section>

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>¡Crea un usuario!</p>
        <h3>AgsWebCamp</h3>
        <a href="php/registrar.php" class="button transparente">Registro</a>
      </div>
    </div>

    <section class="seccion">
      <h2 class="separador">Certificaciónes (Nueva sección)</h2>

      <div class="container">
        <p class="font-p">Hemos añadido una nueva sección, si eres usuario de AGSWEBCAMP tendras la posibilidad de escoger un examen con preguntas acerca del lenguaje y asi poder demostrar tus conocimientos con un certificado, que se te expedirá si apruebas (solo un intento gratuito).</p>
      </div>

      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Javascript</h3>
              <ul>
                <li><i class="fas fa-hammer"></i>Aun no habilitado</li>
              </ul>

              <a href="html/error404.html" class="button hollow">Saber más</a>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>C++</h3>
              <ul>
                <li><i class="fas fa-pencil-alt"></i>6 preguntas</li>
                <li><i class="fas fa-user-clock"></i>Tiempo maximo de 20 min.</li>
                <li><i class="fas fa-laptop-code"></i>Preguntas de lógica y sintaxis</li>
              </ul>

              <a href="php/certificaciones.php" class="button">Saber más</a>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>PHP</h3>
              <ul>
                <li><i class="fas fa-hammer"></i>Aun no habilitado</li>
              </ul>

              <a href="html/error404.html" class="button hollow">Saber más</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-info footer-div">
          <h3>Sobre<span>AgsWebCamp</span></h3>
          <p class="margin-top-Pw">Somos una empresa que busca el hacer crecer de manera profesional a nuestros usuarios con cursos, conferencias y aplicando examenes de certificación. Para que asi puedan sali aquellas personas al mundo laboral de manera confiada, y puedan acceder a cualquier puesto que quieran o ellos mismos emprender. Asi mismo nuestros usuarios nos ayudan a cercer nuestra plataforma con ideas o ellos mismos ofreciendose a aportar con su conocimiento, porque creen en nuestra vision de crear un entorno y una comunidad de programadores y diseñadores donde puedan mejorar.</p>
        </div>
        <div class="ultimos-tweets footer-div">
          <h3>Ultimos<span>tweets</span></h3>
          <ul class="margin-top-Pw">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Fuga eos quisquam, nesciunt magnam ducimus laboriosam facilis minima 
              corporis dolore animi nobis repudiandae quae iste fugit! #Eaque harum 
              nisi @eum doloremque!</li>
              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Fuga eos quisquam, nesciunt magnam ducimus laboriosam facilis minima 
                corporis dolore animi nobis repudiandae quae iste fugit! #Eaque harum 
                nisi @eum doloremque!</li>
          </ul>
        </div>
        <div class="menu footer-div">
          <h3>Redes<span>sociales</span></h3>
          <nav class="redes-sociales margin-top-Pw">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        </div>
      </div>
      <p class="copyright">Todos los derechos reservados <span>AgsWebCamp</span> 2020 &copy.</p>
    </footer>


    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>');
    </script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview');
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>

    <!-- Bootsrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
