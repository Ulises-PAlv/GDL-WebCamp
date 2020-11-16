<?php

    session_start();
    $band = 0;

    function toIndex() {
        echo '<script type="text/javascript">
        window.location.assign("../../html/errorLogueo.html");
        </script>';
    }

    $file = fopen('../../../../../../home/piweb/Desktop/datosExamen.txt', 'r');


    $usr = $_SESSION['nombre'];
    while(!feof($file)) {
        $linea = fgets($file);

        if($linea != "") {
            $aux = explode(':',$linea);
            $estado = $aux[0];


            if($usr === $estado) {
                $band = 1;
            }
        }
    }
    var_dump($estado);
    var_dump($_SESSION['nombre']);
    fclose($file);

    if(!isset($_SESSION["logueado"])) {
        $band = 2;
    }

    if($band === 1) {
        toIndex($strError02);
    } else if($band === 2){
        toIndex($strError01);
    } else {
        require 'examen.servicio.php';
    }
?>