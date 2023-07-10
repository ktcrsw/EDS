<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM classschedule";
    $result = $db->query($schdule);


    isset($_REQUEST['subject_name']) ? $subject_name = $_REQUEST['subject_name'] : $subject_name = '';
    isset($_REQUEST['teacher_name']) ? $teacher_name = $_REQUEST['teacher_name'] : $teacher_name = '';
    isset($_REQUEST['course']) ? $course = $_REQUEST['course'] : $course = '';
    isset($_REQUEST['room']) ? $room = $_REQUEST['room'] : $room = '';
    isset($_REQUEST['date']) ? $date = $_REQUEST['date'] : $date = '';
    isset($_REQUEST['timestart']) ? $timestart = $_REQUEST['timestart'] : $timestart = '';
    isset($_REQUEST['timeend']) ? $timeend = $_REQUEST['timeend'] : $timeend = '';


    echo $subject_name . $teacher_name . $course . $date . $timestart . $timeend;


    $add = "INSERT INTO classschedule(classSchedule_id, classSchedule_subjectName, classSchedule_teacherName, classSchedule_Room, classSchedule_Course, classSchedule_date, classSchedule_Start, classSchedule_End) VALUES ('', '$subject_name', '$teacher_name', '$room', '$course', '$date', '$timestart', '$timeend')";
    $addSuccess = $db->query($add);

    header('location: ../../Frontend/teacher/data_management.php');
?>