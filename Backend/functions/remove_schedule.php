<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM tbl_schedule";
    $result = $db->query($schdule);


    isset($_REQUEST['classID']) ? $classID = $_REQUEST['classID'] : $classID = '';


    echo $classID;

    $add = "DELETE FROM tbl_schedule WHERE schedule_id = '$classID'";
    $addSuccess = $db->query($add);

    header('location: ../../Frontend/teacher/data_management.php');
?>