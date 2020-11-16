<?php
    session_start();

    # require 'generarCertificado';
    # include '../../../certificado_PDF/generarCertificado.php';
    require '../makeMail/mailCertificado.php';

    echo '<script type="text/javascript">
        window.location.assign("../../index.php");
        </script>';
?>