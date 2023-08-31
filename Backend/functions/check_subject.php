<?php

session_start();

include '../db/connect.db.php';

$studentUserIDs = $_GET['stdID'];
$teacherUserID = $_SESSION['UserID'];
$subject = $_GET['subjectteacherid'];
$date = $_GET['date'];
$group = $_GET['sgroup'];

foreach ($studentUserIDs as $std_id => $checkinStatus) {
    $save = array(
        'ref_subjectID' => $subject,
        'ref_teacherID' => $teacherUserID,
        'ref_stdID' => $std_id,
        'check_in_status' => $checkinStatus,
        'groups' => $group,
        'check_in_date' => $date,
        'save_date' => $date,
    );

    $saveData = "INSERT INTO checkin (ref_subjectID, ref_teacherID, ref_stdID, check_in_status, `groups`, check_in_date, save_date) VALUES 
('" . $save['ref_subjectID'] . "',
 '" . $save['ref_teacherID'] . "',
  '" . $save['ref_stdID'] . "',
   '" . $save['check_in_status'] . "',
    '" . $save['groups'] . "',
     '" . $save['check_in_date'] . "',
      '" . $save['save_date'] . "')";

    $query = $db->query($saveData);
    if ($query) {
        echo "true";
        $saveLog = "INSERT INTO checkin_logs (logs_subjectID, log_teacherID, logs_date) VALUES ('" . $subject . "', '" . $teacherUserID . "', '" . $date . "')";
$queryLogs = $db->query($saveLog);
        header('location: ../../Frontend/teacher/data_management.php');

    } else {
        include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'error',
                title: 'ไม่สำเร็จ',
                text: 'ลองใหม่อีกครั้ง',
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../../Frontend/teacher/index.php';
                });
            });</>";
        header('refresh:2; ../../Frontend/teacher/data_management.php');
    }
}
