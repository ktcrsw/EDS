<?php

    session_start();
    include_once '../db/connect.db.php';
    include("../../Frontend/assets/header.php");

    $budget_arr = array(

        "name" => $_POST['name'], 
        "lname" => $_POST['lname'], 
        "position" => $_POST['position'], 
        "with" => $_POST['with_person'], 
        "details" => $_POST['details'], 
        "location" => $_POST['location'], 
        "provinces" => $_POST['provinces'], 
        "amphures" => $_POST['amphures'], 
        "startdate" => $_POST['startdate'], 
        "enddate" => $_POST['enddate'], 
        "budget" => $_POST['budget'], 
        "vehicles" => $_POST['vehicles'], 
        "for_chairman" => 1, 
        "o_approval" => 1, 
        "status" => 0, 


    );

    $check = "SELECT * FROM form_budget_approval WHERE fba_name = '".$_POST['name']."'";
    $query = $db->query($check);
    $num_check = mysqli_num_rows($query);

    if($num_check > 0) {
        if($bg = mysqli_fetch_array($query)) {
        header("Refresh:1.3; url=../../Frontend/teacher/personnel.php");
        include("../../Frontend/assets/header.php");
        echo "<script>setTimeout(function() {
        Swal.fire({
            icon: 'error',
            title: 'ขออภัย',
            text: '".$bg['fba_name']." : ได้ส่งแบบฟอร์มขออนุญาติไปราชการไปแล้วกรุณาติดต่อเจ้าหน้าที่',
            showCancelButton: false,
            showConfirmButton: false
        }, function() {
            window.location = '../../Frontend/teacher/personnel.php';
        });
         });</script>";
        }
    } else {
        $saveBudget = "INSERT INTO form_budget_approval(fba_id, fba_name, fba_lname, fba_position, fba_with_person, fba_details, fba_location, fba_province, fba_amphure, fba_budget, fba_vehicles, fba_comment, fba_o_approve, startdate, enddate, fba_status) 
                VALUES ('', '".$budget_arr['name']."', '".$budget_arr['lname']."', '".$budget_arr['position']."', '".$budget_arr['with']."'
                , '".$budget_arr['details']."', '".$budget_arr['location']."', '".$budget_arr['provinces']."', '".$budget_arr['amphures']."'
                , '".$budget_arr['budget']."', '".$budget_arr['vehicles']."', '".$budget_arr['for_chairman']."', '".$budget_arr['o_approval']."', '".$budget_arr['startdate']."', '".$budget_arr['enddate']."', '".$budget_arr['status']."'
                )
                ";
                $queryBudget = $db->query($saveBudget);
                if(isset($queryBudget)){
                    header("Refresh:1.3; url=../../Frontend/teacher/personnel.php");
                include("../../Frontend/assets/header.php");
                echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: 'คุณ ".$budget_arr['name']." : ได้ส่งแบบฟอร์มขออนุญาติไปราชการตั้งแต่วันที่ ".$budget_arr['startdate']." ถึงวันที่ ".$budget_arr['enddate']."' ,
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../../Frontend/teacher/personnel.php';
                });
                 });</script>";
                } else {
                    header('location: ../../frontend/teacher/personnel.php');
                }

    }
    