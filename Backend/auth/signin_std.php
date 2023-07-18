<?php 
    session_start();

    include("../../Frontend/assets/header.php");
    include("../db/connect.db.php");
    
    $users = "SELECT * FROM enrolltbl";
    $query = $db->query($users);

    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';

    if(empty($idcard)){
        echo "<script>Swal('กรุณากรอกข้อมูล')</script>";
        }

    $auth = "SELECT * FROM enrolltbl WHERE ref_studenttbl = '$idcard'";
    if($row = mysqli_fetch_array($query)){
        $_SESSION['ref_status'] = $row['ref_status'];
        if($_SESSION['ref_status'] == '0'){
            header("location: ../../Frontend/users/index.php");
        }
    }


?>
