<?php include "header.php"; ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<nav class=" top-0 z-50 w-full bg-dark border-dark border-gray-200 dark:bg-gray-800 dark:border-gray-700 ">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
         <div class="flex items-center justify-start">
            <a href="index.php" class="flex ml-2 md:mr-24">
               <img src="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png" class="h-10 mr-3 mb-2" alt="EDS Logo" />
               <span class="self-center text-m font-semibold max-[500px]:text-[13px] sm:text-m whitespace-nowrap dark:text-white">แผนกเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคอุดรธานี</span>
            </a>
         </div>

         <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
            <span class="sr-only">Open user menu</span>
            <div class="avatar">
               <div class="w-8 h-8 rounded-full">
                  <img id="image" onclick="show()" src="../../Backend/admin/img/<?php echo $_SESSION['Image']; ?>" alt="user photo">
               </div>
            </div>
            <p class="text-white ml-2 text-[16px] max-[750px]:hidden"><b><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></b></p>
            <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
         </button>

         <!-- Dropdown menu -->
         <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
               <div class="font-medium min-[750px]:hidden "><p><b><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></b></p></div>
               <div class="font-medium "><?php echo $_SESSION['Firstname'] . "&nbsp;" . $_SESSION['Lastname']; ?></div>
               <div class="truncate"><?php echo $_SESSION['Email']?></div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
             
               <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-500">เปลี่ยนรูปประจำตัว</a>
               </li>
             
            </ul>
            <div class="py-2">
               <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-gray-700">ออกจากระบบ</a>
            </div>
         </div>


         <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
            <a name="" id="" class="m-5 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="../../Backend/auth/signout.php" role="button">logout</a>

         </div>
      </div>
   </div>
   </div>
</nav>


<div class="flex">
   <aside id="logo-sidebar" class=" max-[620px]:hidden top-0 left-0 z-40 pt-2 transition-transform -translate-x-full bg-dark border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-screen px-3 pb-4 overflow-y-auto  bg-dark duration-500 overflow-hidden w-14 hover:w-64 dark:bg-gray-800">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="../teacher/index.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg fill="none" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" stroke="#ffb200   " stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">หน้าแรก</span>
               </a>
            </li>
            <li>
               <a href="../teacher/service_information.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#d73ade" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">บริการข้อมูลทั่วไป</span>
               </a>
            </li>
            <li>
               <a href="data_management.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-900 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#5DF5FF" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                     <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                     <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">ครูที่ปรึกษา</span>
               </a>

            </li>
            <li>
               <a href="class_schedule.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#43d47b" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                     <rect x="3" y="3" width="18" height="18" rx="2" />
                     <path d="M21 12H3M12 3v18" />
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">จัดการตารางเรียน</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#e6e629" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                     <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                     <line x1="4" y1="22" x2="4" y2="15"></line>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">กิจกรรมหน้าเสาธง</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                     <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">งานบุคลากร</span>
               </a>
            </li>
            <li>
               <a href="../teacher/check_in.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#2169c3" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                     <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                     <line x1="16" y1="2" x2="16" y2="6"></line>
                     <line x1="8" y1="2" x2="8" y2="6"></line>
                     <line x1="3" y1="10" x2="21" y2="10"></line>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">งานกิจกรรม</span>
               </a>
            </li>
            <hr>
            <li>
               <a href="../../Backend/auth/signout.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                  <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900" viewBox="0 0 24 24" fill="none" stroke="#c40303" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                     <path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9" />
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap text-blue-200">ออกจากระบบ</span>
               </a>
            </li>
         </ul>
      </div>

   </aside>
   <script>
      function myFunction() {
         var element = document.body;
         element.classList.toggle("dark-mode");
      }
   </script>