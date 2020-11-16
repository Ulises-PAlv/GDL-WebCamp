<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.png" type="image/png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">

    <style>
        span {
            font-weight: bolder;
            color: orangered;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"
        style="font-family: 'Open Sans', sans-serif; font-weight: bolder; font-size: 2.7rem">AGSWEBCAMP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link navLink" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink" href="../html/aboutUs.php">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink" href="../html/contactanos.php">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink disabled" href="#">Certificaciónes</a>
                </li>
                <?php
                    if(isset($_SESSION['logueado'])) {
                        date_default_timezone_set("America/Mexico_City");
                        $hora=date("H");
                        $str = '';
                        
                        if($hora >= 5 && $hora <= 11) {
                            $str = 'Buenos dias';
                        } else if($hora >= 12 && $hora <= 19) {
                            $str = 'Buenas tardes';
                        } else {
                            $str = 'Buenas noches';
                        }
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link navLink disabled" href="#"><?php echo $str . ' ' . $_SESSION['usuario'] ?></a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="row">
            <section class="col-8 container">
                <div class="contenedor mt-5">
                    <div class="card border border-warning" style="width: 75rem;">
                        <img src="../img/curso-JS.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Certificación en JavaScript</h3>
                            <hr class="hrOrangered">

                            <p class="card-text fs-md">JavaScript es un lenguaje de programación o de secuencias de comandos que te permite implementar funciones complejas en páginas web, cada vez que una página web hace algo más que sentarse allí y mostrar información estática para que la veas, muestra oportunas actualizaciones de contenido, mapas interactivos, animación de Gráficos 2D/3D, desplazamiento de máquinas reproductoras de vídeo, etc., puedes apostar que probablemente JavaScript está involucrado. Es la tercera capa del pastel de las tecnologías web estándar, dos de las cuales (HTML y CSS) hemos cubierto con mucho más detalle en otras partes del Área de aprendizaje.</p>
                            <hr>
                            <p class="card-text fs-md">El examen consta de 6 preguntas y solo dispones de 20 min. para ser contestado, requieres de 4 respuestas correctas para asi poder obtener el certificado el cual te llegara en PDF al correo que registraste.</p>
                            <p class="card-text fs-md">El examen fue diseñado por nuestro equipo de expertos en el lenguaje y contara de preguntas de sintaxis o logica de programación</p>
                            <p class="card-text" style="text-align: center;">*Es necesario tener una cuenta <span>AGSWEBCAMP</span> para poder acceder al examen*</p>
                            <p class="card-text" style="text-align: center;">*Solo sera permitido un intento gratuito, el proximo tendra un costo*</p>

                            <div class="card-footer bg-warning">
                                <h4 class="centrar-texto">Acceso <span>denegado</span>, aun no esta listo el examen <i class="fas fa-user-lock"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contenedor mt-5 mb-4">
                    <div class="card border border-primary" style="width: 75rem;">
                        <img src="../img/curso-php.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Certificación en PHP</h3>
                            <hr class="hrOrangered">

                            <p class="card-text fs-md">PHP es un lenguaje de código abierto muy popular, adecuado para desarrollo web y que puede ser incrustado en HTML. Es popular porque un gran número de páginas y portales web están creadas con PHP. Código abierto significa que es de uso libre y gratuito para todos los programadores que quieran usarlo. Incrustado en HTML significa que en un mismo archivo vamos a poder combinar código PHP con código HTML, siguiendo unas reglas.
                            PHP se utiliza para generar páginas web dinámicas. Recordar que llamamos página estática a aquella cuyos contenidos permanecen siempre igual, mientras que llamamos páginas dinámicas a aquellas cuyo contenido no es el mismo siempre. Por ejemplo, los contenidos pueden cambiar en base a los cambios que haya en una base de datos, de búsquedas o aportaciones de los usuarios, etc.</p>
                            <hr>
                            <p class="card-text fs-md">El examen consta de 6 preguntas y solo dispones de 20 min. para ser contestado, requieres de 4 respuestas correctas para asi poder obtener el certificado el cual te llegara en PDF al correo que registraste.</p>
                            <p class="card-text fs-md">El examen fue diseñado por nuestro equipo de expertos en el lenguaje y contara de preguntas de sintaxis o logica de programación</p>
                            <p class="card-text" style="text-align: center;">*Es necesario tener una cuenta <span>AGSWEBCAMP</span> para poder acceder al examen*</p>
                            <p class="card-text" style="text-align: center;">*Solo sera permitido un intento gratuito, el proximo tendra un costo*</p>

                            <div class="card-footer bg-warning">
                                <h4 class="centrar-texto">Acceso <span>denegado</span>, aun no esta listo el examen <i class="fas fa-user-lock"></i></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contenedor mt-5">
                    <div class="card border border-dark" style="width: 75rem;">
                        <img src="../img/curso-c++.jpg" class="card-img-top" alt="..." height="300rem">
                        <div class="card-body">
                            <h3 class="card-title">Certifiación en C++</h3>
                            <hr class="hrOrangered">

                            <p class="card-text fs-md">C++ es un lenguaje de programación que proviene de la extensión del lenguaje C para que pudiese manipular objetos. A pesar de ser un lenguaje con muchos años, su <span>gran potencia</span> lo convierte en uno de los lenguajes de programación más demandados en 2020.</p>
                            <hr>
                            <p class="card-text fs-md">El examen consta de 6 preguntas y solo dispones de 20 min. para ser contestado, requieres de 4 respuestas correctas para asi poder obtener el certificado el cual te llegara en PDF al correo que registraste.</p>
                            <p class="card-text fs-md">El examen fue diseñado por nuestro equipo de expertos en el lenguaje y contara de preguntas de sintaxis o logica de programación</p>
                            <p class="card-text" style="text-align: center;">*Es necesario tener una cuenta <span>AGSWEBCAMP</span> para poder acceder al examen*</p>
                            <p class="card-text" style="text-align: center;">*Solo sera permitido un intento gratuito, el proximo tendra un costo [$500]*</p>

                            <div class="w-75 contenedor">
                                <a href="examen/validarPermiso.php" class="btn btn-block btn-danger">Aplicar exámen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="col-4 mt-5">
                <div class="container">
                    <h3 style="font-size: 2.2rem;">¿Por qué certificarte?</h3>
                    <hr>

                    <p class="fs-md">La certificación es importante como un medio comprobado para una organización porque permite dar forma a los procesos internos, para conseguir y mantener la homogeneidad de criterios, mejora continua, prestigio interno, employer branding, innovación, reducción de costos, mejora de procesos, etc.
                    Por lo tanto siempre te dara mejores oportunidades.
                    </p>

                    <h3 class="mt-5" style="font-size: 2.2rem;">¿Por qué con nosotros?</h3>
                    <hr>

                    <p class="fs-md">Por la sencilla razón de que somo tu mejor opción, tenemos a profesionales expertos en el tema, creando cursos de calidad y examenes de certificación planteados para que aquel que vea tu certificado sepa que tienes los conocimientos que normalmente son requeridos por empresas, y en un mundo tan competente, ¿por qué no demostrar lo que eres capaz de hacer?... ¿no te gustaria a caso un mejor entorno de trabajo y una mejor paga?</p>

                    <h3 class="separador"></h3>

                    <iframe width="350" height="190" src="https://www.youtube.com/embed/pHzCAC3rkw8?controls=0&amp;start=11" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    class="mt-4"></iframe>
                </div>
            </aside>
        </div>
    </main>

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
</body>

</html>