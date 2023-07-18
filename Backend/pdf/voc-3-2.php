<?php
require('fpdf/fpdf.php');
include '../db/connect.db.php';
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
/*output the result*/

/*set font to THSarabunNew, bold, 14pt*/
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetFont('THSarabunNew','B',16);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71 ,10,'',0,0);
$pdf->Image('../admin/img/logo.png', 10, 10, -300);
$pdf->Cell(59 ,5,iconv('UTF-8', 'cp874','วิทยาลัยเทคนิคอุดรธานี'),0,1);
$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,10,'',0,1);


$pdf->SetFont('THSarabunNew','',16);

$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(59 ,5,iconv('UTF-8', 'cp874','แผนกวิชาเทคโนโลยีสารสนเทศ'),0,1);

$pdf->SetFont('THSarabunNew','',10);

$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(59 ,5,iconv('UTF-8', 'cp874','สาขางาน การโปรแกรมคอมพิวเตอร์ เว็ป และอุปกรณ์เคลื่อนที่'),0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(34 ,5,iconv('UTF-8', 'cp874','กลุ่มเรียนที่ 2 ปวช.3/ชกว.2'),0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(34 ,5,iconv('UTF-8', 'cp874','ครูที่ปรีกษา'),0,1);

$pdf->SetFont('THSarabunNew','B',15);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('THSarabunNew','B',10);
$pdf->Cell(189 ,10,'',0,1);




$pdf->SetFont('THSarabunNew','B',16);
/*Heading Of the table*/
$pdf->Cell(10 ,6,iconv('UTF-8', 'cp874','ลำดับ'),1,0,'L');
$pdf->Cell(35 ,6,iconv('UTF-8', 'cp874','รหัสประจำตัว'),1,0,'C');
$pdf->Cell(60 ,6,iconv('UTF-8', 'cp874','ชื่อ - นามสกุล'),1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,0,'C');
$pdf->Cell(5 ,6,'',1,1,'C');

/*Heading Of the table end*/

$getStudent_VoC31 = "SELECT * FROM enrolltbl WHERE ref_stdGroups = 2 AND ref_years = 3";
$queryStudentVoC31 = $db->query($getStudent_VoC31);
$total = mysqli_num_rows($queryStudentVoC31);
$sum = 1;
$pdf->SetFont('THSarabunNew','',16);

for($i = 1; $i <= $total; $i++){
    while($row = mysqli_fetch_assoc($queryStudentVoC31)) {
         $pdf->Cell(10 ,6,$i++,1,0,'R');
		$pdf->Cell(35 ,6,$row['ref_studenttbl'],1,0);
		$pdf->Cell(60 ,6,iconv('UTF-8', 'cp874',$row['ref_stdfname']. "   " . $row['ref_stdlname']),1,0);
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,0,'R');
        $pdf->Cell(5 ,6,'',1,1,'R');
        }

    }
		



$pdf->Output();

?>