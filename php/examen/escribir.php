<?php

$file = fopen('../../../../../../home/piweb/Desktop/datosExam.txt', 'a+') or die('F');

if($countResp >= 5) {
    $estado = 'Aprobado';
}else {
    $estado = 'Reprobado';
}

fwrite($file, $_SESSION['nombre'] . ':C++:' . $_SESSION['calificacion'] . ':' . $estado . ':' . $_SESSION['fecha'] . ':' . $_SESSION['hora']."\r\n");
fclose($file);

?>