<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../Frontend/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    $studentID = $_GET['username'];
    $years = $_GET['years'];
    $groups = $_GET['groups'];
    $certificate = $_GET['certificate'];
    $fname = $_GET['first-name'];
    $lname = $_GET['last-name'];
    $sex = $_GET['sex'];
    $filename = $_GET['upload'];


    // $_FILES['upload']['name'];
    // $ext = explode(".", $_FILES['upload']['name']);
    // $filename = $studentID.".".$ext[1];

    // if(move_uploaded_file($_FILES['upload']['tmp_name'], "../admin/img/". "$filename")){
    //     echo $studentID. $department. $years. $groups. $certificate. $filename. $fname. $lname. $sex;

    // }

    

    echo $studentID. $department. $years. $groups. $certificate. $filename. $fname. $lname. $sex;
    $data = "INSERT INTO enrolltbl(no, ref_course, ref_studenttbl, ref_stdfname, ref_stdlname, ref_sex, ref_stdGroups, ref_years, ref_department, ref_status, ref_stdImg) VALUES ('', '$years', '$studentID', '$fname', '$lname', '$sex', '$groups', '$certificate', 'เทคโนโลยีสารสนเทศ', 0, '')";
    $query = $db->query($data);

        header('location: ../admin/admin.php');
?>