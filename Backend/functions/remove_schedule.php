<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM classschedule";
    $result = $db->query($schdule);


    isset($_REQUEST['checkid']) ? $checkid = $_REQUEST['checkid'] : $checkid = '';


    echo $checkid;

    $add = "DELETE FROM classschedule WHERE classScheduled = '$checkid'";
    $addSuccess = $db->query($add);

    // header('location: ../../components/teacher/add_workhour.php');
?>