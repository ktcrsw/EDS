<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";



?>

<div class="w-full h-screen  ">
    
<div class="w-full overflow-x-auto p-4">
<div class="flex mb-4">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
<span class="text-[20px] font-medium">จัดการคะแนน</span>

</div>

<div class="flex items-center w-full gap-4 px-4 py-3 text-sm border rounded border-emerald-100 bg-emerald-50 text-emerald-500" role="alert">

  <p class="flex-1">ระบบทำการบันทึกข้อมูลแล้ว</p>

  <button aria-label="Close" class="inline-flex items-center justify-center h-8 gap-2 px-4 text-xs font-medium tracking-wide transition duration-300 rounded-full focus-visible:outline-none justify-self-center whitespace-nowrap text-emerald-500 hover:bg-emerald-100 hover:text-emerald-600 focus:bg-emerald-200 focus:text-emerald-700 disabled:cursor-not-allowed disabled:text-emerald-300 disabled:shadow-none disabled:hover:bg-transparent">
    <span class="relative only:-mx-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" role="graphics-symbol" aria-labelledby="title-11 desc-11">
        <title id="title-11">Icon title</title>
        <desc id="desc-11">
          A more detailed description of the icon
        </desc>
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </span>
  </button>
</div>
<!-- End Dismissible Success Alert -->
<div class="py-4">
  <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">จิตพิสัย 20%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">ภาคทฤษฏี 20%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">ภาคปฏิบัติ 40%</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">สอบปลายภาค 20%</th>
       
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50" a>
        <td class="h-12 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
            <div class="w-full h-12 flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold">จิตพิสัย</div>
                <a href="./score_greenEditList.php" class="w-1/3 bg-green-400 flex items-center justify-center duration-500 hover:bg-green-300">
                    <span class="text-white font-medium text-lg">20</span>
                </a>
                
            </div>
        </td>
        <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
        <div class="w-full   h-full flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold flex-col">
                    <div class="font-semibold">หน่วยการเรียนที่ 1</div>
                    <span>01/02/2022 - 01/08/2023</span>
                </div>
                <a href="./score_pinkEdit.php" class="w-1/3 bg-pink-500 flex items-center justify-center duration-500 hover:bg-pink-300">
                    <span class="text-white font-medium text-lg">20</span>
                </a>
                
            </div>
        </td>
        <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
        <div class="w-full   h-full flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold flex-col">
                    <div class="font-semibold">หน่วยการเรียนที่ 2</div>
                    <span>01/02/2022 - 01/08/2023</span>
                </div>
                <a href="./score_orangeEdit.php" class="w-1/3 bg-orange-400 flex items-center justify-center duration-500 hover:bg-orange-300">
                    <span class="text-white font-medium text-lg">40</span>
                </a>
                
            </div>
        </td>
        <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
        <div class="w-full   h-full flex bg-[#ffffe8]">
                <div class="w-full p-2 text-16 font-semibold flex-col">
                    <div class="font-semibold">สอบปลายภาค</div>
                    <span>01/02/2022 - 01/08/2023</span>
                </div>
                <a href="./score_blueAdd.php" class="w-1/3 bg-blue-400 flex items-center justify-center duration-500 hover:bg-blue-300">
                    <span class="text-white font-medium text-lg">20</span>
                </a>
                
            </div>
        </td>
     
      </tr>
      <tr>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">20 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">20 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">40 คะแนน</th>
        <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">20 คะแนน</th>
       
      </tr>
      
    </tbody>
  </table>
<div class="py-4">
    <a class="px-4 py-2  rounded-lg bg-blue-500 text-white">แก้ไขแผนการสอนและสัดส่วนคะแนน</a>
    <a class="px-4 py-2  rounded-lg bg-red-500 text-white">ลบทั้งหมด</a>
    <a href="./score_create.php" class="px-4 py-2  rounded-lg bg-blue-300 text-white">ย้อนกลับ</a>
</div> 
<table class="w-full text-left  border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr class="odd:bg-slate-50">
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">รหัสนักศึกษา</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">ชื่อ-นามสกุล</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">จิตพิสัย(20)</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">รวมทฤษฎี(20)</th>
        <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">รวมปฏิบัติ(40)</th>
        <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">สอบปลายภาค(20)</th>
        <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">คะแนนรวม(100)</th>
        <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">เกรด</th>
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50 odd:bg-slate-50" a>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">64209010033</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">นายบงกชเพชร ยอดกระโทก</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-green-400 ">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-pink-500">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-orange-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-blue-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">40</td>
        <td class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">0</td>
        
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50 odd:bg-slate-50" a>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">64209010033</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">นายบงกชเพชร ยอดกระโทก</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-green-400 ">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-pink-500">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-orange-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-blue-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">40</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">0</td>
        
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50 odd:bg-slate-50" a>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">64209010033</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">นายบงกชเพชร ยอดกระโทก</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-green-400 ">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-pink-500">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-orange-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-blue-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">40</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">0</td>
        
      </tr>
      <tr class="transition-colors duration-300 hover:bg-slate-50 odd:bg-slate-50" a>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">64209010033</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">นายบงกชเพชร ยอดกระโทก</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-green-400 ">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-pink-500">20</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-orange-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-white bg-blue-400">0</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">40</td>
        <td class="h-12 px-6 text-lg font-medium border-l border-t first:border-l-0 border-slate-200 text-center stroke-slate-700 text-black bg-[#ffffe8]">0</td>
        
      </tr>
     
      
    </tbody>
  </table> 
</div>

</div>
</div>