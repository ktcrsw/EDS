<?php 
    include "../db/connect.db.php";
    include "../../components/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['username']) ? $username = $_REQUEST['username'] : $username = '';
    isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = '';



    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, permission) VALUES ('', '$idcard', '$username', '', '$password', '', '', '1')";
    $query = $db->query($data);

    if(mysqli_affected_rows($db)){
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'สำเร็จ',
            text: 'เพิ่มข้อมูลสำเร็จ'
          })
        </script>";
        
    } else {
        echo "Error";
    }
    header('location:admin.php');


?>