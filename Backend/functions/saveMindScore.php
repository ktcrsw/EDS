<?php

    session_start();
    include '../db/connect.db.php';
    
    $std_id = $_POST['std_id'];
    $MindScore = $_POST['mindScore'];
    $subjectID = $_POST['subjectID'];
    $teacherID = $_SESSION['UserID'];

    echo $std_id . "<br>";
    echo $MindScore . "<br>";
    echo $subjectID . "<br>";
    echo $teacherID . "<br>";


     $saveScore = "UPDATE save_studentscore SET mindScore ='$MindScore' WHERE studentID = '$std_id' subjectID = '$subjectID'";
     $queryScore = $db->query($saveScore);


?>