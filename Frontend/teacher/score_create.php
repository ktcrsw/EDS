<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM enrollsubject";
$data = $db->query($subject);

$subjectteacherid = $_SESSION['SubjectTeacherID'];
$sgroup = $_SESSION['GP'];
$syear = $_SESSION['Year'];

// echo $sgroup. "" . $syear;


?>
<div class="w-full ">
<div class="flex p-8">
<div class="w-1/3 h-screen  p-4 flex justify-center">
    <div>
        <div class="flex-row">
           <div>
           <span>รหัสวิชาเรียน : </span>
           <span> 2100-1100</span>
           </div>
           <div>
           <span>ชื่อวิชาเรียน : </span>
           <span>พาสาไทย</span>
           </div>
           <span>กำหนดสัดส่วนคะแนนเป็นร้อยละ(%) จาก 100%</span>
           <div>
           <input type="text" class="w-16 h-10 text-white font-bold rounded-md bg-red-500" placeholder="0">%
           <input type="text" id="first_name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg  block w-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="จิตพิสัย" required>
           </div>
    </div>
</div>
</div>
<div class="w-full h-screen  ">
<div class="w-full overflow-x-auto p-4">
<div class="flex mb-4">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
<span class="text-[20px] font-medium">สร้างบันทึกคะแนน</span>
</div>
<div>
  <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">จิตพิสัย 20%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">ภาคทฤษฏี 20%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">ภาคปฏิบัติ 40%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">สอบปลายภาค 20%</th>
        <th scope="col" class="h-12 px-1 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-slate-100"></th>
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50" a>
        <td class="h-12 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
            <div class="w-full h-12 flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold">จิตพิสัย</div>
                <div class="w-1/3 bg-green-400 flex items-center justify-center">
                    <span class="text-white font-medium text-lg">20</span>
                </div>
                
            </div>
        </td>
        <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
        <div class="w-full   h-full flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold flex-col">
                    <div>หน่วยการเรียนที่ 1</div>
                    <span>01/02/2022 - 01/08/2023</span>
                </div>
                <div class="w-1/3 bg-pink-500 flex items-center justify-center">
                    <span class="text-white font-medium text-lg">20</span>
                </div>
                
            </div>
        </td>
        <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
        <div class="w-full   h-full flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold flex-col">
                    <div>หน่วยการเรียนที่ 2</div>
                    <span>01/02/2022 - 01/08/2023</span>
                </div>
                <div class="w-1/3 bg-orange-400 flex items-center justify-center">
                    <span class="text-white font-medium text-lg">40</span>
                </div>
                
            </div>
        </td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">ไม่มีข้อมูลแสดง</td>
        <td class="h-12 px-1 text-sm transitions duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><a href="./score_create.php" class=" ml-auto flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#f2b118" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </a></td>
      </tr>
      <tr>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">20 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">20 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">40 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">20 คะแนน</th>
        <th scope="col" class="h-12 px-1 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-slate-100"></th>
      </tr>
      
    </tbody>
  </table>
<div class="py-4">
    <a href="./score_list.php" class="px-4 py-2  rounded-lg bg-blue-500 text-white">เสร็จสิ้น</a>
    <button class="px-4 py-2  rounded-lg bg-red-500 text-white">ลบทั้งหมด</button>
    <a href="./data_management.php" class="px-4 py-2  rounded-lg bg-blue-300 text-white">ย้อนกลับ</a>
</div>  
</div>

</div>
</div>
</div>