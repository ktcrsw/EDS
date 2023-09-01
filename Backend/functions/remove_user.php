<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM enrolltbl";
    $result = $db->query($schdule);


    $user_id = $_POST['user_id'];

    echo $user_id;

    $add = "DELETE FROM users WHERE u_id = '$user_id'";
    $addSuccess = $db->query($add);

    header('location: ../admin/admin_datamanagement.php');
?>