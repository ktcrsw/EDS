<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
        include "../assets/header.php";



?>
<section class="m-2 w-full">
   <!-- /* -------------------------------------------------------------------------- */
    /*                        หน้าผลการค้นหาข้อมูลนักศึกษา                        */
    /* -------------------------------------------------------------------------- */ -->




   <!-- Component: Table with hover state -->
   <div class="flex justify-center px-24 items-center">
      <div class="w-full overflow-x-auto">
         <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
            <a href="./data_management.php"><button class="btn btn-success text-light mb-3" style="color:#fff; ">เพิ่มตารางสอน</button></a>
            <tbody>
               <tr>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">รหัสวิชา</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">วิชาที่สอน</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">หลักสูคร</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">ห้อง</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">เวลาเริ่มสอน</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">เวลาที่สิ้นสุด</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">สถานะ</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">พิมพ์ตารางเรียน</th>
                  
               </tr>
               <?php
               $teacherID = $_SESSION['UserID'];
               $getSchedule = "SELECT * FROM tbl_schedule WHERE schedule_teacherID = '$teacherID'";
               $querySchedule = $db->query($getSchedule);
               while ($class = mysqli_fetch_assoc($querySchedule)) :

               ?>
                  <tr>
                     <form action="../../Backend/functions/remove_schedule.php" method="get">
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <span><?php echo "20001-000".$class['schedule_id']; ?></span>
                     </td>

                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <span><?php echo $class['schedule_title']; ?></span>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $class['schedule_detail']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $class['schedule_room']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $class['schedule_starttime']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $class['schedule_endtime']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 text-center stroke-slate-500 text-slate-500 ">
                        <input type="text" value="<?php echo $class['schedule_id']; ?>" name="classID" hidden>
                     <button class="btn btn-error" type="submit"><i class="fa-solid fa-user-minus"  style="color:#fff;"></i></button>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 text-center stroke-slate-500 text-slate-500 ">
                        <button class="btn btn-success" type="submit"><i class="fa-solid fa-print" style="color: #ffffff;"></i></button>
                     </td>
                     </form>
                  </tr>
               <?php endwhile; ?>


            </tbody>
         </table>
      </div>
   </div>



</section>