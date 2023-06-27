<?php 

session_start();

include '../db/connect.db.php';


isset($_REQUEST['stdid']) ? $stdid = $_REQUEST['stdid'] : $stdid = '';
isset($_REQUEST['stdname']) ? $stdname = $_REQUEST['stdname'] : $stdname = '';
isset($_REQUEST['stdlname']) ? $stdlname = $_REQUEST['stdlname'] : $stdlname = '';


$std = "SELECT * FROM enrolltbl WHERE ref_studenttbl LIKE '%".$stdid."%'";
$result = $db->query($std);


    if($searchData = mysqli_fetch_array($result)){
        $_SESSION['StudentNo'] = $searchData['no'];
        $_SESSION['Course'] = $searchData['ref_course'];
        $_SESSION['StudentID'] = $searchData['ref_studenttbl'];
        $_SESSION['StudentName'] = $searchData['ref_stdfname'];
        $_SESSION['StudentLName'] = $searchData['ref_stdlname'];
        $_SESSION['StudentGroups'] = $searchData['ref_stdGroups'];
        $_SESSION['StudentYear'] = $searchData['ref_years'];
        $_SESSION['Department'] = $searchData['ref_department'];
        $_SESSION['status'] = $searchData['ref_status'];
        $_SESSION['StudentImg'] = $searchData['ref_stdImg'];
        header("Refresh:0; url=../../components/teacher/search_stu_result.php");
    }
    

?>
<h1></h1>
