<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";

?>

<section class="m-2 w-full">


    <div class="  mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class=" flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ค้นหาข้อมูลนักศึกษา</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">สรุปจำนวนนักศึกษา</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2  rounded-t-lg" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">แผนการเรียนปัจจุบัน</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2  rounded-t-lg" id="tables-tab" data-tabs-target="#tables" type="button" role="tab" aria-controls="tables" aria-selected="false">ตารางเรียน/ตารางสอน</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 border-b-2  rounded-t-lg" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">พิมพ์รายงานเอกสาร</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p- " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?php include './search_stu.php'; ?>
        </div>
        <div class="hidden p-4 " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <?php include './all_stu.php'; ?>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">
            <div class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span style="color:#fff;">ระบบยังไม่เสร็จ โปรดติดต่อทีมพัฒนา</span>
            </div>
            </p>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="tables" role="tabpanel" aria-labelledby="tables-tab">
        <?php include './listClassSchedule.php'; ?>

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <?php include './fileDownloads.php'; ?>
        </div>
    </div>


</section>