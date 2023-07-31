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


    $saveScore = "INSERT INTO createscore(createScoreID, createScoreTeacherID, createScoreMind, createScoreTheory, createScoreCarry, createScoreFinal, createScoreStartDate, createScoreEndDate) VALUES ('', '$teacherID', $mindScore', '$theoryScore', '$carryScore', '', '$startdate', '$enddate');";
    $queryScore = $db->query($saveScore);



?>