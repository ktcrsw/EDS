<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";
?>
<div class="w-screen h-[1500px] bg-[#f1f4f9]">
   <div class="flex p-4">
      <div >
      <div class="flex flex-col items-center py-[26px] px-[98px] gap-5 w-[383px] h-[474px] bg-white rounded-[20px]">
         <div id="Profile" class="">
            <img src="/components/image/ariel.png" class="w-[162px] h-[162px] rounded-[50%]" alt="">
         </div>
         <div id="name" class="flex items-center flex-col w-[317px] h-[119px]">
            <span class="not-italic font-normal text-[28px] ">สายฝน ลำธาร</span>
            <span class="not-italic font-normal text-[24px] text-[#9a9a9a]">rainyeds@gmail.com</span>
         </div>
         <div class="flex flex-row justify-center items-center p-0 gap-[75px] ">

            <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
               <span class="not-italic font-bold text-[28px] text-[#0093fb]">1</span>
               <label class="font-medium text-[20px] text-[#0093fb]">กลุ่มที่ปรึกษา</label>
            </div>
            <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
               <span class="not-italic font-bold text-[28px] text-[#0093fb]">2</span>
               <label class="font-medium text-[20px] text-[#0093fb]">กลุ่มที่สอน</label>
            </div>

         </div>
      </div>
      <div class="flex flex-col items-start ">
         <span class="p-4 flex text-[817a7a] font-medium ">เช็คชื่อกิจกรรมหน้าเสาธง <p class="ml-1 mr-1 font-bold text-[0fb920]">1</p> จาก <p class="ml-1 font-bold text-[d31d1d]">1</p></span>
         <div class="flex flex-col items-start pt-[9px] pb-[9px] pr-[10px] pl-[10px] w-[383px] h-[144px] bg-white rounded-[20px] shadow-[0px 3px 15px rgba(0, 0, 0, 0.25)]">
            <div class="flex items-center">
               <img src="/components/image/correct.png" class="w-[39px] h-[39px]" alt="">
               <span class="font-normal text-[28px]">เช็คชื่อหน้าเสาธง</span>
               <svg xmlns="http://www.w3.org/2000/svg" class="justify-items-end" width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#817A7A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
            </div>
            <span class="pt-[10px] pb-[10px] pr-[10px] pl-[41px] font-normal text-[18px] text-[817A7A] ">ปวช.1/ชกว./2</span>
         </div>
      </div>
      </div>

      <div id="Notify" class="w-full h-[275px] rounded-[20px] ml-[10px] bg-[#0093fb]">
         <div class="flex flex-col items-center p-4 gap-[9px] w-[237px] h-[71px]">
            <div class="flex flex-row items-center p-0 gap-[17px]">
               <img src="/components/image/notify.svg" class="w-[18.12px] h-[19.49px]" alt="">
               <label for="" class="text-white text-[24px] font-bold">ประชาสัมพันธ์</label>
            </div>
            <div class="flex justify-center items-center gap-[13px]">
               <img src="/components/image/date.svg" class="w-[20.75px] h-[20.75px]" alt="">
               <label for="Date" class="text-white">05/06/23</label>
            </div>
         </div>
         <div class="flex flex-col  gap-[10px] py-[17px] px-[92px]  w-full h-[185px]">
            <label for="heading" class="text-white font-medium text-[24px]">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</label>
            <p class="text-white">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</p>
         </div>
      </div>
   </div>
</div>