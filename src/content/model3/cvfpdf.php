<?php
session_start();
require_once('../../fpdf.php');
require_once('../../FPDI/fpdi.php');


// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('model.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);



// now write some text above the imported page
$pdf->SetFont('Helvetica','B',30);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(5);

$pdf->Cell(27);
$pdf->Cell(0,10,utf8_decode($_SESSION['name']));
$pdf->Ln(10);
$pdf->Cell(5);
$pdf->Cell(0,10,utf8_decode($_SESSION['firstname']));
$pdf->Ln(10);
$pdf->Cell(5);



$pdf->SetFont('Helvetica','',10);
$pdf->SetXY(155, 15);
$pdf->Write(0,utf8_decode($_SESSION['email']));
$pdf->SetXY(155, 20);
$pdf->Write(0,utf8_decode($_SESSION['phone']));
$pdf->SetXY(155, 25);
$pdf->Write(0,utf8_decode($_SESSION['city']));



$pdf->Ln(60);
for ($i=1; $i < 4 ; $i++)
	    {

			$pdf->SetFont('Helvetica','B',12);
			$pdf->Cell(10);
			if (isset($_SESSION['start_date_know'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['start_date_know'.$i]));
			}
			$pdf->Ln(0);
			$pdf->Cell(120);
			$pdf->SetFont('Helvetica','',12);
			if (isset($_SESSION['end_date_know'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['end_date_know'.$i]));
			}
			$pdf->Ln(0);
			$pdf->Cell(150);
			$pdf->SetFont('Helvetica','',12);
			if (isset($_SESSION['start_date_know'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['know_title'.$i]));
			}
			$pdf->Ln(4);
			$pdf->SetFont('Helvetica','',10);
			$pdf->Cell(10);
			if (isset($_SESSION['start_societe'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['start_societe'.$i]));
			}
			$pdf->Ln(-5);
			$pdf->SetFont('Helvetica','',8);
			$pdf->Cell(60);
			if (isset($_SESSION['know_lieu'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['know_lieu'.$i]));
			}
			$pdf->Ln(8);

		}

$pdf->Ln(40);
for ($i=1; $i < 4 ; $i++)
	    {

			$pdf->SetFont('Helvetica','B',12);
			$pdf->Cell(10);
			if (isset($_SESSION['form_title'.$i])){
				$pdf->Cell(0,10,utf8_decode($_SESSION['form_title'.$i]));
			}
			$pdf->Ln(0);
			$pdf->SetFont('Helvetica','',10);
			$pdf->Cell(50);
			if (isset($_SESSION['end_date_form'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['end_date_form' . $i]));
			}
			$pdf->Ln(0);
			$pdf->SetFont('Helvetica','',8);
			$pdf->Cell(90);
			if (isset($_SESSION['form_etablissement'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['form_etablissement' . $i]));
			}
			$pdf->Ln(0);
			$pdf->SetFont('Helvetica','I',8);
			$pdf->Cell(120);
			if (isset($_SESSION['form_state'.$i])) {
				$pdf->Cell(0, 10, utf8_decode($_SESSION['form_state' . $i]));
			}
			$pdf->Ln(0);
		}

$pdf->SetXY(20, 240);
for ($i=1;$i < 4; $i++) {
	if (isset($_SESSION['skill_title' . $i])) {
		$pdf->Write(0, utf8_decode($_SESSION['skill_title' . $i]));
	}
}




$pdf->Output();