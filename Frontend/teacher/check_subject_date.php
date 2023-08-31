<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">


<?php 

include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


// $sql = "SELECT * FROM enrolltbl";
// $query = $db->query($sql);

// $sql = "SELECT * FROM users";
// $query = $db->query($sql);

// $subject = "SELECT * FROM enrollsubject";
// $data = $db->query($subject);


$subjectteacherid = $_SESSION['SubjectTeacherID'];
$teacherid = $_SESSION['UserID'];
$sgroup = $_SESSION['GP'];
$syear = $_SESSION['Year'];

$currentdate = date('Y-m-d');

$lc = "SELECT * FROM checkin_logs WHERE logs_subjectID = '$subjectteacherid' AND log_teacherID = '".$_SESSION['UserID'].""; 
$lcData = $db->query($lc);



?>
<div class="w-full py-6 ">
<!-- Component: Table with hover state -->
<div class="flex justify-center px-">
<div class="w-full px-20 overflow-x-auto">
<div class="flex mb-4">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
<span class="text-[20px] font-medium">วันที่ทำการเรียนการสอน</span>
</div>
<div class=" justify-center items-center flex gap-4 mb-4 pt-16">
    <!-- Component: Base primary basic button -->
<a href="./check_subject_tablestu.php?=<?php echo $_SESSION['GP'];?>" class="inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide text-emerald-600 transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-emerald-200/60 hover:bg-emerald-300  disabled:cursor-not-allowed disabled:shadow-none">
  <span>เช็คชื่อประจำคาบเรียน</span>
</a>
<!-- Component: Base primary basic button -->
<!-- End Base primary basic button -->
</div>
<div  >
  <table class="w-full  border border-separate rounded border-slate-200  text-center" cellspacing="0">
    <thead>
    <tr class="bg-[#3b82f6]">
      <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white rounded-tl-lg ">วันที่จัดการสอน</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white rounded-tl-lg ">รายละเอียด</th>
      </tr>
    </thead>
    <tbody>

    <?php while($ls = mysqli_fetch_assoc($lcData)): ?>
      <tr class=" odd:bg-slate-100">
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $ls['logs_date']; ?></td>
        <td class="h-12 px-1 text-sm transitions duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "> 

          <button class="btn btn-success" style="color:#fff">ดูรายละเอียดการเช็คชื่อ</button>  
        
        </td>
      </tr>
      <?php endwhile; ?>
      
    </tbody>
  </table>
</div>
</div>


</div>

</div>