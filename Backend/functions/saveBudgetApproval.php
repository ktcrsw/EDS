<?php

    session_start();
    require '../db/connect.db.php';
    include("../../Frontend/assets/header.php");

    
    

    if(empty($_POST['name'])){
        $err = array(
            "title" => "error",
            "code" => 400,
            "message" => "Name is required"

        );
        header('location: ../../Frontend/personnel.php');
        print_r($err);
    }

    if(isset($_POST['name'])){
        $getData = "SELECT * FROM from_budget_approval";
        $queryData = $db->query($getData);
        if($fba = mysqli_fetch_array($queryData)){
            if($fba['name'] == $_POST['name']){
                header("Refresh:1.3; url=../../Frontend/teacher/personnel.php");
                include("../../Frontend/assets/header.php");
                echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'ขออภัย',
                    text: '".$fba['name']." : ได้ส่งแบบฟอร์มขออนุญาติไปราชการตั้งแต่วันที่ ".$fba['startdate']." ถึงวันที่ ".$fba['enddate']."',
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../../Frontend/teacher/personnel.php';
                });
                 });</script>";
            } else {
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
                    "for_chairman" => $_POST['aprroval'], 
                    "o_approval" => $_POST['o_approval'], 
                    "status" => 1, 
                    
                    
                );

                $saveBudget = "INSERT INTO form_budget_approval(fba_id, fba_name, fba_lname, fba_position, fba_with_person, fba_details, fba_location, fba_province, fba_amphure, fba_budget, fba_vehicles, fba_comment, fba_o_approve, startdate, enddate, fba_status) 
                VALUES ('', '".$budget_arr['name']."', '".$budget_arr['lname']."', '".$budget_arr['position']."', '".$budget_arr['with_person']."'
                , '".$budget_arr['details']."', '".$budget_arr['location']."', '".$budget_arr['provinces']."', '".$budget_arr['amphures']."'
                , '".$budget_arr['budget']."', '".$budget_arr['vehicles']."', '".$budget_arr['for_chairman']."', '".$budget_arr['o_approval']."', '".$budget_arr['startdate']."', '".$budget_arr['enddate']."' '".$budget_arr['status']."'
                )
                ";
                $queryBudget = $db->query($saveBudget);
                header("Refresh:1.3; url=../../Frontend/teacher/personnel.php");
                include("../../Frontend/assets/header.php");
                echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: 'คุณ ".$fba['name']." : ได้ส่งแบบฟอร์มขออนุญาติไปราชการตั้งแต่วันที่ ".$fba['startdate']." ถึงวันที่ ".$fba['enddate']."' ,
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../../Frontend/teacher/personnel.php';
                });
                 });</script>";

            }
        }

    }












?>
