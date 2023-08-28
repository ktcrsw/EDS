<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

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


<section class="m-2 w-full flex justify-center mt-16 ">
     
<div>
    <span class="text-xl w-full flex justify-center items-center mb-2  font-medium">เปลี่ยนรูปประจำตัว</span>
<?php include '../../Backend/includes/editImage.php';?>
</div>

</section>