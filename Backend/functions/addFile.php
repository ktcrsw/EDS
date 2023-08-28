<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../Frontend/assets/header.php";

    $sql = "SELECT * FROM files";
    $result = $db->query($sql);
    $date = date('d-m-Y');
    
    $_FILES['upload']['name'];
    $ext = explode(".", $_FILES['upload']['name']);
    $filename = $_POST['filename'].".".$ext[1];

    // echo $filename;

    if(move_uploaded_file($_FILES['upload']['tmp_name'], "../files/". "$filename")){
        $data = "INSERT INTO files(filesID, fileName, fileDescription, fileYears, fileStatus, fileDate, filesLinks) VALUES 
        ('', '".$_POST['filename']."', '".$_POST['about']."', '".$_POST['years']."', 1, '$date', '".$filename."')";
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
                 }


   
    header("Refresh:1.3; url=../admin/admin_datamanagement.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'ระบบกำลังพาคุณไป' ,
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../admin/admin_datamanagement.php';
            });
             });</script>";
?>