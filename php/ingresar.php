<?php

    function toIndex() {
        echo '<script type="text/javascript">
        window.location.assign("../index.php");
        </script>';
    }

    function toErrorUsr() {
        echo '<script type="text/javascript">
        window.location.assign("../html/errorUsr.html");
        </script>';
    }

    if(!empty($_POST['usuario'] && !empty($_POST['contra']))) {
        $usuario = $_POST["usuario"];
        $passwd = $_POST["contra"];
        $mail;
        $nombre;

        $file = fopen("../../../../../home/piweb/Desktop/usuarios.txt", "r");
        $band = 0;

        while(!feof($file)) {
            $linea = fgets($file);

            if($linea != "") {
                $aux = explode(':',$linea);

                $count = $aux[0];
                $contra = $aux[1];
                $mail = $aux[3];
                $nombre = $aux[2];

                if($usuario === $count && $contra === $passwd) {
                    $band = 1;
                    break;
                }
            }
        }
        fclose($file);

        if($band === 1) {
            session_start();

            $_SESSION["usuario"] = $usuario;
            $_SESSION["contra"] = $passwd;
            $_SESSION["email"] = $mail;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["logueado"] = true;

            toIndex();
        } else {
            toErrorUsr();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre AgsWebCamp</title>
    
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
            .font-p{
                padding: 100px;
            }
        
        input {
            height: 3.5rem !important;
            font-size: 1.5rem !important;
        }

        button {
            height: 3.3rem;
            font-size: 1.4rem !important;
            font-weight: bold !important;
        }
                .form-login{
                    padding: 100px;
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
                <a class="nav-link disabled navLink" href="../html/aboutUs.php">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink" href="../html/contactanos.php">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink" href="../php/certificaciones.php">Certificaciónes</a>
                </li>
            </ul>
        </div>
    </nav>


    <main>
        <div class="container form-login">
            <form class="form" role="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    <input name="usuario" id="emailInput" placeholder="Usuario" class="form-control form-control-sm" type="text" required="">
                </div>
                <div class="form-group">
                    <input name="contra" id="passwordInput" placeholder="Contraseña" class="form-control form-control-sm" type="password" required="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </div>
            </form>

            <div class="form-group text-center">
                <a href="../php/registrar.php" data-toggle="modal" data-target="#modalPassword">Registrar cuenta</a>
            </div>
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