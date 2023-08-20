<?php 

    session_start();
    require '../db/connect.db.php';

    $stdid = $_POST['stdid'];
    $subjid = $_POST['subjid'];
    $subjname = $_POST['subjname'];
    $tcid = $_POST['tcid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gps = $_POST['gps'];
    $yr = $_POST['yr'];
    $img = $_POST['stdid']. ".png";
    // echo $stdid. $subjid. $fname. $lname. $gps. $yr . $subjname . $tcid;

    // Insert Student to subject enrollment

    $enrollStd = "INSERT INTO enrollsubject(nullID, schedule_id, u_id, schedule_title, ref_studenttbl, ref_stdfname, ref_stdlname, ref_stdGroups, ref_years, ref_status, ref_stdImg) VALUES ('', '$subjid', '$tcid', '$subjname', '$stdid', '$fname', '$lname', '$gps', '$yr', 1, '$img')";
    $query = $db->query($enrollStd);

    //Add to score tbl
    $scoretbl = "INSERT INTO save_studentscore(no, studentID, subjectID, teacherID, mindScore, theoryScore, carryScore, finalScore) VALUES ('', '$stdid', '$subjid', '$tcid', 0, 0, 0, 0)";
    $query = $db->query($scoretbl);

    header('location: ../../Frontend/users/');


?>