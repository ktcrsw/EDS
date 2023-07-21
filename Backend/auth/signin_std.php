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
        if($row = mysqli_fetch_array($query)){
            $_SESSION['no'] = $row['no'];
            $_SESSION['ref_studenttbl1'] = $row['ref_studenttbl'];
            $_SESSION['ref_stdfname1'] = $row['ref_stdfname'];
            $_SESSION['ref_stdlname1'] = $row['ref_stdlname'];
            $_SESSION['ref_sex1'] = $row['ref_sex'];
            $_SESSION['ref_stdGroups1'] = $row['ref_stdGroups'];
            $_SESSION['ref_years1'] = $row['ref_years'];
            $_SESSION['ref_department1'] = $row['ref_department'];
            $_SESSION['ref_status1'] = $row['ref_status'];
            $_SESSION['ref_stdImg1'] = $row['ref_stdImg'];
            if($_SESSION['ref_status1'] == 1){
                header("location: ../../Frontend/users/index.php");
            }
            
        }
    }


?>
