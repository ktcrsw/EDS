<?php

    session_start();
    include '../db/connect.db.php';
    
    $theoryScore = $_POST['theory'];
    $carryScore = $_POST['carry'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $teacherID = $_SESSION['UserID'];

    echo $theoryScore;
    echo $carryScore;
    echo $startdate;
    echo $enddate;


    $saveScore = "INSERT INTO createscore(createScoreID, createScoreTeacherID, createScoreMind, createScoreTheory, createScoreCarry, createScoreFinal, createScoreStartDate, createScoreEndDate) VALUES ('', '$teacherID', '0', '$theoryScore', '$carryScore', '0', '$startdate', '$enddate');";
    $queryScore = $db->query($saveScore);


?>