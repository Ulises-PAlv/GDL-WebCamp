<?php

    function getNew_Array($preguntas_examen) {
        // Generar un array de tamaño 6 con preguntas aleatorias
        $newArray = array();

        for($i = 0; $i < 6; $i++) {
            
            if($i !== 0) {
                do {
                    $getRand = rand(0, 13);
                    $band = 0;

                    for($j = 0; $j < $i; $j++) {
                        if($newArray[$j] === $preguntas_examen[$getRand]) {
                            $band = 1;
                        }
                    }
                }while($band === 1);

                $newArray[$i] = $preguntas_examen[$getRand];
            } else {
                $newArray[$i] = $preguntas_examen[rand(0, 13)];
            }
        }

        return $newArray;
    }

    /*
    function getDatosAspirante() {
        $arrayAux = array();
        $file = fopen('../../database/info_certificados.txt', 'r');

        while(!feof($file)) {
            $linea = fgets($file);
            $arrayAux = explode(':', $linea);
        }

        return $arrayAux;
    }
    */

    $preguntas = $preguntas_examen;
    $preguntas = getNew_Array($preguntas);
    shuffle($preguntas);
    # var_dump($preguntas);
    # $arrayDatosAspirante = getDatosAspirante();

    require "examen.vista.php";
?>