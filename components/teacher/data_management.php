<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);
?>


<section class="m-2">
      <div>
        <p class="text-[24px] "><b>จัดการข้อมูลทั่วไป</b></p>
      </div>
      <div class="mt-2">
    <a href="class_schedule.php"><button class="btn btn-accent">จัดการตารางเรียน</button></a>
      <button class="btn btn-accent">จัดการข้อมูลนักศึกษา</button>
      </div>
</section>