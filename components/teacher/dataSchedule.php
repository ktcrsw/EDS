<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";

$schdule = "SELECT * FROM classschedule";
$result = $db->query($schdule);

?>
<div class="overflow-x-auto m-3">
    <a href="./add_workhour.php"><button class="btn btn-primary">กลับสู่หน้าจัดการตารางเรียน</button></a>
<!-- component -->
<div class="overflow-x-auto m-3">
  <table class="table w-full" style="font-size: 24px;">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>ชื่อวิชาที่ลงสอน</th>
        <th>ชื่ออาจารย์</th>
        <th>หลักสูตรที่สอน</th>
        <th>ห้องที่สอน</th>
        <th>วันที่สอน</th>
        <th>เวลาที่เริ่มสอน</th>
        <th>เวลาที่สิ้นสุด</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <?php 
      
      while ($row = mysqli_fetch_assoc($result)):
      
      ?>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div>
              <div class="text-sm opacity-50"><?php echo $row['classSchedule_subjectName'];?></div>
            </div>
          </div>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_teacherName']?></span>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_Course']?></span>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_Room']?></span>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_date']?></span>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_Start']?></span>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['classSchedule_End']?></span>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
    <!-- foot -->
    <tfoot>
      <tr>
        <th></th>
        <th>ชื่อวิชาที่ลงสอน</th>
        <th>ชื่ออาจารย์</th>
        <th>หลักสูตรที่สอน</th>
        <th>ห้องที่สอน</th>
        <th>วันที่สอน</th>
        <th>เวลาที่เริ่มสอน</th>
        <th>เวลาที่สิ้นสุด</th>
        <th></th>
      </tr>
    </tfoot>
    
  </table>
</div>
</div>
