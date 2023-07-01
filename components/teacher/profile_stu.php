<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>
<div class="w-full  bg-[#f7f8f9] p-4">
  <span class="text-[20px] font-medium flex items-center p-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
      <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
      <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
    </svg>ข้อมูลนักศึกษา</span>
  <div class="flex gap-2 ">
    <div class="  flex ">
      <div class="bg-white rounded-md   w-96">
        <div class="flex justify-center">
          <div class="avatar mt-4">
            <div class="w-[230px] h-[270px] rounded">
              <?php 
              
              if($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'หญิง'){
                  echo "<img src='../image/null_user_girl.png' />";
              } elseif($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'ชาย') {
                  echo "<img src='../image/null_user.png' />";
              } else {

                                                
              ?>
                  <img src="../image/<?php echo $_SESSION['StudentImg']; ?>" />
                  <?php } ?>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-center mt-4">
          <span class="text-[20px] font-medium"><?php echo $_SESSION['StudentName'] . "&nbsp;" . $_SESSION['StudentLName']; ?></span>
          <span class="text-gray-500"><?php echo $_SESSION['StudentID']; ?></span>
          <div class=" mt-2 gap-4">
            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
              <?php

              if ($_SESSION['status'] == 0) {
                echo "<span class='inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300'>";
                echo "พ้นการศึกษา";
                echo "</span>";
              }
              if ($_SESSION['status'] == 1) {
                echo "<span class='inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300'>";
                echo "กำลังศึกษา";
                echo "</span>";
              }
              ?>
            </span>
            <span class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"> เทคโนโลยีสารสนเทศ ปวช.<?php echo $_SESSION['StudentYear']; ?>/<?php echo $_SESSION['StudentGroups']; ?> </span>
          </div>

          <ul class="relative flex flex-col gap-12 py-12 pl-6 before:absolute before:top-0 before:left-6 before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-6 after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200 ">
            <li role="article" class="relative pl-6 ">
              <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                4.00
              </span>
              <div class="flex flex-col flex-1 gap-0">
                <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 1/2564 </h4>
                <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
              </div>
            </li>
            <li class="relative pl-6 ">
              <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                3.90
              </span>
              <div class="flex flex-col flex-1 gap-0">
                <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 2/2564</h4>
                <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
              </div>
            </li>
            <li class="relative pl-6 ">
              <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-amber-500 ">
                3.49
              </span>
              <div class="flex flex-col flex-1 gap-0">
                <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 1/2565 </h4>
                <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดี</p>
              </div>
            </li>
            <li class="relative pl-6 ">
              <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-6 text-white text-[12px] -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                3.99
              </span>
              <div class="flex flex-col flex-1 gap-0">
                <h4 class="text-sm font-medium text-slate-700"> ภาคเรียน 2/2565 </h4>
                <p class="text-xs text-slate-500">ผลการเรียน อยู่ในเกณฑ์ ดีมาก</p>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="w-full   rounded-md">

      <table class=" w-full rounded border-slate-200">
        <tbody>

          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right rounded-ss-lg  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">รหัสนักศึกษา</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['StudentID']; ?></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">ชื่อ-สกุล</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['StudentName'] . "&nbsp;" . $_SESSION['StudentLName']; ?></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">ชื่อเล่น</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">หมายเลขประจำตัวประชาชน</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t rounded-bl-lg  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">เบอร์โทรศัพท์มือถือ</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 rounded-bl-lg border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
        </tbody>
      </table>
      <table class=" w-full mt-4 rounded border-slate-200">
        <tbody>

          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right rounded-ss-lg  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">หลักสูตร</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['Course']; ?></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">สาขาวิชา</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['Department']; ?></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">สาขางาน</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">ชั้นปี</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['StudentYear']; ?> / <?php echo $_SESSION['StudentGroups']; ?></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t rounded-bl-lg  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">สถานภาพนักศึกษา</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 rounded-bl-lg border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "> <?php

                                                                                                                                                                                  if ($_SESSION['status'] == 0) {
                                                                                                                                                                                    echo "พ้นการศึกษา";
                                                                                                                                                                                  }
                                                                                                                                                                                  if ($_SESSION['status'] == 1) {
                                                                                                                                                                                    echo "กำลังศึกษา";
                                                                                                                                                                                  }
                                                                                                                                                                                  ?></td>

          </tr>
        </tbody>
      </table>
      <table class=" w-full mt-4 rounded border-slate-200">
        <tbody>

          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right rounded-ss-lg  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">อาจารย์ที่ปรึกษา</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">เบอร์โทร</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white  ">ชื่อผู้ปกครอง</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">ที่อยู่ผู้ปกครอง</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
          <tr class="transition-colors duration-300 rounded-md hover:bg-slate-50">
            <td class="h-12 w-64 px-4 text-sm text-right  transition duration-300 border-t rounded-bl-lg  border-l first:border-l-0 bg-[#626a74] border-slate-200 stroke-slate-500 text-white ">เบอร์โทรศัพท์มือถือ</td>
            <td class="h-12 px-4 text-sm text-left transition duration-300 rounded-bl-lg border-t border-l  first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 "></td>

          </tr>
        </tbody>
      </table>

    </div>
  </div>

</div>