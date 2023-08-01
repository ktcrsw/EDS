<?php session_start(); 

   if($_SESSION['UserID'] == ''){
      header('location: ../login.php');
   }

?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php

include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM users";
$query = $db->query($sql);

$sql1 = "SELECT * FROM checkin";
$query1 = $db->query($sql1);


?>


<div class="w-screen h-full bg-[#f1f4f9] h-100 ">
   <div class="min-[1000px]:flex p-4">
      <!-- 
   /* -------------------------------------------------------------------------- */
   /*                                   โปรไฟล์                                  */
   /* -------------------------------------------------------------------------- */ -->
      <div class="">
         <div class="flex justify-center items-center">
            <div class="flex flex-col items-center py-[26px] px-[98px] gap-5 w-[383px] h-[474px] bg-white rounded-[20px]">
               <div class="avatar">
                  <div class="w-[162px] rounded-full ring ring-info ring-offset-base-100 ring-offset-2">
                     <img src="../../Backend/admin/img/<?php echo $_SESSION['Image']; ?>" class="w-[162px] h-[162px] rounded-[50%] dhs shadow-md" alt="">
                  </div>
               </div>
               <div id="name" class="flex items-center flex-col w-[317px] h-[119px]">
                  <span class="not-italic font-[500] text-[24px] "><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></span>
                  <span class="not-italic font-[400] text-[18px] text-[#9a9a9a]"><?php echo $_SESSION['Email']; ?></span>
                  <div class="dropdown ">
                     <label tabindex="0" class="btn m-1 border-primary-content bg-base-300 focus:bg-[#4c4f5c]" style="height: 1px;">ข้อมูล</label>
                     <div tabindex="0" class="dropdown-content card card-compact w-64  p-2 shadow bg-[#4c4f5c] text-primary-content">
                        <div class="card-body">
                           <h3 class="card-title"><?php echo $_SESSION['Firstname']. "&nbsp;" . $_SESSION['Lastname'];?></h3>
                           <p>วิทยาลัยเทคนิคอุดรธานี</p>
                           <p>เกิด <?php echo $_SESSION['BD'];?></p>
                           <p>รหัสประจำตัว <?php echo $_SESSION['IdCard'];?></p>
                           <p>เบอร์โทร <?php echo $_SESSION['Phone'];?></p>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="flex flex-row justify-center items-center p-0 gap-[75px] ">


                  <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
                     <span class="not-italic font-bold text-[28px] text-[#0093fb]">1</span>
                     <label class="font-medium text-[18px] text-[#0093fb]">กลุ่มที่ปรึกษา</label>

                  </div>
                  <div class="flex-col flex items-center p-0 gap-[12px] w-[107px] h-[79px]">
                     <span class="not-italic font-bold text-[28px] text-[#0093fb]">2</span>
                     <label class="font-medium text-[18px] text-[#0093fb]">กลุ่มที่สอน</label>
                  </div>

               </div>
            </div>
         </div>



         <div class="justify-center items-center">
            <span class="p-[10px] flex max-[1000px]:justify-center text-[#817A7A] font-[500]">เช็คกิจกรรมหน้าเสาธง<p class="mx-1 text-[#36d399] font-medium">1</p>จาก<p class="mx-1 text-[#D31D1D] font-medium">1</p></span>
            <div class="flex justify-center items-center flex-col ">
               <!-- 
            /* -------------------------------------------------------------------------- */
            /*                              เช็คชื่อหน้าเสาธง                             */
            /* -------------------------------------------------------------------------- */ -->
               <div class="w-[384px] h-[144px] px-[9px] py-[10px] bg-white duration-300 hover:text-[#0093fb] drop-shadow-xl rounded-[20px] ">
                  <div class="flex  items-center  h-[53px]">
                     <div class="flex items-center gap-[15px]">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.65625 16.5C0.65625 7.74937 7.74937 0.65625 16.5 0.65625C25.2506 0.65625 32.3438 7.74937 32.3438 16.5C32.3438 25.2506 25.2506 32.3438 16.5 32.3438C7.74937 32.3438 0.65625 25.2506 0.65625 16.5ZM22.3662 13.5522C22.4637 13.4223 22.5343 13.2742 22.5737 13.1167C22.6132 12.9591 22.6207 12.7952 22.5959 12.6347C22.5712 12.4742 22.5145 12.3202 22.4294 12.1819C22.3442 12.0436 22.2323 11.9236 22.1002 11.8292C21.968 11.7347 21.8183 11.6676 21.6599 11.6319C21.5014 11.5961 21.3374 11.5924 21.1775 11.6209C21.0176 11.6494 20.865 11.096 20.7287 11.7979C20.5924 11.8863 20.4751 12.0009 20.3838 12.1353L15.1253 19.4965L12.4862 16.8575C12.2552 16.6422 11.9496 16.525 11.6339 16.5306C11.3182 16.5362 11.0169 16.6641 10.7936 16.8874C10.503 17.1107 10.4424 17.4119 10.4368 17.7277C10.4313 18.0434 10.5485 18.349 10.7638 18.58L14.42 22.2362C14.5451 22.3613 14.6959 22.4575 14.862 22.5184C15.028 22.5793 15.2054 22.6033 15.3816 22.5888C15.5579 22.5742 15.7289 22.5215 15.8827 22.4343C16.0366 22.347 16.1696 22.2273 16.2725 22.0835L22.3662 13.5522Z" fill="#18BD14" />
                        </svg>
                        <span class=" text-[32px] ">เช็คชื่อหน้าเสาธง</span>
                     </div>
                     <svg class=" ml-11" width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.49 20.5725C28.7358 20.8186 28.8738 21.1522 28.8738 21.5C28.8738 21.8478 28.7358 22.1814 28.49 22.4275L15.365 35.5525C15.1162 35.7843 14.7871 35.9105 14.4471 35.9045C14.107 35.8985 13.7826 35.7608 13.5421 35.5203C13.3017 35.2798 13.1639 34.9554 13.1579 34.6154C13.1519 34.2754 13.2781 33.9463 13.51 33.6975L25.075 21.5L13.51 9.30248C13.2781 9.05367 13.1519 8.72459 13.1579 8.38456C13.1639 8.04453 13.3017 7.72011 13.5421 7.47964C13.7826 7.23916 14.107 7.10142 14.4471 7.09542C14.7871 7.08942 15.1162 7.21564 15.365 7.44748L28.49 20.5725Z" fill="#817A7A" />
                     </svg>
                  </div>
                  <div class="p-4">
                     <span class="text-[24px] text-[817a7a]">ปวช.1/ชกว./2</span>
                  </div>
               </div>
               </a>

            </div>
         </div>
      </div>
      <div class="w-full">

         <!-- /* -------------------------------------------------------------------------- */
         /*                                ประชาสัมพันธ์                               */
         /* -------------------------------------------------------------------------- */ -->

         <div id="Notify" class=" max-[1000px]:mt-4 h-[275 rounded-[20px] min-[1000px]:ml-[10px] bg-[#0093fb]">
            <div class="flex flex-col items-center p-4 gap-[9px] w-[237px] h-[71px]">
               <div class="flex flex-row items-center p-0 gap-[17px]">
                  <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M2.62522 7.50366C2.62522 5.71345 3.33638 3.99656 4.60225 2.73069C5.86812 1.46482 7.58501 0.753662 9.37522 0.753662C11.1654 0.753662 12.8823 1.46482 14.1482 2.73069C15.4141 3.99656 16.1252 5.71345 16.1252 7.50366V8.25366C16.1252 10.3767 16.9252 12.3107 18.2432 13.7737C18.3253 13.8647 18.3839 13.9744 18.4138 14.0932C18.4436 14.2121 18.4439 14.3364 18.4146 14.4554C18.3853 14.5744 18.3273 14.6845 18.2457 14.7758C18.164 14.8672 18.0612 14.9372 17.9462 14.9797C16.4022 15.5497 14.7862 15.9697 13.1152 16.2227C13.1528 16.7368 13.0841 17.2532 12.9131 17.7395C12.7422 18.2259 12.4729 18.6718 12.1219 19.0494C11.771 19.427 11.3459 19.7282 10.8733 19.9341C10.4007 20.1401 9.89073 20.2463 9.37522 20.2463C8.8597 20.2463 8.34972 20.1401 7.87713 19.9341C7.40454 19.7282 6.97948 19.427 6.62851 19.0494C6.27754 18.6718 6.00819 18.2259 5.83729 17.7395C5.66638 17.2532 5.59759 16.7368 5.63522 16.2227C3.98687 15.9729 2.36821 15.5561 0.804217 14.9787C0.689351 14.9363 0.586614 14.8664 0.504979 14.7751C0.423344 14.6839 0.365294 14.574 0.335898 14.4551C0.306503 14.3363 0.306657 14.212 0.336346 14.0932C0.366035 13.9744 0.424357 13.8647 0.506217 13.7737C1.87302 12.2603 2.6283 10.2929 2.62522 8.25366V7.50366ZM7.12722 16.4037C7.11442 16.069 7.1631 17.0095 7.203 17.2934C7.37751 17.5773 7.54103 17.8366 7.75104 18.0556C7.96105 18.2747 8.21319 18.449 8.49231 18.568C8.77143 18.6871 9.07176 18.7485 9.37522 18.7485C9.67868 18.7485 9.979 18.6871 10.2581 18.568C10.5372 18.449 10.7894 18.2747 10.9994 18.0556C11.2094 17.8366 11.3729 17.5773 11.4801 17.2934C11.5873 17.0095 11.636 16.069 11.6232 16.4037C10.1276 16.5384 8.62286 16.5384 7.12722 16.4037Z" fill="white" />
                  </svg>

                  <label for="" class="text-white text-[24px] font-bold">ประชาสัมพันธ์</label>
               </div>

            </div>
            <?php

            $getFiles = "SELECT * FROM files ORDER BY filesID DESC LIMIT 2";
            $queryFiles = $db->query($getFiles);
            while ($file = mysqli_fetch_assoc($queryFiles)):

            ?>
            <div class="mx-20 max-w-full">
               <div class="divide-y divide-gray-100">
                  <detail class="group  " open>
                     <div class=" items-center justify-between  text-lg font-medium text-secondary-900 ">
                        <span class="text-white font-medium text-[22px]">ประชาสัมพันธ์ เรื่อง <?php echo $file['fileName'];?> ภาคเรียน 1 ปีการศึกษา <?php echo $file['fileYears'];?> </span>
                        <div class=" flex items-center enter">
                           <svg width="20" height="20" class="ml-4 " viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25 0.125C5.48206 0.125 5.0462 0.217187 5.86872 0.381281C6.03281 0.545376 6.125 0.767936 6.125 1V2.75H16.625V1C16.625 0.767936 16.7172 0.545376 16.8813 0.381281C17.0454 0.217187 17.2679 0.125 17.5 0.125C17.7321 0.125 17.9546 0.217187 18.1187 0.381281C18.2828 0.545376 18.375 0.767936 18.375 1V2.75H19.25C20.1783 2.75 21.0685 3.11875 21.7249 3.77513C22.3813 4.4315 22.75 5.32174 22.75 6.25V19.375C22.75 20.3033 22.3813 21.1935 21.7249 21.8499C21.0685 22.5063 20.1783 22.875 19.25 22.875H3.5C2.57174 22.875 1.6815 22.5063 1.02513 21.8499C0.368749 21.1935 0 20.3033 0 19.375V6.25C0 5.32174 0.368749 4.4315 1.02513 3.77513C1.6815 3.11875 2.57174 2.75 3.5 2.75H4.375V1C4.375 0.767936 4.46719 0.545376 4.63128 0.381281C4.79538 0.217187 5.01794 0.125 5.25 0.125ZM21 10.625C21 10.1609 20.8156 9.71575 20.4874 9.38756C20.1592 9.05937 19.7141 8.875 19.25 8.875H3.5C3.03587 8.875 2.59075 9.05937 2.26256 9.38756C1.93437 9.71575 1.75 10.1609 1.75 10.625V19.375C1.75 19.8391 1.93437 20.2842 2.26256 20.6124C2.59075 20.9406 3.03587 21.125 3.5 21.125H19.25C19.7141 21.125 20.1592 20.9406 20.4874 20.6124C20.8156 20.2842 21 19.8391 21 19.375V10.625Z" fill="white" />
                           </svg>
                           <label for="Date" class="text-white text-sm ml-2 mr-2"><?php echo $file['fileDate'];?></label>
                        </div>
                     </div>
                     <div class=" ml-4 mt-4 text-white font-light"><?php echo $file['fileDescription'];?> </div>
                     <div class="pb-4 ml-4 mt-1 bg-slate- w-16 h-20 ">
                        <label for="" class="text-[15px]  justify-center flex text-gray-200 font-bold">ไฟล์แนบ</label>

                        <a href="../../Backend/files/<?php echo $file['filesLinks'];?>">
                           <div class="items-center flex justify-center">
                              <div class="bg-blue-400 w-14 h-10 items-center justify-center flex rounded-lg border border-blue-400 duration-300 hover:border-white ">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                 </svg>
                                 <span class="text-lg text-white ml-1">1</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </detail>
               </div>
            </div>
            <?php endwhile; ?>
         </div>
         


         <!-- 
         /* -------------------------------------------------------------------------- */
         /*                           Radial Progress ภาพรวม                           */
         /* -------------------------------------------------------------------------- */ -->
         <span class="p-[10px] flex text-[#817A7A] ml-[10px] font-[500]">ภาระงานวันนี้</span>
         <?php

         $row = mysqli_num_rows($query1);

         ?>

         <div class="flex navhover justify-center items-center">
            <div class="stats w-full ml-[10px] py-8 shadow">
               <div class="grid grid-cols-2 min-[1861px]:grid-cols-4 ">
                  <div class="stat">
                     <div class="stat-figure text-secondary">
                        <div class="radial-progress bg-base-200 text-info border-4 font-bold border-base-200" style="--size:6rem;  --value:0;">0%</div>
                     </div>
                     <div class="">
                        <div class=" flex justify-center text-[20px] max-[1861px]:text-[19px] max-[1175px]:text-[12px] text-gray-500 font-medium">กิจกรรมหน้าเสาธง</div>
                        <div class="flex justify-center text-[50px] text-success font-bold">0%</div>
                     </div>
                  </div>
                  <div class="stat">
                     <div class="stat-figure text-secondary">
                        <div class="radial-progress bg-base-200 text-info border-4 font-bold border-base-200" style="--size:6rem; --value:0;">0%</div>
                     </div>
                     <div class="flex justify-center text-[19px] max-[1861px]:text-[19px] max-[1175px]:text-[12px] text-gray-500 font-medium">เช็คกิจกรรมหน้าเสาธง</div>
                     <div class="flex justify-center text-[50px] text-success font-bold">0%</div>
                  </div>

                  <div class="stat">
                     <div class="stat-figure text-secondary">
                        <div class="radial-progress bg-base-200 text-info border-4 font-bold border-base-200" style="--size:6rem; --value:<?php echo $row; ?>;"><?php echo $row; ?>%</div>
                     </div>
                     <div class=" flex justify-center text-[20px] max-[1861px]:text-[19px] max-[1175px]:text-[12px] text-gray-500 font-medium">เช็คชื่อโฮมรูม</div>
                     <div class="flex justify-center text-[50px] text-error font-bold"><?php echo $row; ?>%</div>
                  </div>

                  <div class="stat">
                     <div class="stat-figure text-secondary">
                        <div class="radial-progress bg-base-200 text-info border-4 font-bold border-base-200" style="--size:6rem; --value:0;">0%</div>
                     </div>
                     <div class="flex justify-center text-[20px] max-[1861px]:text-[19px] max-[1175px]:text-[12px] text-gray-500 font-medium">บันทึกโฮมรูม</div>
                     <div class="flex justify-center text-[50px] text-error font-bold">0%</div>
                  </div>
               </div>
            </div>
         </div>



         <!-- /* -------------------------------------------------------------------------- */
            /*                               เช็คชื่อโฮมรูม                               */
            /* -------------------------------------------------------------------------- */ -->

         <div class="min-[1293px]:flex gap-2 ml-[10px]">
            <div class="max-[1293px]:w-full w-[50%] ">

               <span class="p-[10px] flex text-[#817A7A] ml-[10px] font-medium">เช็คชื่อโฮมรูม <p class="mx-1 text-[#36d399] font-bold">1</p>จาก<p class="mx-1 text-[red] font-bold">1</p>
                  <span class="flex ml-2 text-[#0093fb] font-medium">บันทึกโฮมรูม <p class="mx-1 text-[#36d399] font-bold">1</p>จาก <p class="mx-1 text-[red] font-bold">1</p></span>
               </span>
               <div class=" h-[220px] bg-white rounded-[20px]">
                  <div class="flex flex-col ml-3 gap-2 p-2 ">
                     <div>
                        <span class="text-[25px] font-medium">คาบโฮมรูม : คาบ 1 </span>
                     </div>
                     <span class="text-[16px]  tracking-wider text-[6b7280]">เทคโนโลยีสารสนเทศ ปวช.1/ชกว./2</span>
                  </div>
                  <div class="items-center justify-center flex">

                     <div class="stats shadow mt-2 ">
                        <a href="" class="hover:bg-[AEE2FF] duration-300  ">
                           <div class="stat ">
                              <div class="stat-figure text-seondary">
                                 <svg width="49" height="49" viewBox="0 0 49 49" class="inline-block w-8 h-8 " fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.5C0 10.9685 10.9685 0 24.5 0C38.0315 0 49 10.9685 49 24.5C49 38.0315 38.0315 49 24.5 49C10.9685 49 0 38.0315 0 24.5ZM33.5713 19.9417C33.722 19.7408 33.8311 19.5118 33.8921 19.2682C33.9531 19.0245 33.9648 18.7711 33.9265 18.5229C33.8881 18.2747 33.8006 18.0366 33.6689 17.8227C33.5373 17.6088 33.3642 17.4233 33.1598 17.2773C32.9555 17.1312 32.724 17.0275 32.479 16.9722C32.234 16.9168 31.9804 16.9111 31.7331 16.9552C31.4858 16.9993 31.2498 17.0923 31.0391 17.2289C30.8283 17.3655 30.6469 17.5429 30.5056 17.7506L22.3742 29.1336L18.2933 25.0528C17.9361 24.7199 17.4635 24.5387 16.9753 24.5473C16.4871 24.5559 16.0212 24.7537 15.6759 25.099C15.3306 25.4443 15.1328 25.9101 15.1242 26.3984C15.1156 26.8866 15.2968 27.3591 15.6297 27.7164L21.2836 33.303C21.4771 33.5636 21.7103 33.7125 21.967 33.8066C22.2238 33.9007 22.498 33.9378 22.706 33.9154C23.0431 33.8929 23.3076 33.8114 23.5455 33.6764C23.7833 33.5415 23.989 33.3564 24.1482 33.1341L33.5713 19.9417Z" fill="#18BD14" />
                                 </svg>
                              </div>
                              <div class="text-[20px] font-medium">เช็คชื่อโฮมรูม</div>
                              <div class="text-[14px] font-medium mt-4 text-[#36d399]">เช็คชื่อแล้ว </div>
                           </div>
                        </a>


                        <a href="" class="border-gray-300 hover:bg-[AEE2FF] ">
                           <div class="stat  ">
                              <div class="stat-figure text-secondary">
                                 <svg width="49" height="49" class="inline-block w-8 h-8 " fill="#FF0060" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 407.096 407.096" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                       <g>
                                          <g>
                                             <path d="M402.115,84.008L323.088,4.981C319.899,1.792,315.574,0,311.063,0H17.005C7.613,0,0,7.614,0,17.005v373.086 c0,9.392,7.613,17.005,17.005,17.005h373.086c9.392,0,17.005-7.613,17.005-17.005V96.032 C407.096,91.523,405.305,87.197,402.115,84.008z M300.664,163.567H67.129V38.862h233.535V163.567z"></path>
                                             <path d="M214.051,148.16h43.08c3.131,0,5.668-2.538,5.668-5.669V59.584c0-3.13-2.537-5.668-5.668-5.668h-43.08 c-3.131,0-5.668,2.538-5.668,5.668v82.907C208.383,145.622,210.92,148.16,214.051,148.16z"></path>
                                          </g>
                                       </g>
                                    </g>
                                 </svg>
                              </div>
                              <div class="text-[20px] font-medium">บันทึกโฮมรูม</div>
                              <div class="text-[14px] font-medium mt-4 text-[red]">ยังไม่บันทึก </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <span class="p-[10px] flex text-[#817A7A] ml-[10px] font-medium">เช็คชื่อเข้าเรียน แผนกเทคโนโลยีสารสนเทศ</span>

               <!-- /* -------------------------------------------------------------------------- */
/*                          เช็คชื่อเข้าเรียน ภาพรวม                          */
/* -------------------------------------------------------------------------- */ -->
               <?php
               function DateThai($strDate)
               {
                  $strYear = date("Y", strtotime($strDate)) + 543;
                  $strMonth = date("n", strtotime($strDate));
                  $strDay = date("j", strtotime($strDate));
                  $strHour = date("H", strtotime($strDate));
                  $strMinute = date("i", strtotime($strDate));
                  $strSeconds = date("s", strtotime($strDate));
                  $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
                  $strMonthThai = $strMonthCut[$strMonth];
                  return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
               }

               $strDate = date("Y-m-d H:i:s",);
               ?>
               <div class=" h-[280px] bg-white rounded-[20px]">
                  <div class="flex ml-3 gap-2 p-2 justify-center  ">
                     <div>
                        <span class="text-[25px] font-medium text-gray-500"><?php echo DateThai($strDate); ?></span>
                     </div>
                  </div>
                  <div class="flex justify-center items-center ">

                     <div class="stat-figure text-secondary flex flex-col justify-center items-center ">
                        <div class="stat-desc text-neutral pb-1 ">ดำเนินการ</div>
                        <div class="radial-progress bg-base-200 text-accent-focus border-4 font-bold border-base-200" style="--size:6rem; --value:0;">0%</div>
                     </div>
                  </div>
                  <div class="flex justify-center mt-7">
                     <div class="flex flex-row items-center gap-[50px] ">
                        <div class="flex flex-col items-ceter ">
                           <label for="" class="text-[20px] text-gray-500 font-medium">ทั้งหมด</label>
                           <span class="text-[18px]">
                              <label for="" class="text-[#0093fb] font-[500]">3</label>
                              <label class="text-[18px] text-gray-500">กลุ่ม</label>
                           </span>
                        </div>
                        <div class="flex flex-col items-ceter">
                           <label for="" class="text-[20px] text-gray-500 font-medium">เช็คชื่อแล้ว</label>
                           <div class="flex justify-center items-center gap-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#36d399" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="8.5" cy="7" r="4"></circle>
                                 <polyline points="17 11 19 13 23 9"></polyline>
                              </svg>
                              <span class="text-[18px]">
                                 <label for="" class="text-[#36d399] font-[500]">1</label>
                                 <label class="text-[18px] text-gray-500">กลุ่ม</label>
                              </span>
                           </div>
                        </div>
                        <div class="flex flex-col items-ceter">
                           <label for="" class="text-[20px] text-gray-500 font-medium">ยังไม่เช็ค</label>
                           <div class="flex justify-center items-center gap-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#e51111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="8.5" cy="7" r="4"></circle>
                                 <line x1="18" y1="8" x2="23" y2="13"></line>
                                 <line x1="23" y1="8" x2="18" y2="13"></line>
                              </svg>
                              <span class="text-[18px]">
                                 <label for="" class="text-[#e51111] font-[500]">2</label>
                                 <label class="text-[18px] text-gray-500">กลุ่ม</label>
                              </span>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>



            <!-- /* -------------------------------------------------------------------------- */
            /*                               เช็คชื่อรายวิชา                              */
            /* -------------------------------------------------------------------------- */ -->
            <div class=" w-[50%] max-[1293px]:w-full">
               <span class="p-[10px] flex text-[#817A7A] ml-[10px] font-[500]">เช็คชื่อเข้าเรียนรายวิชา <p class="mx-1 text-[#36d399] font-bold">1</p>จาก<p class="mx-1 text-[red] font-bold">2</p>
               </span>

               <!-- /* -------------------------------- วิชาที่ 1 ------------------------------- */ -->
               <?php
               $teacherID = $_SESSION['UserID'];
               $mySubject = "SELECT * FROM tbl_schedule WHERE schedule_teacherID = $teacherID";
               $queryMySubject = $db->query($mySubject);

               $getStudentTest = "SELECT * FROM enrollsubject WHERE u_id = '$teacherID'";
               $queryGetStd = $db->query($getStudentTest);
               // $total = "SELECT enrollsubject.ref_stdGroups AS groups, enrollsubject.ref_years AS year WHERE";
               $total = mysqli_num_rows($query);
               
               
               for($i = 1; $i <= 2; $i++){
               while ($subjectRows = mysqli_fetch_assoc($queryMySubject)){
               $number = 0;
               

               ?>
                  <div class=" bg-white rounded-[20px] mb-2">
                     <div class="flex  items-start ml-4  p-2 gap-3">
                        <div class="flex justify-center items-center w-[50px] h-[50px] bg-slate-500 rounded-[50%]">
                           <label class="text-white font-medium text-lg"><?php echo $i++; ?></label>
                        </div>
                        <div class="flex flex-col">
                           <span class="text-[20px] font-medium"><?php echo $subjectRows['schedule_title']; ?></span>
                           <div class="flex text-gray-400 text-[14px] ">
                              <label for="">รหัสวิชา</label>
                              <span class="ml-2">20001-000<?php echo $subjectRows['schedule_id']; ?></span>
                           </div>
                        </div>
                     </div>
                     <div class="flex items-center flex-row p-[10px] ml-[20px] gap-2 ">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M28.2799 21.1868C27.4316 23.1927 26.1049 24.9604 24.4157 26.3352C22.7265 27.71 20.7262 28.65 18.5898 29.0731C16.4534 29.4963 14.2458 29.3896 12.1601 28.7625C10.0744 28.1354 8.17405 27.0069 6.62525 25.4756C5.07644 23.9444 3.92631 22.0571 3.2754 19.9787C2.62449 17.9003 2.49264 15.6941 2.89135 13.5529C3.29007 11.4118 4.20721 9.40094 5.56261 7.69614C6.91801 5.99135 8.604 4.64453 10.6666 3.77344" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M29.3333 15.9998C29.3333 14.2489 28.9885 12.5151 28.3184 10.8974C27.6483 9.27972 26.6662 7.80986 25.4281 6.57175C24.19 5.33363 22.7201 4.35151 21.1024 3.68144C19.4848 3.01138 17.751 2.6665 16 2.6665V15.9998H29.3333Z" stroke="#5D5D5D" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="text-[18px] font-medium">คาบเรียนที่ <label class="font-[500]">
                        <?php 
                        
                  
                         if($subjectRows['schedule_starttime'] == '08:30:00'){
                              echo "1";
                         }else if($subjectRows['schedule_starttime'] == '09:30:00'){
                              echo "2";
                         }else if($subjectRows['schedule_starttime'] == '10:30:00'){
                              echo "3";
                         }else if($subjectRows['schedule_starttime'] == '11:30:00'){
                              echo "4";
                         }else if($subjectRows['schedule_starttime'] == '12:30:00'){
                              echo "5";
                         }else if($subjectRows['schedule_starttime'] == '13:30:00'){
                              echo "6";
                         }else if($subjectRows['schedule_starttime'] == '14:30:00'){
                              echo "7";
                         }else if($subjectRows['schedule_starttime'] == '15:30:00'){
                              echo "8";
                         }else if($subjectRows['schedule_starttime'] == '16:30:00'){
                              echo "9";
                         }else if($subjectRows['schedule_starttime'] == '17:30:00'){
                              echo "10";
                         }
                        
                        
                        ?>
                        </label></span>

                        <div class="flex flex-row items-start ml-4 text-[18px]  gap-1">
                           <label class="font-[500]">สถานะ :</label>
                           <span class="font-[500] text-[#ff0000]">ยังไม่เช็คชื่อ</span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#e51111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                              <circle cx="8.5" cy="7" r="4"></circle>
                              <line x1="18" y1="8" x2="23" y2="13"></line>
                              <line x1="23" y1="8" x2="18" y2="13"></line>
                           </svg>
                           <!-- <span class="font-[500] text-[#36D399]">เช็คชื่อแล้ว</span> -->
                           <!-- <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M28 1L9.4375 19L1 10.8182" stroke="#36D399" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg> -->

                        </div>
                     </div>

                     <div class="ml-6 p-2">
                        <div class="flex flex-col items-start pb-8">
                           <div class="flex flex-col">
                              <label for="" class="text-[20px] font-[500]">ปวช.<?php echo $subjectRows['schedule_classYears'] . "/" . $subjectRows['schedule_classGroup']; ?> เทคโนโลยีสารสนเทศ (ปกติ)</label>
                              <label for="" class="text-[14px] font-[500] text-gray-500">จำนวนทั้งหมด <?php echo $total; ?> คน</label>
                           </div>
                        </div>
                        <div class="flex justify-center items-center pb-2 ">
                           <a href="data_management.php"><button class="btn btn-info text-base-100" >ดำเนินการเช็คชื่อ</button></a>
                        </div>
                     </div>
                  </div>
               <?php } 
               }?>
            </div>
         </div>
         <div class="flex justify-center items-center mt-10">
         </div>
      </div>
   </div>