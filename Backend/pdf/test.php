<?php
require('fpdf/fpdf.php');
include '../db/connect.db.php';
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->AddFont('angsa','','angsa.php');
$pdf->SetFont('angsa','',36);
$pdf->Cell(0,20,iconv( 'UTF-8','TIS-620','สวัสดี ชาวไทยครีเอท'),0,1,"C");

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71 ,10,'',0,0);
$pdf->Image('../admin/img/logo.png', 10, 10, -300);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,'12th Jan 2019',0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Invoice No:',0,0);
$pdf->Cell(34 ,5,'ORD001',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$pdf->Cell(20 ,6,'Sales Tax',1,0,'C');
$pdf->Cell(25 ,6,'Total',1,1,'C');/*end of line*/
/*Heading Of the table end*/

$getStudent_VoC31 = "SELECT * FROM enrolltbl WHERE ref_stdGroups = 1 AND ref_years = 3";
$queryStudentVoC31 = $db->query($getStudent_VoC31);

$pdf->SetFont('Arial','',10);
     while($row = mysqli_fetch_assoc($queryStudentVoC31)) {
		$pdf->Cell(10 ,6,$row['ref_studenttbl'],1,0);
		$pdf->Cell(80 ,6,$row['ref_stdfname']. "" . $row['ref_stdlname'],1,0);
		$pdf->Cell(23 ,6,'1',1,0,'R');
		$pdf->Cell(30 ,6,'15000.00',1,0,'R');
		$pdf->Cell(20 ,6,'100.00',1,0,'R');
		$pdf->Cell(25 ,6,'15100.00',1,1,'R');
	}
		



$pdf->Output();

?>