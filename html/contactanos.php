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
    <link rel="stylesheet" href="stylecontact.css">
    <meta name="theme-color" content="#fafafa">
    
    <style>
      span {
          font-weight: bolder;
          color: orangered;
      }

      input {
        height: 3.5rem !important;
        font-size: 1.5rem !important;
      }

      textarea {
        font-size: 1.5rem !important;
      }

      span {
        font-size: 1.5rem !important
      }

      button {
        height: 3.3rem;
        font-size: 1.4rem !important;
        font-weight: bold !important;
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
                    <a class="nav-link disabled navLink" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navLink" href="../php/certificaciones.php">Certificaciónes</a>
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

      <h2 class="separador mt-5">Formulario de contacto</h2>

      <div class="container">
        <p class="fs-md centrar-texto">
          Con este formulario nos puedes hacer saber quejas, sugerencias, dudas o hacernos saber que quieres ser parte del equipo <span>AGSWEBCAMP</span>. Todo dejandolo claro en la sección de "motivo". Seras respondido lo antes posible, <span>!</span>esperamos tu contacto<span>!</span>
        </p>
      </div>

      <div class="container">
            <div class="jumbotron">
              <form class="was-validated">
                <div class="mb-4">
                    <div class="input-group is-invalid">
                      <div class="input-group-prepend">
                        <span class="input-group-text" class="nombre" id="validatedInputGroupPrepend">Nombre completo:</span>
                      </div>
                      <input type="text" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                    </div>
                    <div class="invalid-feedback mt-2">Porfavor, ingresa tu nombre</div>
                  </div>
  
                  <div class="mb-4">
                    <div class="input-group is-invalid">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validatedInputGroupPrepend">Correo electronico:</span>
                      </div>
                      <input type="email" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                    </div>
                    <div class="invalid-feedback mt-2">Porfavor, ingresa tu correo electronico</div>
                  </div>
                
                  <div class="mb-4">
                    <div class="input-group is-invalid">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validatedInputGroupPrepend">Numero de teléfono:</span>
                      </div>
                      <input type="tel" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" class="form-control is-invalid" aria-describedby="validatedInputGroupPrepend" required>
                    </div>
                    <div class="invalid-feedback mt-2">Porfavor, ingresa tu numero teléfonico</div>
                  </div>
  
                  <div class="mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text mb-3" id="validatedInputGroupPrepend">Motivo de su contacto:</span>
                      </div>
                    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Escriba el motivo..." required></textarea>
                    <div class="invalid-feedback mt-2">
                      Porfavor escriba el motivo de su contacto.
                    </div>
                    <div class="input-group-append container mt-5">
                      <button class="btn btn-danger btn-block" type="button">Enviar <i class="fas fa-paper-plane ml-2"></i></button>
                    </div>
                  </div>
          </form>
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