<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php session_start(); ?>
<?php include "../assets/header.php"; ?>
<?php include "../assets/teacher_nav.php"; ?>
<?php include '../../Backend/db/connect.db.php';



$sql = "SELECT * from form_budget_approval ";
$query = $db->query($sql);




?>

<section class="m-2 w-full">
    <div class="flex justify-center px-24 items-center mt-3">

        <div class="w-full overflow-x-auto">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            <div class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span style="color:#fff;">ระบบยังไม่เสร็จ โปรดติดต่อทีมพัฒนา</span>
            </div>
            </p>
        </div>
    </div>


</section>