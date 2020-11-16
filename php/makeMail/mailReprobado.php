<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


$mail = new PHPMailer(true);

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'agswebcamp@gmail.com';                     // SMTP username
    $mail->Password   = 'agswebcamp123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('agswebcamp123@gmail.com', 'AgsWebCamp');
    $mail->addAddress($_SESSION['email'], $_SESSION['nombre']);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Examen reprobatorio de certificacion - AgsWebCamp';
    $mail->Body    = 'Por medio del presente correo queremos acerte saber de parte del equipo de AgsWebCamp que has tenido una calificación no satisfactoria (' . $_SESSION['calificacion'] . '). De igual manera te invitamos a unirte a nuestras conferencias y tomar nuestros cursos para asi capacitarte para lograr tus metas, no desistas ;).
    ~La motivación es lo que te pone en marcha, el hábito es lo que hace que sigas~';


    $mail->send();
    header("Location: ../../index.php");
} catch (Exception $e) {
    echo "Hubo un error wapo: {$mail->ErrorInfo}";
}

?>
