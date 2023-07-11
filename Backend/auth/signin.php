<?php 
    session_start();

    include("../../Frontend/assets/header.php");
    include("../db/connect.db.php");
    
    $users = "SELECT * FROM users";
    $query = $db->query($users);

    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['pwd']) ? $password = $_REQUEST['pwd'] : $password = '';

    if(empty($idcard)){
        echo "<script>Swal('กรุณากรอกข้อมูล')</script>";
        }

    $auth = "SELECT * FROM users WHERE username = '$idcard' AND pwd = '$password'";
    $query = $db->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['UserID'] = $row['u_id'];
        $_SESSION['IdCard'] = $row['id_card'];
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Email'] = $row['email'];
        $_SESSION['Password'] = $row['pwd'];
        $_SESSION['Firstname'] = $row['fname'];
        $_SESSION['Lastname'] = $row['lname'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['Phone'] = $row['phone'];
        $_SESSION['BD'] = $row['birthday'];
        $_SESSION['Lastname'] = $row['lname'];
        $_SESSION['Permission'] = $row['permission'];
        $_SESSION['main_groups'] = $row['main_groups'];
        $_SESSION['groups'] = $row['groups'];
        $_SESSION['Image'] = $row['img'];
        if($_SESSION['Permission'] == 0){
            echo "Welcome back " . $row['username'];
            header("location: ../../Frontend/users/index.php");
        }
        
        if($_SESSION['Permission'] == 1){
            header("location: ../../Frontend/teacher/index.php");
        }
        
        if($_SESSION['Permission'] == 2){
            header("location: ../admin/admin.php");
        }
        
    }


?>
