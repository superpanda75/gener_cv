<?php
require_once('../../fpdf.php');
require_once('../../FPDI/fpdi.php');
@session_start();


// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('model2.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx);



// now write some text above the imported page
$pdf->SetFont('Helvetica','B',30);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(5);

$pdf->Cell(50);
$pdf->Cell(0,10,utf8_decode($_SESSION['name']));
$pdf->Ln(10);
$pdf->Cell(55);
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



//FORMATIONS :

$pdf->Ln(60);
for ($i=1; $i <= 4 ; $i++)
{

    $pdf->SetFont('Helvetica','B',12);
    $pdf->Cell(2);
    if (isset($_SESSION['form_title'.$i])){
        $pdf->Cell(0,10,utf8_decode($_SESSION['form_title'.$i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','',10);
    $pdf->Cell(55);
    if (isset($_SESSION['start_date_form'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['start_date_form' . $i]).'   /');
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','',10);
    $pdf->Cell(80);
    if (isset($_SESSION['end_date_form'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['end_date_form' . $i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','',8);
    $pdf->Cell(120);
    if (isset($_SESSION['form_etablissement'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['form_etablissement' . $i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','I',8);
    $pdf->Cell(120);
    if (isset($_SESSION['form_state'.$i])) {
        $pdf->Cell(0,20 ,'statut : '.utf8_decode($_SESSION['form_state' . $i]));
    }
    $pdf->Ln(10);
}

//EXPERIENCES
$pdf->Ln(20);
for ($i=1; $i <= 4 ; $i++)
{
    $pdf->Ln(0);
    $pdf->Cell(2);
    $pdf->SetFont('Helvetica','B',12);
    if (isset($_SESSION['know_title'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['know_title'.$i]));
    }
    $pdf->Ln(5);
    $pdf->Cell(2);
    $pdf->SetFont('Helvetica','',8);
    if (isset($_SESSION['know_comm'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['know_comm'.$i]));
    }
    $pdf->Ln(-5);
    $pdf->SetFont('Helvetica','',10);
    $pdf->Cell(55);
    if (isset($_SESSION['start_date_know'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['start_date_know'.$i]).'   /');
    }
    $pdf->Ln(0);
    $pdf->Cell(80);
    $pdf->SetFont('Helvetica','',10);
    if (isset($_SESSION['end_date_know'.$i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['end_date_know'.$i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','',10);
    $pdf->Cell(150);
    if (isset($_SESSION['start_societe'.$i])) {
        $pdf->Cell(0, 50, utf8_decode($_SESSION['start_societe'.$i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica','',8);
    $pdf->Cell(120);
    if (isset($_SESSION['know_lieu'.$i])) {
        $pdf->Cell(0, 5, utf8_decode($_SESSION['know_lieu'.$i]));
    }
    $pdf->Ln(16);

}

//COMPETENCES :
$pdf->Ln(20);
for ($i=1; $i <= 4 ; $i++) {
    $pdf->Ln(0);
    $pdf->Cell(2);
    $pdf->SetFont('Helvetica', 'B', 12);
    if (isset($_SESSION['skill_title' . $i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['skill_title' . $i]));
    }
    $pdf->Ln(0);
    $pdf->Cell(55);
    $pdf->SetFont('Helvetica', '', 8);
    if (isset($_SESSION['skill_comm' . $i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['skill_comm' . $i]));
    }
    $pdf->Ln(0);
    $pdf->SetFont('Helvetica', '', 10);
    $pdf->Cell(120);
    if (isset($_SESSION['level' . $i])) {
        $pdf->Cell(0, 10, utf8_decode($_SESSION['level' . $i]).'/10');
    }
    $pdf->Ln(12);
}

$pdf->Output();