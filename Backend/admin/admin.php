<?php session_start(); ?>
<?php include "../../components/assets/header.php"; ?>
<?php include "../../components/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$sql = "SELECT * FROM users";
$result = $db->query($sql);




?>





<div class="overflow-x-auto m-3">
    <a href=""><button class="btn btn-primary">เพิ่มข้อมูลครู</button></a>
    
</div>
