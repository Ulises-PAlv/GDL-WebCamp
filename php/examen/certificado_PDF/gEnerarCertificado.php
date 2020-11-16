<?php
require('fpdf.php');

session_start();

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',30);
$pdf->Ln(25);
$pdf->Cell(60);
$pdf->Cell(40,10,'CERTIFICADO',0,0,'B');
$pdf->Ln(40);

$pdf->SetFont('Times','',15);
$nombre = $_SESSION['nombre'];
$pdf->Cell(20);
$pdf->Cell(40,10,'Por parte de los instructores de AgsWebCamp se honrra el presente a');
$pdf->Ln(20);
$pdf->Cell(75);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40,10,$nombre);
$pdf->Ln(20);
$pdf->Cell(26);
$pdf->SetFont('Times','',15);
$pdf->Cell(40,10,'por haber obtenido una calificacion aprobatoria en el examen de C++');
$pdf->Ln(20);
$pdf->Cell(20);
$fecha = $_SESSION['fecha'];
$pdf->Cell(40,10,'Con la fecha de: '. "$fecha");
$pdf->Cell(40);
$pdf->Cell(40,10,'En la ciudad de Aguascalientes, ags.');
$pdf->Ln(20);
$pdf->Cell(60);
$pdf->Cell(40,10,'Aplicado por AGSWEBCAMP');
$pdf->Ln(15);
$pdf->Cell(15);
$pdf->Cell(40,10,'Por medio del presente se le da a conocer que aprobo el examen que aplico');
$pdf->Ln(7);
$pdf->Cell(20);
$pdf->Cell(40,10,'en AGSWEBAGS sobre el lenguage de programacion C++, se espera que');
$pdf->Ln(7);
$pdf->Cell(5);
$pdf->Cell(40,10,'el presente documento sea constancia que esta capacitado para manejar dicho lenguaje.');
$pdf->Ln(7);
$pdf->Cell(20);
$pdf->Cell(40,10,'');

//$pdf->Cell(40,10,utf8_decode('Por medio del presente se le da a conocer que aprobó el examen que aplicó en AGSWEBAGS sobre el lenguage de programación C++, se espera que el presente documento sea constancia de está capacitado para manejar dicho lenguaje.'));
//$pdf->Cell(40,10,utf8_decode(''));


// Logo
$pdf->Image('logo.png',50,230,-60);
$pdf->Ln(70);
$pdf->Cell(37);
$pdf->Cell(40,10,'AGSWEBCAMP');
$pdf->Cell(47);
$pdf->Cell(40,10,'Jose Israel Castaneda Pina');
$pdf->Cell(0);
$pdf->Image('firma.png',130,220,-200);



$pdf->Output();
?>