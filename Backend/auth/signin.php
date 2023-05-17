<?php 
    session_start();
    error_reporting( error_reporting() & ~E_NOTICE );

    include("../../components/assets/header.php");
    include("../db/connect.db.php");
    
    $users = "SELECT * FROM users";
    $query = $db->query($users);

    $idcard = $_POST['idcard'];
    $password = $_POST['pwd'];


    $auth = "SELECT * FROM users WHERE id_card = '$idcard' AND pwd = '$password'";
    $query = $db->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['UserID'] = $row['u_id'];
        $_SESSION['IdCard'] = $row['id_card'];
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Email'] = $row['email'];
        $_SESSION['Password'] = $row['pwd'];
        $_SESSION['Firstname'] = $row['fname'];
        $_SESSION['Lastname'] = $row['lname'];
        $_SESSION['Permission'] = $row['permission'];
        if($_SESSION['Permission'] == 1){
            echo "Welcome back " . $row['username'];
            header("location: ../../components/index.php");
        }
    }

    if($idcard != $row['id_card']){

        echo "<script>Swal.fire({
            icon: 'error',
            title: 'ขออภัย',
            text: 'รหัสบัตรประชาชนหรือรหัสผ่านไม่ถูกต้อง'
          })
        </script>";
          
        header('refresh:2; url=../../components/users/login.php');


    }


?>