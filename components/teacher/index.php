<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php

   include "../../Backend/db/connect.db.php";
   include "../assets/header.php";
   include "../assets/teacher_nav.php";


$sql = "SELECT * FROM users";
$query = $db->query($sql);


?>
<div class="w-screen h-screen bg-[#f1f4f9] h-100">
   <div class="flex p-4">
      <div class="">
         <div class="flex flex-col items-center py-[26px] px-[98px] gap-5 w-[383px] h-[474px] bg-white rounded-[20px]">
            <div id="Profile" class="">
               <img src="../../Backend/admin/img/<?php echo $_SESSION['Image']; ?>" class="w-[162px] h-[162px] rounded-[50%]" alt="">
            </div>
            <div id="name" class="flex items-center flex-col w-[317px] h-[119px]">
               <span class="not-italic font-normal text-[28px] "><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></span>
               <span class="not-italic font-normal text-[24px] text-[#9a9a9a]"><?php echo $_SESSION['Email']; ?></span>
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
         <span class="p-[10px] flex text-[#817A7A] font-normal">เช็คกิจกรรมหน้าเสาธง<p class="mx-1 text-[#0FB920]">1</p>จาก<p class="mx-1 text-[#D31D1D]">1</p></span>
         <span class="p-[10px] flex text-[#817A7A] font-normal">กิจกรรมหน้าเสาธง</span>



         <div class="flex flex-col ">

            <!-- เช็คชื่อหน้าเสาธง -->

            <a href="">
               <!-- Pregress Circle -->
               <div class="radial-progress text-success" style="--value:<?php 
            
            $num = mysqli_num_rows($query);
            
            echo $num;
            
            ?>; --size:4rem; --color: #fff;"><?php 
            
            $num = mysqli_num_rows($query);
            
            echo $num;
            
            ?></div>
            test
               <div class="w-[384px] h-[144px] px-[9px] py-[10px] bg-white duration-300 hover:text-[#0093fb] drop-shadow-xl rounded-[20px] ">
                  <div class="flex  items-center  h-[53px]">
                     <div class="flex items-center gap-[15px]">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.65625 16.5C0.65625 7.74937 7.74937 0.65625 16.5 0.65625C25.2506 0.65625 32.3438 7.74937 32.3438 16.5C32.3438 25.2506 25.2506 32.3438 16.5 32.3438C7.74937 32.3438 0.65625 25.2506 0.65625 16.5ZM22.3662 13.5522C22.4637 13.4223 22.5343 13.2742 22.5737 13.1167C22.6132 12.9591 22.6207 12.7952 22.5959 12.6347C22.5712 12.4742 22.5145 12.3202 22.4294 12.1819C22.3442 12.0436 22.2323 11.9236 22.1002 11.8292C21.968 11.7347 21.8183 11.6676 21.6599 11.6319C21.5014 11.5961 21.3374 11.5924 21.1775 11.6209C21.0176 11.6494 20.865 11.7096 20.7287 11.7979C20.5924 11.8863 20.4751 12.0009 20.3838 12.1353L15.1253 19.4965L12.4862 16.8575C12.2552 16.6422 11.9496 16.525 11.6339 16.5306C11.3182 16.5362 11.0169 16.6641 10.7936 16.8874C10.5703 17.1107 10.4424 17.4119 10.4368 17.7277C10.4313 18.0434 10.5485 18.349 10.7638 18.58L14.42 22.2362C14.5451 22.3613 14.6959 22.4575 14.862 22.5184C15.028 22.5793 15.2054 22.6033 15.3816 22.5888C15.5579 22.5742 15.7289 22.5215 15.8827 22.4343C16.0366 22.347 16.1696 22.2273 16.2725 22.0835L22.3662 13.5522Z" fill="#18BD14" />
                        </svg>
                        <span class=" text-[32px] ">เช็คชื่อหน้าเสาธง</span>
                     </div>
                     <svg class=" ml-11" width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.49 20.5725C28.7358 20.8186 28.8738 21.1522 28.8738 21.5C28.8738 21.8478 28.7358 22.1814 28.49 22.4275L15.365 35.5525C15.1162 35.7843 14.7871 35.9105 14.4471 35.9045C14.107 35.8985 13.7826 35.7608 13.5421 35.5203C13.3017 35.2798 13.1639 34.9554 13.1579 34.6154C13.1519 34.2754 13.2781 33.9463 13.51 33.6975L25.7075 21.5L13.51 9.30248C13.2781 9.05367 13.1519 8.72459 13.1579 8.38456C13.1639 8.04453 13.3017 7.72011 13.5421 7.47964C13.7826 7.23916 14.107 7.10142 14.4471 7.09542C14.7871 7.08942 15.1162 7.21564 15.365 7.44748L28.49 20.5725Z" fill="#817A7A" />
                     </svg>
                  </div>
                  <div class="p-4">
                     <span class="text-[24px] text-[817a7a]">ปวช.1/ชกว./2</span>
                  </div>
               </div>
            </a>

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
               <label for="Date" class="text-white"><?php echo "" . date("Y/m/d"); ?></label>
            </div>
         </div>
         <div class="flex flex-col  gap-[10px] py-[17px] px-[92px]  w-full h-[185px]">
            <label for="heading" class="text-white font-medium text-[24px]">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</label>
            <p class="text-white">คู่มือกำหนดคาบโฮมรูมและกิจกรรมอื่น</p>
            
         </div>
      </div>
   </div>
</div>
