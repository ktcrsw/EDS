<?php 
    session_start();
    include '../db/connect.db.php';


    $studentUserID = $_GET['stdid'];
    $teacherUserID = $_SESSION['UserID'];
    $subject = $_GET['subjectteacherid'];

    $StatusCome = $_GET['come'];
    $StatusNotCome = $_GET['notcome'];
    $StatusSick = $_GET['sick-leave'];
    $StatusBusiness = $_GET['business-leave'];
    $StatusLate = $_GET['late'];

    $save = array('StudentID' => $studentUserID, 
    'TeacherID' => $teacherUserID,
    'SubjectID' => $subject,
    'Come' => $StatusCome,
    'NotCome' => $StatusNotCome,
    'Sick' => $StatusSick,
    'Business' => $StatusBusiness,
    'Late' => $StatusLate,
    );

    echo "<pre>";
    print_r($save);
    echo "</pre>";
?>