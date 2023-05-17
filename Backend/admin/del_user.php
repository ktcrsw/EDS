<?php include "../db/connect.db.php";

    include "../../components/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = '';



    $data = "DELETE FROM users WHERE u_id = $id";
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