<?php

    session_start();
    include '../db/connect.db.php';
    
    $std_id = $_POST['std_id'];
    $MindScore = $_POST['MindScore'];
    $subjectID = $_POST['subjectID'];
    $teacherID = $_SESSION['UserID'];

    echo $std_id . "<br>";
    echo $MindScore . "<br>";
    echo $subjectID . "<br>";
    echo $teacherID . "<br>";

    // $saveScore = "";
    // $queryScore = $db->query($saveScore);


?>