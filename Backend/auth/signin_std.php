<?php 
    session_start();

    include("../../components/assets/header.php");
    include("../db/connect.db.php");
    
    $users = "SELECT * FROM enrolltbl";
    $query = $db->query($users);

    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['pwd']) ? $password = $_REQUEST['pwd'] : $password = '';

    if(empty($idcard)){
        echo "<script>Swal('กรุณากรอกข้อมูล')</script>";
        }

    $auth = "SELECT * FROM enrolltbl WHERE ref_idCard = '$idcard' AND ref_birthDay = '$password'";
    $query = $db->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['ref_approval'] = $row['ref_approval'];
        if($_SESSION['ref_approval'] == 'approve'){
            header("location: ../../components/users/index.php");
        }
    }


?>
