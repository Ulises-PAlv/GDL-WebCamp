
<?php
    function getHoraInicio() {
        $am_pm = date('a');
        $minutos = date('i');
        $horaInicio = date('h') . ':' . $minutos . ' ' . $am_pm;

        return $horaInicio;
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen C++</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../../favicon.png" type="image/png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/main.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name="theme-color" content="#fafafa">

    <style>
        span {
            font-weight: bolder;
            color: orangered;
        }

        button {
            height: 3.3rem;
            font-size: 1.4rem !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
<?php
    session_start();
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"
        style="font-family: 'Open Sans', sans-serif; font-weight: bolder; font-size: 2.7rem">AGSWEBCAMP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link navLink disabled" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink disabled" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink disabled" href="#">Contactanos</a>
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
            <aside class="col-4 container">
                <div class="container jumbotron mt-5">
                    <h3 style="font-size: 2.2rem;">Tiempo restante:</h3>
                    <hr>
                    <p class="fs-md centrar-texto"><span>20:00 minutos</span></p>

                    <h3>Tus datos</h3>
                    <hr>
                    <p><span>Nombre: </span><?php echo $_SESSION['nombre']; ?></p>
                    <p><span>Certificación en </span> <?php echo 'C++'; ?></p>
                    <p><span>Hora de Inicio: </span><?php $hora = getHoraInicio();
                    echo $hora;?></p>
                    <p><span>Calificación minima requerida: </span>8.33</p>

                    <h3 class="separador"></h3>
                </div>
            </aside>

            <section class="col-8 mt-5">
                <div>
                    <h2 class="separador">Examen de certificación para C++</h2>
                </div>

                <div class="container">
                    <form class="mb-3" method="POST" action="revisarExamen.php">
                        <div class="mb-3">
                            <!-- Pregunta 1 -->
                            <?php echo "<h3>1°". $preguntas[0]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="00" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="00">'. 
                                        $preguntas[0]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="01" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="01">'.
                                        $preguntas[0]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="02" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="02">'.
                                        $preguntas[0]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios1" id="03" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="03">'.
                                        $preguntas[0]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 2 -->
                            <?php echo "<h3>2°". $preguntas[1]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="04" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="04">'.
                                        $preguntas[1]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="05" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="05">'.
                                        $preguntas[1]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="06" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="06">'.
                                        $preguntas[1]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios2" id="07" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="07">'.
                                        $preguntas[1]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 3 -->
                            <?php echo "<h3>3°". $preguntas[2]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="08" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="08">'.
                                        $preguntas[2]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="09" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="09">'.
                                        $preguntas[2]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="10" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="10">'.
                                        $preguntas[2]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios3" id="11" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="11">'.
                                        $preguntas[2]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 4 -->
                            <?php echo "<h3>4°". $preguntas[3]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="12" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="12">'.
                                        $preguntas[3]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="13" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="13">'.
                                        $preguntas[3]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="14" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="14">'.
                                        $preguntas[3]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios4" id="15" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="15">'.
                                        $preguntas[3]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 5 -->
                            <?php echo "<h3>5°". $preguntas[4]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="16" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="16">'.
                                        $preguntas[4]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="17" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="17">'.
                                        $preguntas[4]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="18" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="18">'.
                                        $preguntas[4]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios5" id="19" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="19">'.
                                        $preguntas[4]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!-- Pregunta 6 -->
                            <?php echo "<h3>6°". $preguntas[5]['pregunta'] . "</h3>"; ?>
                            <hr class="hrOrangered">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="20" value="a">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="20">'.
                                        $preguntas[5]['a']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="21" value="b">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="21">'.
                                        $preguntas[5]['b']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="22" value="c">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="22">'.
                                        $preguntas[5]['c']
                                    .'</label>';
                                ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios6" id="23" value="d">
                                <?php
                                    echo '<label class="form-check-label ml-3" for="23">'.
                                        $preguntas[5]['d']
                                    .'</label>';
                                ?>
                            </div>
                        </div>

                        <hr>
                        <div class="container mt-4">
                            <input type="hidden" name="array" value='<?php echo serialize($preguntas); ?>'>
                            <input class="btn btn-block btn-danger w-25" value="Enviar examen" type="submit">
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </main>

    <footer class="site-footer">
        <div class="contenedor clearfix">
        <div class="footer-info footer-div">
            <h3>Sobre<span>AgsWebCamp</span></h3>
            <p class="margin-top-Pw"> Suspendisse cursus scelerisque mollis. Donec volutpat ut dui nec mollis. Nunc aliquam ipsum vel consequat tempor. Vivamus facilisis massa purus, 
            non aliquet erat scelerisque at. Duis tempus volutpat libero consequat volutpat. Sed malesuada ipsum id ex elementum elementum. Suspendisse 
            interdum et diam ut hendrerit. Maecenas tincidunt, augue elementum sodales pretium, risus sapien facilisis ante, nec commodo purus diam id nisi. 
            Nullam sem libero, semper suscipit mattis eget, cursus nec enim. Nulla ac eros id justo blandit condimentum.
            Nam rhoncus maximus sagittis. Curabitur hendrerit ipsum vel enim sodales, ut ultricies tellus dignissim. Phasellus cursus pellentesque scelerisque. 
            Fusce sit amet volutpat nisi. Nullam pellentesque scelerisque nibh, sit amet dictum ipsum dignissim vel. </p>
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