<?php 
    session_start();

    include '../db/connect.db.php';
    
    $studentUserID = $_GET['stdID'];
    $teacherUserID = $_SESSION['UserID'];
    $subject = $_GET['subjectteacherid'];
    $date = $_GET['date'];
    $group = $_GET['sgroup'];

    foreach ($studentUserID as $std_id => $checkinStatus){
        $save = array('ref_subjectID' => $subject,
        'ref_teacherID' => $teacherUserID,
        'ref_stdID' => $std_id,
        'check_in_status' => $checkinStatus, 
        'groups' => $group,
        'check_in_date' => $date,
        'save_date' => $date,
        );
        echo '<pre>';
        print_r($save);
        echo '</pre>';

        $saveData = "INSERT INTO checkin (no, ref_subjectID, ref_teacherID, ref_stdID, check_in_status, groups, check_in_date, save_date) VALUES (NULL, '".$save['ref_subjectID']."', '".$save['ref_teacherID']."', '".$save['ref_stdID']."', '".$save['check_in_status']."', '".$save['groups']."', '".$save['cehck_in_date']."', '".$save['save_date']."')";
        $query = $db->query($saveData);
        if($query){
            echo $_SESSION['succ'];
        } else {
            echo $_SESSION['err'];
        }
    }


