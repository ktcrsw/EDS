<?php 

session_start();

include '../db/connect.db.php';


isset($_REQUEST['stdid']) ? $stdid = $_REQUEST['stdid'] : $stdid = '';


$std = "SELECT * FROM enrolltbl WHERE ref_studenttbl LIKE '%".$stdid."%'";
$result = $db->query($std);


    if($searchData = mysqli_fetch_array($result)){
        // $_SESSION['StudentNo'] = $row['no'];
        // $_SESSION['StudentSubject'] = $row['ref_subjecttbl'];
        // $_SESSION['StudentID'] = $row['ref_studenttbl'];
        // $_SESSION['StudentName'] = $row['ref_stdname'];
        // $_SESSION['StudentGroups'] = $row['ref_stdGroups'];
        // $_SESSION['StudentRoom'] = $row['ref_stdroom'];
        // $_SESSION['Department'] = $row['ref_department'];
        // $_SESSION['status'] = $row['ref_status'];
        // $_SESSION['StudentImg'] = $row['ref_stdImg'];
        echo $searchData['ref_stdname'];
    }
    

?>