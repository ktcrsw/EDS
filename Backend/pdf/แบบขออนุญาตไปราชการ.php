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
$calDate = round(abs(strtotime($row['startdate']) - strtotime($row['enddate']))/60/60/24);

$pdf->Image('../upload/krut.png', 10, 10, -300);
$pdf->Cell(71 ,10,'',0,0);

$pdf->Cell(59 ,10,'',0,1);
/* --- Cell --- */
$pdf->SetXY(87, 24);
$pdf->SetFont('THSarabunNew','B',35);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','บันทึกข้อความ'), 0, 1, 'L', false);
$pdf->Cell(71 ,10,'',0,0);


$pdf->SetFont('THSarabunNew','B',18);
/* --- ส่วนราชการ --- */
$pdf->SetXY(18, 50);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ส่วนราชการ'), 0, 1, 'L', false);
$pdf->SetXY(42, 50);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','..............................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(42, 49);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','วิทยาลัยเทคนิคอุดรธานี'), 0, 1, 'L', false);

/* --- ที่ --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(18, 60);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874','ที่'), 0, 1, 'L', false);
$pdf->SetXY(23, 60);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874','............................................................'), 0, 1, 'L', false);
$pdf->SetXY(40, 59);
$pdf->SetFont('THSarabunNew','',16);
$pdf->Cell(62, 4,iconv('UTF-8', 'cp874',$row['fba_id']), 0, 1, 'L', false);

/* --- วันที่ --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(93, 60);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','วันที่'), 0, 1, 'L', false);
$pdf->SetXY(103, 60);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','......................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(110, 59);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$date), 0, 1, 'L', false);

/* --- เรื่อง --- */
$pdf->SetFont('THSarabunNew','B',18);
$pdf->SetXY(18, 70);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เรื่อง'), 0, 1, 'L', false);
$pdf->SetXY(28, 70);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','...........................................................................................................................................'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(35, 69);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ขออนุญาตไปราชการ'), 0, 1, 'L', false);

/* --- เรียน --- */
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 80);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เรียน'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(28, 80);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ผู้อำนวยการวิทยาลัยเทคนิคอุดรธานี'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(40, 87);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ด้วยข้าพเจ้า นาย/นาง/นางสาว......................................................ตำแหน่ง.................................'), 0, 1, 'L', false);
$pdf->SetXY(90, 85);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_name']."   ".$row['fba_lname'] ), 0, 1, 'L', false);
$pdf->SetXY(150, 85);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_position'] ), 0, 1, 'L', false);

/* --- แผนก / พร้อม --- */
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 95);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','แผนก/งาน.....................................................พร้อมด้วย........................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(46, 94);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เทคโนโลยีสารสนเทศ'), 0, 1, 'L', false);
$pdf->SetXY(105 , 94);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_with_person']), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 102);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','…………………………………………………………………………………………………………………………………………………………...'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);

/* --- ความประสงค์ / เพื่อ --- */
$getProvince = "SELECT * FROM provinces WHERE id = '".$row['fba_province']."'";
$queryProvince = $db->query($getProvince);
while($pv = mysqli_fetch_assoc($queryProvince)){

                                
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 108);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','มีความประสงค์จะขออนุญาตไปราชการที่ ............................................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(86, 107);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',"สถานที่ ". $row['fba_location']. "   ". "อำเภอ ". $row['fba_amphure'] . "   ". "จังหวัด " . $pv['name_th']), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 116);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','เพื่อ (ระบุ) ...............................................................................................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(36, 115);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_details']), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 124);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','…………………………………………………………………………………………………………………………………………………………...'), 0, 1, 'L', false);
}

/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 134);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ตั้งแต่วันที่...................................................ถึงวันที่...................................................................... มีกำหนด..........วัน'), 0, 1, 'L', false);
$pdf->SetXY(40, 133);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['startdate']), 0, 1, 'L', false);
$pdf->SetXY(105, 133);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['enddate']), 0, 1, 'L', false);
$pdf->SetXY(170, 133);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$calDate), 0, 1, 'L', false);
/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 143);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','โดยข้าพเจ้า  [  ]  ไม่ขอเบิกค่าใช้จ่าย'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 150);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ] เบิกจากงบประมาณโครงการ............................................................................................................'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 156);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ]  ขอเบิกค่าใช้จ่าย ดังนี้    [  ]  ค่าเบี้ยเลี้ยง  [  ]  ค่าที่พัก   [  ]  ค่าพาหนะ  [  ]  อื่น ๆ ระบุ................'), 0, 1, 'L', false);
$pdf->SetXY(37.6, 162);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ]  ขออนุญาตใช้รถยนต์ของทางราชการพร้อมค่าน้ำมันเชื้อเพลิง '), 0, 1, 'L', false);
$pdf->SetXY(37.6, 168);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','[  ]  ขออนุญาตใช้รถยนต์ส่วนตัวหมายเลขทะเบียน.................................พร้อมค่าชดเชยค่าน้ำมันเชื้อเพลิง '), 0, 1, 'L', false);

/* --- วันที่--- */                  
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(36, 185);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','จึงเรียนมาเพื่อโปรดพิจารณาอนุญาต '), 0, 1, 'L', false);
$pdf->SetXY(18, 192);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ลงชื่อ.........................................................ผู้ขออนุญาต '), 0, 1, 'L', false);
$pdf->SetXY(38, 198);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',$row['fba_name']. "    " . $row['fba_lname']), 0, 1, 'L', false);
$pdf->SetXY(28, 200);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','(.........................................................) '), 0, 1, 'L', false);
$pdf->SetXY(110, 185);



$pdf->SetXY(36, 215);
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','1.ความเห็นของรองผู้อำนวยการ  '), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(18, 223);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','   (   )  ควรอนุญาต  (   ) ไม่ควรอนุญาต เนื่องจาก...............'), 0, 1, 'L', false);
$pdf->SetXY(28, 230);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ลงชื่อ.........................................................ผู้ขออนุญาต '), 0, 1, 'L', false);
$pdf->SetXY(28, 237);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','        (.........................................................) '), 0, 1, 'L', false);



$pdf->SetXY(110, 185);
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','ความเห็นของหัวหน้าแผนก/หัวหน้างาน  '), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(98, 192);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','     (   )  เห็นควรอนุญาต  (   ) ไม่เห็นควรอนุญาต เนื่องจาก........  '), 0, 1, 'L', false);
$pdf->SetXY(98, 198);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','      ลงชื่อ.........................................................  '), 0, 1, 'L', false);
$pdf->SetXY(120, 204);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' นายวิชัย แก้วอุดร  '), 0, 1, 'L', false);
$pdf->SetXY(108, 205);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' (...........................................................)  '), 0, 1, 'L', false);

$pdf->SetXY(110, 215);
$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','2.ความเห็นของรองผู้อำนวยการฝ่ายบริหารทรัพยากร  '), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(98, 223);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','             (   )  เห็นควรอนุญาต  (   ) ไม่เห็นควรอนุญาต เนื่องจาก........  '), 0, 1, 'L', false);
$pdf->SetXY(98, 233);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874','                      ลงชื่อ.........................................................  '), 0, 1, 'L', false);



/* --- ความเห็นผู้บริหาร --- */
$pdf->SetFont('THSarabunNew','B',16);
$pdf->SetXY(87, 249);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','ความเห็นของผู้อำนวยการ'), 0, 1, 'L', false);
$pdf->SetFont('THSarabunNew','',16);
$pdf->SetXY(87, 256);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','(   )  อนุญาต (   )  ไม่อนุญาต  เนื่องจาก.................................'), 0, 1, 'L', false);
$pdf->SetXY(87, 262);
$pdf->Cell(40, 5,iconv('UTF-8', 'cp874','ลงชื่อ..............................................'), 0, 1, 'L', false);
$pdf->SetXY(100, 268);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' นายธีรภัทร์ ไชยสัตย์  '), 0, 1, 'L', false);
$pdf->SetXY(87, 270);
$pdf->Cell(0, 4,iconv('UTF-8', 'cp874',' (...........................................................)  '), 0, 1, 'L', false);


}


$pdf->Output();
?>