<?php 

session_start();
include "../db/connect.db.php";
include "../../Frontend/assets/header.php";

$sql = "SELECT * FROM users WHERE u_id = '".$_POST['id']."'";
$result = $db->query($sql);
$date = date('d-m-Y');

$_FILES['upload']['name'];
$ext = explode(".", $_FILES['upload']['name']);
$filename = $_SESSION['UserID'].".png";

if(move_uploaded_file($_FILES['upload']['tmp_name'], "../admin/img/". "$filename")){
    echo "Successfully uploaded";
}
$data = "UPDATE users SET img = '".$filename."' WHERE u_id = '".$_POST['id']."'";
$query = $db->query($data);
header("Refresh:1.3; url=../../Frontend/teacher/index.php");
        include("../../Frontend/assets/header.php");
        echo "<script>setTimeout(function() {
        Swal.fire({
            icon: 'success',
            title: 'สำเร็จ',
            text: 'ระบบกำลังพาคุณไป' ,
            showCancelButton: false,
            showConfirmButton: false
        }, function() {
            window.location = '../../Frontend/teacher/index.php';
        });
         });</script>";



?>