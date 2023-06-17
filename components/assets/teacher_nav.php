<?php include "header.php"; ?>

<nav class=" top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 ">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start">
            <a href="index.php" class="flex ml-2 md:mr-24">
               <img src="https://cdn.discordapp.com/attachments/1056204540694757386/1109853688849236018/EDS_2.png" class="h-10 mr-3 mb-2" alt="EDS Logo" />
               <span class="self-center text-m font-semibold sm:text-m whitespace-nowrap dark:text-white">แผนกเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคอุดรธานี</span>
            </a>
         </div>
         <div class="flex items-center">
            <p class="dark:text-white"><b><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></b></p>
            <div class="flex items-center ml-3">
               <div>
                  <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                     <img class="w-8 h-8 rounded-full" id="image" onclick="show()" src="../../Backend/admin/img/<?php echo $_SESSION['Image']; ?>" alt="user photo">
                  </button>
               </div>
               <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                  <a name="" id="" class="m-5 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="../../Backend/auth/signout.php" role="button">logout</a>

               </div>
            </div>
         </div>
      </div>
</nav>


<div class="flex">
   <aside id="logo-sidebar" class=" top-0 left-0 z-40 h- pt-2 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-[1500px] px-3 pb-4 overflow-y-auto bg-white duration-500 overflow-hidden w-14 hover:w-64 dark:bg-gray-800">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="../teacher/index.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg fill="none" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" stroke="#ffb200   " stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">หน้าแรก</span>
                  <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
               </a>
            </li>
            <li>
            <a href="data_management.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#1da9cf" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M21.5 12H12V2.5"/><circle cx="12" cy="12" r="10"/></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">จัดการข้อมูลทั่วไป</span>
               <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
            </a>

            </li>
            <li>
               <a href="class_schedule.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#43d47b" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M21 12H3M12 3v18"/></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">จัดการตารางเรียน</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg"  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#e6e629" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">กิจกรรมหน้าเสาธง</span>
                  <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                     <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">งานบุคลากร</span>
                  <!-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> -->
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#edf2f0" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">ครูที่ปรึกษา</span>
               </a>
            </li>
            <li>
               <a href="../teacher/check_in.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#2169c3" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">งานกิจกรรม</span>
               </a>
            </li>
            <hr>
            <li>
               <a href="../../Backend/auth/signout.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg"  class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#c40303" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">ออกจากระบบ</span>
               </a>
            </li>
         </ul>
      </div>
      
   </aside>
   