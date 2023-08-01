<?php

    session_start();
    include '../db/connect.db.php';
    
    $mindScore = $_POST['mind'];
    $theoryScore = $_POST['theory'];
    $carryScore = $_POST['carry'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $teacherID = $_SESSION['UserID'];

    echo $mindScore;
    echo $theoryScore;
    echo $carryScore;
    echo $startdate;
    echo $enddate;


    $saveScore = "UPDATE createscore SET createScoreMind ='$mindScore', createScoreTheory='$theoryScore', createScoreCarry='$carryScore',createScoreFinal='0',createScoreStartDate='$startdate',createScoreEndDate='$enddate' WHERE createScoreTeacherID = '$teacherID'";
    $queryScore = $db->query($saveScore);

    header('location: ../../Frontend/teacher/data_management.php');


?>