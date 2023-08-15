<?php 

    session_start();

    include '../db/connect.db.php';

    $user = $_POST['uid'];

    $_FILES['upload']['name'];
    $ext = explode(".", $_FILES['upload']['name']);
    $filename = $username.".".$ext[1];

    if(move_uploaded_file($_FILES['upload']['tmp_name'], "../admin/img/". "$filename")){
        echo "Successfully uploaded";
    }


    $updateUser = "UPDATE users SET img = '$filename' WHERE u_id = '$user'";
    $queryUpdate = $db->query($updateUser);


    // header('location: ../../Frontend/teacher/index.php');

?>