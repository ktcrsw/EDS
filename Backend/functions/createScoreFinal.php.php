<?php

    session_start();
    include '../db/connect.db.php';
    
    $final = $_POST['final'];

    $saveScore = "UPDATE createscore SET createScoreFinal='$final' WHERE createScoreTeacherID = '$teacherID'";
    $queryScore = $db->query($saveScore);



?>