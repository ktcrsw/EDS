<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../components/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);



    isset($_REQUEST['username']) ? $username = $_REQUEST['username'] : $username = '';
    isset($_REQUEST['fname']) ? $fname = $_REQUEST['fname'] : $fname = '';
    isset($_REQUEST['lname']) ? $lname = $_REQUEST['lname'] : $lname = '';

    $_FILES['upload']['tmp_name'];
    $targetDir = "./img/";

    isset($_FILES['upload']) && isset($_FILES['upload']['name']);
    $ext = explode(".",$_FILES['upload']['name']);
    $filename = $_SESSION['Username'].".".$ext[1]."png";


    if(move_uploaded_file($_FILES['upload']['tmp_name'], $targetDir . $filename)){
        echo "";
    }
    

    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, permission, img) VALUES ('', '', '$username', '', '', '$fname', '$lname', '1', '$filename')";
    $query = $db->query($data);

    if(mysqli_affected_rows($db)){
        echo "<script>Swal.fire(
            'สำเร็จ',
            'เพิ่มข้อมูลสำเร็จ',
          )
        </script>";
        header('refresh:2; admin.php');
        
    } else {
        echo "Error";
    }


?>