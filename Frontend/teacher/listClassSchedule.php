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
                  <!-- <select class="select select-bordered w-full max-w-xs mb-3">
                     <option disabled selected>เลือกปีการศึกษา</option>
                     <option value="2566">2566</option>
                     <option value="2565">2565</option>
                     <option value="2564">2564</option>
                     <option value="2563">2563</option>
                     <option value="2562">2562</option>
                     <option value="2561">2561</option>
                     <option value="2560">2560</option>
                     <option value="2559">2559</option>
                     <option value="2558">2558</option>
                     <option value="2557">2557</option>
                     <option value="2556">2556</option>
                     <option value="2555">2555</option>
                     <option value="2554">2554</option>
                     <option value="2553">2553</option>
                     <option value="2552">2552</option>
                     <option value="2551">2551</option>
                  </select> -->
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
                        <input type="text" value="<?php echo $class['schedule_id']; ?>" name="classID">
                     <button class="btn btn-error" type="submit"><i class="fa-solid fa-user-minus"  style="color:#fff;"></i></button>
                     </td>
                     </form>
                  </tr>
               <?php endwhile; ?>


            </tbody>
         </table>
      </div>
   </div>



</section>