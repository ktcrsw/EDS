<?php 

    require_once '../db/connect.db.php';

    $id = $_POST['id'];

    $getBudgetStatus = "SELECT * FROM form_budget_approval WHERE fba_id = $id";
    $queryBudgetStatus = $db->query($getBudgetStatus);

    if($row = mysqli_fetch_array($queryBudgetStatus)){
        if($row['fba_status'] == 0){
            $update = "UPDATE form_budget_approval SET fba_status = 1 WHERE fba_id = $id";
            $query = $db->query($update);
            header("Refresh:1.3; url=../admin/personnalTask.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'ระบบกำลังพาคุณไป' ,
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../admin/personnalTask.php';
            });
             });</script>";
        } else if($row['fba_status'] == 1){
            $update = "UPDATE form_budget_approval SET fba_status = 0 WHERE fba_id = $id";
            $query = $db->query($update);
            header("Refresh:1.3; url=../admin/personnalTask.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'success',
                title: 'สำเร็จ',
                text: 'ระบบกำลังพาคุณไป' ,
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../admin/personnalTask.php';
            });
             });</script>";
    }
}


?>