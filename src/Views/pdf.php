<?php
use BookkeeperApp\FPDF;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(20,20);
$pdf->Cell(40,10,'Hello World!');
$pdf->SetXY(108,20);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();