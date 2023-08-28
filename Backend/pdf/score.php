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
$pdf->Image('../upload/udtc.png', 10, 10, -300);
$pdf->Cell(71 ,10,'',0,0);
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
$pdf->Cell(34 ,5,iconv('UTF-8', 'cp874','กลุ่มเรียนที่ 1 ปวช.3/ชกว.1'),0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(34 ,5,iconv('UTF-8', 'cp874','ครูที่ปรีกษา'),0,1);

$pdf->SetFont('THSarabunNew','B',15);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('THSarabunNew','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('THSarabunNew','B',16);
/*Heading Of the table*/
$pdf->Cell(10 ,6,iconv('UTF-8', 'cp874','ลำดับ'),1,0,'C');
$pdf->Cell(35 ,6,iconv('UTF-8', 'cp874','รหัสประจำตัว'),1,0,'C');
$pdf->Cell(60 ,6,iconv('UTF-8', 'cp874','ชื่อ - นามสกุล'),1,0,'C');

$pdf->SetFont('THSarabunNew','B',16);
$pdf->Cell(20 ,6,iconv('UTF-8', 'cp874','จิตพิสัย'),1,0,'C');
$pdf->Cell(20 ,6,iconv('UTF-8', 'cp874','ภาคทฤษฏี'),1,0,'C');
$pdf->Cell(20 ,6,iconv('UTF-8', 'cp874','ภาคปฏิบัติ'),1,0,'C');
$pdf->Cell(20 ,6,iconv('UTF-8', 'cp874','ปลายภาค'),1,0,'C');
$pdf->Cell(15 ,6,iconv('UTF-8', 'cp874','เกรด'),1,0,'C');
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

$score = "SELECT enrollsubject.ref_studenttbl AS stdid, 
            enrollsubject.ref_stdfname AS name, 
            enrollsubject.ref_stdlname AS lname ,
            save_studentscore.mindScore AS mind, 
            save_studentscore.theoryScore AS theory, 
            save_studentscore.carryScore AS carry, 
            save_studentscore.finalScore AS final 
            FROM enrollsubject INNER JOIN save_studentscore 
            ON enrollsubject.ref_studenttbl = save_studentscore.studentID
            WHERE teacherID = '".$_POST['teacherid']."' AND subjectID = '".$_POST['subid']."' ";
$scorequery = $db->query($score);
$total = mysqli_num_rows($scorequery);
$sum = 1;
$pdf->SetFont('THSarabunNew','',16);

for($i = 1; $i <= $total; $i++){
    while($row = mysqli_fetch_assoc($scorequery)) {
         $pdf->Cell(10 ,6,$i++,1,0);
		$pdf->Cell(35 ,6,$row['stdid'],1,0);
		$pdf->Cell(60 ,6,iconv('UTF-8', 'cp874',$row['name']. "   " . $row['lname']),1,0);

        $pdf->Cell(20 ,6,$row['mind'],1,0,'R');
        $pdf->Cell(20 ,6,$row['theory'],1,0,'R');
        $pdf->Cell(20 ,6,$row['carry'],1,0,'R');
        $pdf->Cell(20 ,6,$row['final'],1,0,'R');
        $totalScore = $row['mind'] + $row['theory'] + $row['carry'] + $row['final'];

        if($totalScore > 100 && $totalScore < 0){
            echo "ไม่สามารถระบุคะแนนได่";
          } elseif($totalScore >= 79){
            echo $pdf->Cell(15 ,6,'4',1,0,'R');
          }
           elseif($totalScore >= 69){
            echo $pdf->Cell(15 ,6,'3',1,0,'R');
          }
          elseif($totalScore >= 59){
            echo $pdf->Cell(15 ,6,'2',1,0,'R');
          }
           elseif($totalScore > 49){
            echo $pdf->Cell(15 ,6,'1',1,0,'R');
          } elseif($totalScore > 48){
            echo $pdf->Cell(15 ,6,'0',1,0,'R');
          }
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
        }

    }
$pdf->Output();

?>