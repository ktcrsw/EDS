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
$date = date("d-m-Y");
/*set font to THSarabunNew, bold, 14pt*/
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetFont('THSarabunNew','B',16);

if($row = mysqli_fetch_array($queryBudget)){

$pdf->Cell(71 ,10,'',0,0);
$pdf->Image('../upload/krut.png', 10, 10, -300);
$pdf->Cell(71 ,10,'',0,0);

$pdf->Cell(59 ,10,'',0,1);
/* --- Cell --- */
$pdf->SetXY(87, 24);
$pdf->SetFont('THSarabunNew','B',35);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','บันทึกความ'), 0, 1, 'L', false);
$pdf->Cell(71 ,10,'',0,0);


$pdf->SetFont('THSarabunNew','B',18);
/* --- ส่วนราชการ --- */
$pdf->SetXY(18, 53);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ส่วนราชการ'), 0, 1, 'L', false);
$pdf->SetXY(42, 53);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','..............................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(42, 52);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','วิทยาลัยเทคนิคอุดรธานี'), 0, 1, 'L', false);

/* --- ที่ --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(18, 63);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874','ที่'), 0, 1, 'L', false);
$pdf->SetXY(23, 63);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874','............................................................'), 0, 1, 'L', false);
$pdf->SetXY(40, 62);
$pdf->SetFont('THSarabunNew','',16);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874',$row['fba_id']), 0, 1, 'L', false);

/* --- วันที่ --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(93, 63);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','วันที่'), 0, 1, 'L', false);
$pdf->SetXY(103, 63);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','......................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(110, 62);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$date), 0, 1, 'L', false);

/* --- เรื่อง --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(18, 73);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เรื่อง'), 0, 1, 'L', false);
$pdf->SetXY(28, 73);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','...........................................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(35, 72);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_details']), 0, 1, 'L', false);

/* --- เรียน --- */
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 83);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เรียน'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(28, 83);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ผู้อำนวยการวิทยาลัยเทคนิคอุดรธานี'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(40, 93);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ด้วยข้าพเจ้า นาย/นาง/นางสาว......................................................ตำแหน่ง.................................'), 0, 1, 'L', false);
$pdf->SetXY(90, 92);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_name']."   ".$row['fba_lname'] ), 0, 1, 'L', false);
$pdf->SetXY(150, 92);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_position'] ), 0, 1, 'L', false);

/* --- แผนก / พร้อม --- */
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 103);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','แผนก/งาน.....................................................พร้อมด้วย........................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(46, 102);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เทคโนโลยีสารสนเทศ'), 0, 1, 'L', false);
$pdf->SetXY(105 , 102);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_with_person']), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 113);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','…………………………………………………………………………………………………………………………………………………………...'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);

/* --- ความประสงค์ / เพื่อ --- */
$getProvince = "SELECT * FROM provinces WHERE id = '".$row['fba_province']."'";
$queryProvince = $db->query($getProvince);
while($pv = mysqli_fetch_assoc($queryProvince)){

                                
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 123);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','มีความประสงค์จะขออนุญาตไปราชการที่ ............................................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(86, 122);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',"สถานที่ ". $row['fba_location']. "   ". "อำเภอ ". $row['fba_amphure'] . "   ". "จังหวัด " . $pv['name_th']), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 133);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เพื่อ (ระบุ) ...............................................................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 143);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','…………………………………………………………………………………………………………………………………………………………...'), 0, 1, 'L', false);
}

/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 153);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ตั้งแต่วันที่......เดือน........................พ.ศ. ...............ถึงวันที่.........เดือน......................พ.ศ. ........... มีกำหนด..........วัน'), 0, 1, 'L', false);
$pdf->SetXY(86, 152);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 163);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เพื่อ (ระบุ) ...............................................................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 173);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','…………………………………………………………………………………………………………………………………………………………...'), 0, 1, 'L', false);
/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 183);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','โดยข้าพเจ้า  [  ]  ไม่ขอเบิกค่าใช้จ่าย'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 193);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ] เบิกจากงบประมาณโครงการ............................................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 203);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ]  ขอเบิกค่าใช้จ่าย ดังนี้    [  ]  ค่าเบี้ยเลี้ยง  [  ]  ค่าที่พัก   [  ]  ค่าพาหนะ  [  ]  อื่น ๆ ระบุ................'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 213);

/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(37.6, 213);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','จึงเรียนมาเพื่อโปรดพิจารณาอนุญาต '), 0, 1, 'L', false);
$pdf->SetXY(18, 223);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ลงชื่อ.........................................................ผู้ขออนุญาต '), 0, 1, 'L', false);
$pdf->SetXY(38, 232);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_name']. "    " . $row['fba_lname']), 0, 1, 'L', false);
$pdf->SetXY(28, 233);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','(.........................................................) '), 0, 1, 'L', false);
$pdf->SetXY(110, 212);
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ความเห็นของหัวหน้าแผนก/หัวหน้างาน  '), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(98, 222);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','(   )  เห็นควรอนุญาต  (   ) ไม่เห็นควรอนุญาต เนื่องจาก........  '), 0, 1, 'L', false);
$pdf->SetXY(98, 232);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','      ลงชื่อ.........................................................  '), 0, 1, 'L', false);
$pdf->SetXY(108, 241);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' (...........................................................)  '), 0, 1, 'L', false);




/* --- ความเห็นผู้บริหาร --- */
$pdf->SetFont('THSarabunNew','B',16);
$pdf->SetXY(87, 250);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','ความเห็นของผู้อำนวยการ'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(87, 260);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','(   )  อนุญาต	 (   )  ไม่อนุญาต  เนื่องจาก.................................'), 0, 1, 'L', false);
$pdf->SetXY(87, 270);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','ลงชื่อ..............................................'), 0, 1, 'L', false);


}


$pdf->Output();
?>