<?php 

    

    session_start();
    include "../db/connect.db.php";
    include "../../components/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['username']) ? $username = $_REQUEST['username'] : $username = '';
    isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = '';
    isset($_REQUEST['upload']) ? $filename = $_REQUEST['upload'] : $_FILES['upload']['name'];
     
    if(move_uploaded_file($_FILES['upload']['tmp_name'], "./img/".$_FILES['upload']['name'])){
        echo "Complete";
    }


    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, permission, img) VALUES ('', '$idcard', '$username', '', '$password', '', '', '1', '$filename')";
    $query = $db->query($data);

    if(mysqli_affected_rows($db)){
        echo "<script>Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
          )
        </script>";
        header('location: admin.php');
        
    } else {
        echo "Error";
    }

    session_destroy();

?>