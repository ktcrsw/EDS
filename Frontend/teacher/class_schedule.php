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

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>


<section class="m-2">
     

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">จัดตารางเรียน</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="listClass" data-tabs-target="#listClass" type="button" role="tab" aria-controls="listClass" aria-selected="false">ดูตารางเรียนทั้งหมด</button>
        </li>

    </ul>
</div>
<div id="myTabContent">
    <div class="hidden p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php include './dataClassSchedule.php'; ?>
    </div>
</div>
<div id="myTabContent">
    <div class="hidden p-4" id="listClass" role="tabpanel" aria-labelledby="profile-tab">
        <?php include './listClassSchedule.php'; ?>
    </div>
</div>


</section>