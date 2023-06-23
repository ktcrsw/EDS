<?php session_start(); ?>
<?php include "../../components/assets/header.php"; ?>
<?php include "../../components/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$sql = "SELECT * FROM users";
$result = $db->query($sql);




?>
<section class="m-2">
     
     <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
         <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
             <li class="mr-2" role="presentation">
                 <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">เพิ่มข้อมูลผู้ใช้</button>
             </li>
             <li class="mr-2" role="presentation">
                 <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">เช็คชื่อนักศึกษาเข้าร่วมกิจกรรมหน้าเสาธง</button>
             </li>
             <li class="mr-2" role="presentation">
                 <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">เช็คชื่อนักศึกษาเข้าเรียนรายวิชา</button>
             </li>
             <li class="mr-2" role="presentation">
                 <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">พิมพ์รายงานเอกสาร</button>
             </li>
         </ul>
     </div>
     <div id="myTabContent">
         <div class="hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
             <div>
             <div class="px-4 md:px-10 ">
                 <div class="flex items-center justify-between">
                     <div class="">
     
                     </div>
                 </div>
                 <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">เพิ่มข้อมูลผู้ใช้</p>
     
                 <div class="sm:px-6 w-full">

<div class="px-4 md:px-10 ">
      <div class="flex items-center justify-between">
      </div>
</div>

<div class="bg-white py-4  px-4 md:px-8 xl:px-10">
      <form action="add_user.php" method="post">
      <input type="file" class="file-input file-input-bordered file-input-info w-full max-w-xs" name="upload" />
            <label for="Username" class="block mb-2 text-md font-medium text-gray-900 dark:text-dark mt-2">ชื่อผู้ใช้</label>
            <input required name="username" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="ตัวอย่าง EDS-000">


            <label for="Firstname" class="block mt-2 text-md font-medium text-gray-900 dark:text-dark">ชื่อจริง</label>
            <input required name="fname" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="ชื่อจริง">
            
            <label for="Firstname" class="block mt-2 text-md font-medium text-gray-900 dark:text-dark">นามสกุล</label>
            <input required name="lname" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="นามสกุล">

            <input type="submit" class="btn btn-primary mt-2" value="เพิ่มข้อมูล">
      </form>

      <div class="sm:flex items-center justify-between">
            <div class="flex items-center">

      </div>
</div>
             </div>
             
             
             </div>
     
     
             
         </div>
     
     
     
     
     
     
         <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
         </div>
         <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
         </div>
         <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
         </div>
     </div>
     
     </section>