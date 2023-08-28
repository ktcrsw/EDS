<?php

    session_start();
    include '../db/connect.db.php';
    
    $final = $_POST['final'];

    $saveScore = "UPDATE createscore SET createScoreFinal=  '".$_POST['final']."' WHERE createScoreTeacherID = '".$_SESSION['UserID']."'";
    $queryScore = $db->query($saveScore);

    header('location: ../../Frontend/teacher/data_management.php');


?>