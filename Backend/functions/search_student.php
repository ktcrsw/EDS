<?php 

session_start();

include '../db/connect.db.php';


isset($_REQUEST['stdid']) ? $stdid = $_REQUEST['stdid'] : $stdid = '';


$std = "SELECT * FROM enrolltbl WHERE ref_studenttbl LIKE '$stdid'";
$result = $db->query($std);


    if($row = mysqli_fetch_array($result)){
        $_SESSION['StudentID'] = $row['ref_studenttbl'];
        $_SESSION['StudentName'] = $row['ref_stdname'];
        $_SESSION['StudentImg'] = $row['ref_stdImg'];
    }
 
    

?>