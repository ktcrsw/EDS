<?php 

    session_start();

    include '../db/connect.db.php';


    $schdule = "SELECT * FROM classschedule";
    $result = $db->query($schdule);



    while($row = mysqli_fetch_assoc($result)){
        $dataSchedule = array(
            "classSchedule_id"=>$row['classSchedule_id'],
            "classSchedule_subjectName"=>$row['classSchedule_subjectName'],
            "classSchedule_teachertName"=>$row['classSchedule_teacherName'],
            "classSchedule_Course"=>$row['classSchedule_Course'],
            "classSchedule_Room"=>$row['classSchedule_Room'],
            "classSchedule_date"=>$row['classSchedule_date'],
            "classSchedule_Start"=>$row['classSchedule_Start'],
            "classSchedule_End"=>$row['classSchedule_End']
        );    
        echo "<pre>";
        print_r($dataSchedule);
        echo "</pre>";
        
    }


    // funtion for getting schedule and insert to table
?>