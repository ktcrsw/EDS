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
        $_SESSION['StudentLName'] = $searchData['ref_stdlname'];
        $_SESSION['StudentSex'] = $searchData['ref_sex'];
        $_SESSION['StudentGroups'] = $searchData['ref_stdGroups'];
        $_SESSION['StudentYear'] = $searchData['ref_years'];
        $_SESSION['Department'] = $searchData['ref_department'];
        $_SESSION['status'] = $searchData['ref_status'];
        $_SESSION['StudentImg'] = $searchData['ref_stdImg'];

        if($_SESSION['StudentID'] != $stdid){
            include("../../Frontend/assets/header.php");

echo "<script  type='text/javascript'>
Swal.fire({
    icon: 'error',
    title: 'ไม่พบข้อมูล.',
    text: 'ลองใหม่อีกครั้งภายหลัง',
  })
</script>";
header("Refresh:2; url=../../Frontend/teacher/service_information.php");
        } else {
            header("Refresh:0; url=../../Frontend/teacher/search_stu_result.php");

        }

    }
    

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php       



?>
