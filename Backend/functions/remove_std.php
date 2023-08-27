<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM enrolltbl";
    $result = $db->query($schdule);


    $stdid = $_POST['stdid'];

    echo $stdid;

    $add = "DELETE FROM enrolltbl WHERE ref_studenttbl = '$stdid'";
    $addSuccess = $db->query($add);

    header('location: ../admin/admin.php');
?>