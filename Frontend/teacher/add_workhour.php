<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);

$schdule = "SELECT * FROM classschedule";
$result = $db->query($schdule);
?>

<section class="m-3 h-[20px]">
    <!-- component 
-->

    <div class="sm:px-6 w-full">

        <div class="px-4 md:px-10 ">
            <div class="flex items-center justify-between">
                <div class="">

                </div>
            </div>
        </div>

        <div class="bg-white py-4  px-4 md:px-8 xl:px-10">
            <form class="" action="../../Backend/functions/add_schedule.php">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            ชื่อวิชา
                        </label>

                        <select name="subject_name" id="subject_name" class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 ">
                            <?php while ($allSub = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $allSub['subject_name']; ?>"><?php echo $allSub['subject_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            ครูผู้สอน
                        </label>
                        <input required name="teacher_name" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="<?php echo $_SESSION['Firstname']; ?>" value="<?php echo $_SESSION['Firstname']; ?>">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            หลักสูตรที่สอน
                        </label>
                        <select name="course" id="timestart" class="select select-bordered w-full">
                            <option value="ปวช">ปวช</option>
                            <option value="ปวส">ปวส</option>
                            <option value="ป.ตรี">ป.ตรี</option>
                        </select>
                        <p class="text-gray-600 text-xs italic"></p>
                    </div>

                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            ห้องที่สอน
                        </label>
                        <select name="room" id="timestart" class="select select-bordered w-full">
                            <option value="530">530</option>
                            <option value="531">531</option>
                            <option value="532">532</option>
                            <option value="533">533</option>
                            <option value="535">535</option>
                            <option value="541">541</option>
                            <option value="542">542</option>
                            <option value="543">543</option>
                            <option value="544">544</option>
                            <option value="545">545</option>
                        </select>
                    </div>

                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            วันที่สอน
                        </label>
                        <select name="date" id="date" class="select select-bordered w-full">
                            <option value="จันทร์">จันทร์</option>
                            <option value="อังคาร">อังคาร</option>
                            <option value="พุธ">พุธ</option>
                            <option value="พฤหัสบดี">พฤหัสบดี</option>
                            <option value="ศุกร์">ศุกร์</option>
                        </select>
                        <p class="text-gray-600 text-xs italic"></p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            เวลาที่เริ่มสอน
                        </label>
                        <select name="timestart" id="timestart" class="select select-bordered w-full">
                            <option value="8.30">8.30</option>
                            <option value="9.30">9.30</option>
                            <option value="10.30">10.30</option>
                            <option value="11.30">11.30</option>
                            <option value="12.30">12.30</option>
                            <option value="13.30">13.30</option>
                            <option value="14.30">14.30</option>
                            <option value="15.30">15.30</option>
                            <option value="16.30">16.30</option>
                            <option value="17.30">17.30</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            เวลาที่สิ้นสุด
                        </label>
                        <select name="timeend" id="timestart" class="select select-bordered w-full">
                            <option value="9.30">9.30</option>
                            <option value="10.30">10.30</option>
                            <option value="11.30">11.30</option>
                            <option value="12.30">12.30</option>
                            <option value="13.30">13.30</option>
                            <option value="14.30">14.30</option>
                            <option value="15.30 ">15.30</option>
                            <option value="16.30">16.30</option>
                            <option value="17.30">17.30</option>
                            <option value="18.30">18.30</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">ลงเวลาที่สอน</button>
                <div class="dropdown dropdown-right">
                    <a href="dataSchedule.php"><label tabindex="0" class="btn btn-success m-1 text-light"><span class="text-white"> ดูรายชื่อวิชาที่ลงสอนทั้งหมด</label></a>
                </div>
            </form>
  <table class="table m-3 border-collapse border border-slate-500">
    <!-- head -->
    <thead>
      <tr>
        <th class="border border-slate-600">ก่อนคาบแรก</th>
        <th class="border border-slate-600">คาบที่ 1 <br>8.30 - 9.30 </th>
        <th class="border border-slate-600">คาบที่ 2 <br>9.30 - 10.30 </th>
        <th class="border border-slate-600">คาบที่ 1,2 <br>9.30 - 10.30 </th>
        <th class="border border-slate-600">คาบที่ 3 <br>10.30 - 11.30 </th>
        <th class="border border-slate-600">คาบที่ 4 <br>11.30 - 12.30 </th>
        <th class="border border-slate-600">คาบที่ 5 <br>12.30 - 13.30 </th>
        <th class="border border-slate-600">คาบที่ 6 <br>13.30 - 14.30 </th>
        <th class="border border-slate-600">คาบที่ 7 <br>14.30 - 15.30 </th>
        <th class="border border-slate-600">คาบที่ 8 <br>15.30 - 16.30 </th>
        <th class="border border-slate-600">คาบที่ 9 <br>16.30 - 17.30 </th>
        <th class="border border-slate-600">คาบที่ 10 <br>17.30 - 18.30 </th>
      </tr>
    </thead>

    <tbody class="border-collapse border border-slate-500">
      <!-- row 1 -->
      <?php 
    
    $saveClassSchedule = "SELECT * FROM save_classschedule";
    $resultClassSchedule = $db->query($saveClassSchedule);
    if($row = mysqli_fetch_array($resultClassSchedule)){
        // $dataSchedule = array(
        //     "classSchedule_id"=>$row['classSchedule_id'],
        //     "classSchedule_subjectName"=>$row['classSchedule_subjectName'],
        //     "classSchedule_teachertName"=>$row['classSchedule_teacherName'],
        //     "classSchedule_Course"=>$row['classSchedule_Course'],
        //     "classSchedule_Room"=>$row['classSchedule_Room'],
        //     "classSchedule_date"=>$row['classSchedule_date'],
        //     "classSchedule_Start"=>$row['classSchedule_Start'],
        //     "classSchedule_End"=>$row['classSchedule_End']
        // );    
        $_SESSION['classSchedule_id'] = $row['no'];
        $_SESSION['classSchedule_subjectName'] = $row['classSchedule_subjectName'];
        $_SESSION['classSchedule_teacherName'] = $row['classSchedule_teacherName'];
        $_SESSION['classSchedule_Room'] = $row['classSchedule_Room'];
        $_SESSION['classSchedule_date'] = $row['classSchedule_date'];
        $_SESSION['classSchedule_Start'] = $row['classSchedule_Start'];
        $_SESSION['classSchedule_End'] = $row['classSchedule_End'];
    }
    
    ?>
      <tr>
        <th class="table-th-mobile">จันทร์</th>
        <td class="text-center items-center">
        <?php

        if($_SESSION['classSchedule_teacherName'] == $_SESSION['Firstname'] AND $_SESSION['classSchedule_Start'] == "8.30" OR  $_SESSION['classSchedule_End'] == "10.30"){
            echo $_SESSION['classSchedule_subjectName']. "<br>" . $_SESSION['classSchedule_Room']. "<br>". $_SESSION['classSchedule_teacherName'];
        }
        
        ?>
        </td>

    </tr>
      <!-- row 2 -->
      <tr>
        <th class="table-th-mobile">อังคาร</th>
        <td class="">
            
        </td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th class="table-th-mobile">พุธ</th>
        <td class="">
          <?php
          // Content for cell
          ?>
        </td>
      </tr>
      <!-- row 4 -->
      <tr>
        <th class="table-th-mobile">พฤหัสบดี</th>
        <td class="">
          <?php
          // Content for cell
          ?>
        </td>
      </tr>
      <!-- row 5 -->
      <tr>
        <th class="table-th-mobile">ศุกร์</th>
        <td class="">
          <?php
          // Content for cell
          ?>
        </td>
      </tr>
    </tbody>
  </table>

            <table class="table m-3 w-full border-collapse border border-slate-500" style="font-size: 24px;">
                <!-- head -->
                <thead>
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox" />
                            </label>
                        </th>
                        <th class="" style="font-size:16px;">ชื่อวิชาที่ลงสอน</th>
                        <th class="" style="font-size:16px;">ชื่ออาจารย์</th>
                        <th class="" style="font-size:16px;">หลักสูตรที่สอน</th>
                        <th class="" style="font-size:16px;">ห้องที่สอน</th>
                        <th class="" style="font-size:16px;">วันที่สอน</th>
                        <th class="" style="font-size:16px;">เวลาที่เริ่มสอน</th>
                        <th class="" style="font-size:16px;">เวลาที่สิ้นสุด</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) :

                    ?>
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox" name="check"/>
                                </label>
                            </th>
                            <td style="font-size:16px;">
                                <div class="flex items-center space-x-3">
                                    <div>
                                        <div class="text-sm opacity-100" style="font-size:16px;"><?php echo $row['classSchedule_subjectName']; ?></div>
                                    </div>
                                </div>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_teacherName'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_Course'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_Room'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_date'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_Start'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><?php echo $row['classSchedule_End'] ?></span>
                            </td>
                            <td hidden>
                            <span class="badge badge-ghost badge-sm" name="checkid" style="font-size:16px;"><?php echo $row['classSchedule_id'] ?></span>
                            </td>
                            <td style="font-size:16px;">
                                <form action="../../Backend/functions/remove_schedule.php?=<?php echo $row['classSchedule_id'];?>" method="post">
                                <span class="badge badge-ghost badge-sm" style="font-size:16px;"><a href="../../Backend/functions/remove_schedule.php?=<?php echo $row['classSchedule_id'];?> " name="checkid"><button class="btn btn-error 	fas fa-exclamation-circle" style="color:#fff;" onclick="Swal.fire(
                                    {
  icon: 'error',
  title: 'ลบรายวิชานี้สำเร็จ',
  text: 'ลบรายวิชานี้แล้ว!',
}
                                )">&nbsp;ลบรายวิชานี้</button></a></span>
                                </form>
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




        <style>
            .checkbox:checked+.check-icon {
                display: flex;
            }
        </style>
        <script>
            function dropdownFunction(element) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                list.classList.add("target");
                for (i = 0; i < dropdowns.length; i++) {
                    if (!dropdowns[i].classList.contains("target")) {
                        dropdowns[i].classList.add("hidden");
                    }
                }
                list.classList.toggle("hidden");
            }
        </script>
        <script src="../assets/js/auto_complete.js"></script>
</section>