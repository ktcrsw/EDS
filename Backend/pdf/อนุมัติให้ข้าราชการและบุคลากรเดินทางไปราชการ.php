<?php
require('fpdf/fpdf.php');
include '../db/connect.db.php';
$id = $_POST['id'];
/*A4 width : 219mm*/


$pdf = new FPDF('P','mm',array(210, 298));

$pdf->AddPage();
/*output the result*/

$getBudget = "SELECT * FROM form_budget_approval WHERE fba_id = $id";
$queryBudget = $db->query($getBudget);
$count = mysqli_num_rows($queryBudget);

$date = date("d-m-Y");
/*set font to THSarabunNew, bold, 14pt*/
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetFont('THSarabunNew','B',16);

if($row = mysqli_fetch_array($queryBudget)){
$calDate = round(abs(strtotime($row['startdate']) - strtotime($row['enddate']))/60/60/24);

$pdf->Cell(71 ,10,'',0,0);

$pdf->Cell(59 ,10,'',0,1);
/* --- Cell --- */
$pdf->SetXY(87, 24);
$pdf->SetFont('THSarabunNew','B',35);
$pdf->Image('../upload/krut.png', 92, 10, 30, 30);
$pdf->Cell(71 ,10,'',0,0);


$pdf->SetFont('THSarabunNew','',16);
/* --- ส่วนราชการ --- */
$pdf->SetXY(85, 43);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','คำสั่งวิทยาลัยเทคนิคอุดรธานี'), 0, 1, 'L', false);
$pdf->SetXY(85, 49);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','      ที่      /    ๒๕๖๖'), 0, 1, 'L', false);
$pdf->SetXY(69, 57);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เรื่อง   อนุมัติให้ข้าราชการและบุคลากรเดินทางไปราชการ'), 0, 1, 'L', false);




/* --- วันที่ --- */
$pdf->SetXY(90, 64);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','------------------------'), 0, 1, 'L', false);
$pdf->SetXY(103, 60);

/* --- เรื่อง --- */
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(35, 69);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','        อาศัยคำสั่ง สอศ. ที่ ๑๐๒๘/๒๕๕๗ ลงวันที่ ๘ สิงหาคม ๒๕๕๗ เรื่อง มอบอำนาจให้อำนวยการวิทยาลัย'), 0, 1, 'L', false);
$pdf->SetXY(35, 75);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','และผู้อำนวยการวิทยาลัยสังกัดสถาบันการอาชีวศึกษา ปฏิบัติราชการแทนเลขาธิการคณะกรรมการการอาชีวศึกษา'), 0, 1, 'L', false);
$pdf->SetXY(35, 81);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','(เกี่ยวกับงานบุคลากร) ข้อ ๒ อนุมัติการเดินทางไปราชการในราชอาณาจักรของข้าราชการครูและบุคลากร'), 0, 1, 'L', false);
$pdf->SetXY(35, 87);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ทางการศึกษาพนักงานราชการและลูกจ้างที่ปฏิบัติราชการประจำอยู่ในสถานศึกษา รวมถึงอำนาจในการ '), 0, 1, 'L', false);
$pdf->SetXY(35, 93);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','พิจารณาอนุมัติการเดินทางไปประชุม สัมมนา ซึ่งหน่วยงานรัฐหรือหน่วยงานเอกชนร่วมกับส่วนราชการอื่น '), 0, 1, 'L', false);
$pdf->SetXY(35, 99);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','หรือรัฐวิสาหกิจจัดขึ้นวิทยาลัยเทคนิคอุดรธานี จึงอนุญาตให้ '), 0, 1, 'L', false);

$pdf->SetXY(90, 132);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','๑. '), 0, 1, 'L', false);
$pdf->SetXY(95, 132);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',     $row['fba_name']. "  " .$row['fba_lname']), 0, 1, 'L', false);
$pdf->SetXY(90, 140);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','๒. '), 0, 1, 'L', false);
$pdf->SetXY(95, 140);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',     $row['fba_with_person']), 0, 1, 'L', false);


$pdf->SetXY(35, 170);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','        เดินทางไปราชการ เพื่อ'), 0, 1, 'L', false);
$pdf->SetXY(82, 170);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',     $row['fba_details']), 0, 1, 'L', false);
$pdf->SetXY(35, 176);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ในวันที่'), 0, 1, 'L', false);
$pdf->SetXY(50, 176);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874', $row['startdate'] . "  ถึง  " .$row['enddate']), 0, 1, 'L', false);
$pdf->SetXY(98, 176);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874', 'ณ จังหวัด'), 0, 1, 'L', false);
$getProvince = "SELECT * FROM provinces WHERE id = '".$row['fba_province']."'";
$queryProvince = $db->query($getProvince);
while($pv = mysqli_fetch_assoc($queryProvince)){
    $pdf->SetXY(113, 176);
    $pdf->Cell(0, 4,iconv('UTF-8', 'cp874', $pv['name_th']), 0, 1, 'L', false);
}

$pdf->SetXY(85, 186);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','สั่ง ณ วันที่                       พ.ศ. ๒๕๖๖'), 0, 1, 'L', false);
$pdf->SetXY(100, 210);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','( นายธีรภัทร์ ไชยสัตย์  )'), 0, 1, 'L', false);
$pdf->SetXY(87, 215);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' ผู้อำนวยการวิทยาลัยเทคนิคอุดรธานี  '), 0, 1, 'L', false);









}


$pdf->Output();
?>