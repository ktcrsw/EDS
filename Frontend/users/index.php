<?php session_start();?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
      include "../assets/header.php";
      include "../assets/user_nav.php";

      $sql = "SELECT * FROM enrolltbl";
      $query = $db->query($sql);

?>
<div class="w-screen h-screen bg-[#f1f4f9]">
      <div class="flex p-4">
         <div class="flex flex-col items-center py-[26px] px-[98px] gap-5 w-[383px] h-[474px] bg-white rounded-[20px]">
            <div id="Profile" class="">
            <img src="../image/<?php echo $_SESSION['ref_stdImg1']; ?>" class="w-[162px] h-[162px] rounded-[50%]" alt="">
           </div>
           <div id="name" class="flex items-center flex-col w-[317px] h-[119px]">
                  <span class="not-italic font-normal text-[28px] "><?php echo $_SESSION['ref_stdfname1'] . "&nbsp;" . $_SESSION['ref_stdlname1']; ?></span>
           </div>
           <div class="flex flex-row justify-center items-center p-0 gap-[75px] ">
     
        <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
           <span class="not-italic font-bold text-[28px] text-[#0093fb]">4.00</span>
           <label class="font-medium text-[20px] text-[#0093fb]">ผลการเรียน</label>
       </div>
        <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
           <span class="not-italic font-bold text-[28px] text-[#0093fb]">100</span>
           <label class="font-medium text-[20px] text-[#0093fb]">คะแนน<br>จิตพิสัย</label>
       </div>
     
    </div>
       </div>
      <div id="Notify" class="w-full h-[275px] rounded-[20px] ml-[10px] bg-[#0093fb]">
          <div class="flex flex-col items-center p-4 gap-[9px] w-[237px] h-[71px]">
             <div class="flex flex-row items-center p-0 gap-[17px]">
                  <img src="/components/image/notify.svg" class="w-[18.12px] h-[19.49px]" alt="">
                  <label for=""class="text-white text-[24px] font-bold">ประชาสัมพันธ์</label>
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