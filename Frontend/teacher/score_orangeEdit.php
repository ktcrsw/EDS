<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";
$subjectStuID = $_SESSION['subjectStuID'];
$teacherID = $_SESSION['UserID'];



$getScore = "SELECT * FROM createscore WHERE createScoreTeacherID = '$teacherID' AND createScoreSubjectID = '$subjectStuID'";
$queryGetScore = $db->query($getScore);

?>
<?php while ($score = mysqli_fetch_array($queryGetScore)) {

$mindScore = $score['createScoreMind'];
$theoryScore = $score['createScoreTheory'];
$carryScore = $score['createScoreCarry'];
$finalScore = $score['createScoreFinal'];
$startDate = $score['createScoreStartDate'];
$endDate = $score['createScoreEndDate'];
} ?>


<div class="w-full p-4 ">
<div class="flex justify-center p-8">
<div class="px-4">
<a href="./score_orangeAdd.php" class="px-10 py-4 bg-blue-500 text-white">เพิ่มใบงาน</a>
<a href="" class="px-10 py-4 bg-green-500 text-white">ยืนยันบันทึกคะแนน</a>
<a href="./score_list.php" class="px-10 py-4 bg-pink-500 text-white">ย้อนกลับ</a>

</div>

</div>
<!-- Component: Simple Info Alert -->
<div class="w-full px-4 py-3 text-sm border text-center rounded border-cyan-100 bg-cyan-500 text-white" role="alert">
  <p>ใบงาน/ภาคปฏิบัติ หน่วยการเรียนที่ 2 (40คะแนน)</p>
</div>
<table class="w-full pt-2 text-center border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-8 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">ลำดับ</th>
        <th scope="col" class="h-8 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">รหัสนักศึกษา</th>
        <th scope="col" class="h-8 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">ชื่อ-นามสกุล</th>
        <th scope="col" class="h-8 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
    <div class="flex  justify-center">
      <label for="" class="text-sm font-medium  "> คะแนน(10)</label>
   <a href="./score_orangeAdd.php"> <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" viewBox="0 0 24 24" fill="none" stroke="#ea860c" stroke-width="3" stroke-linecap="butt" stroke-linejoin="arcs"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
        </th>
    </div>
        <th scope="col" class="h-8 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">รวม (10)</th>
        <th scope="col" class="h-8 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">คำนวณ (40)</th>
      </tr>
      <?php 
      
      $getStd = "SELECT enrollsubject.ref_studenttbl AS stdid, 
      enrollsubject.ref_stdfname AS name, 
      enrollsubject.ref_stdlname AS lname ,
      save_studentscore.mindScore AS mind, 
      save_studentscore.theoryScore AS theory, 
      save_studentscore.carryScore AS carry, 
      save_studentscore.finalScore AS final 
      FROM enrollsubject INNER JOIN save_studentscore 
      ON enrollsubject.ref_studenttbl = save_studentscore.studentID
      WHERE teacherID = '$teacherID' AND subjectID = '$subjectStuID'";





      $queryGetStd = $db->query($getStd);
      $totalStd = mysqli_num_rows($queryGetStd);
      for($i = 1; $i <= $totalStd; $i++){
      while($stds = mysqli_fetch_assoc($queryGetStd)){

      ?>
      <tr class="transition-colors duration-300 hover:bg-slate-50" a>
        <td class="h-8 px-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $i++;?></td>
        <td class="h-8 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $stds['stdid'];?></td>
        <td class="h-8 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $stds['name']. "            " . $stds['lname'];?></td>
        <td class="h-8 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $stds['carry'];?></td>
        <td class="h-8 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $stds['carry'];?></td>
        <td class="h-8 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $stds['carry'];?></td>
        
      </tr>
                      <?php }
                      } ?>
     
      
    </tbody>
  </table>
</div>