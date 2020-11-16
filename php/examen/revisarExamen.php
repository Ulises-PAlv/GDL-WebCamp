<?php

    session_start();

    function wHoraTermino() {
        $dia = date('j');
        $mes = date('m');
        $anio = date('Y');

        $fecha = $dia . '/' . $mes . '/' . $anio;

        $am_pm = date('a'); // am o pm
        $hora = date('h') . ' ' . $am_pm;

        $_SESSION['fecha'] = $fecha;
        $_SESSION['hora'] = $hora;
    }

    function getAciertos($preguntas) {
        $count = 0;

        if($preguntas[0]['respuesta'] == $_POST['exampleRadios1']) {
            $count++;
        }
        if($preguntas[1]['respuesta'] == $_POST['exampleRadios2']) {
            $count++;
        }
        if($preguntas[2]['respuesta'] == $_POST['exampleRadios3']) {
            $count++;
        }
        if($preguntas[3]['respuesta'] == $_POST['exampleRadios4']) {
            $count++;
        }
        if($preguntas[4]['respuesta'] == $_POST['exampleRadios5']) {
            $count++;
        }
        if($preguntas[5]['respuesta'] == $_POST['exampleRadios6']) {
            $count++;
        }

        return $count;
    }

    function getCalificacion($count) {
        $calificacion = 0;

        switch($count) {
            case 0: $calificacion = 0;
                    break;
            case 1: $calificacion = 1.66;
                break;
            case 2: $calificacion = 3.33;
                    break;
            case 3: $calificacion = 5;
                    break;
            case 4: $calificacion = 6.66;
                    break;
            case 5: $calificacion = 8.33;
                    break;
            case 6: $calificacion = 10;
                    break;
        }

        return $calificacion;
    }

    function saveData($k) {
        $file = fopen('../../../../../../home/piweb/Desktop/datosExamen.txt', 'a+');

        if($k >= 5) {
            $estado = 'Aprobado';
        }else {
            $estado = 'Reprobado';
        }
        
        fwrite($file, $_SESSION['nombre'] . ':C++:' . $_SESSION['calificacion'] . ':' . $estado . ':' . $_SESSION['fecha'] . ':' . $_SESSION['hora']."\r\n");
        fclose($file);
    }

    // Recibir array desde examen.vista.php
        if(isset($_POST["array"]) && $_POST["array"]) {
            $preguntas = unserialize(stripslashes($_POST["array"]));
        }

    wHoraTermino();
    $countResp = getAciertos($preguntas);
    $_SESSION['calificacion'] = getCalificacion($countResp);
    saveData($countResp);

    if($countResp >= 5) {
        require "depAprobado.php";
    }else {
        require "../makeMail/mailReprobado.php";
    }
?>