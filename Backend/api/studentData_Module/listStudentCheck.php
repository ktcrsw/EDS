<?php 

session_start();

include '../../db/connect.db.php';


isset($_REQUEST['year']) ? $year = $_REQUEST['year'] : $year = '';
isset($_REQUEST['group']) ? $group = $_REQUEST['group'] : $group = '';
isset($_REQUEST['subID']) ? $subjectteacherid = $_REQUEST['subID'] : $subjectteacherid = '';

$_SESSION['GP'] = $group;
$_SESSION['Year'] = $year;
$_SESSION['SubjectTeacherID'] = $subjectteacherid;

$stds = "SELECT * FROM enrollsubject WHERE ref_years = '$year' AND ref_stdGroups = '$group'";
$result = $db->query($stds);


//     if($row = mysqli_fetch_array($result)){




// }
while ($row = mysqli_fetch_assoc($result)){
    $_SESSION['nullID'] = $row['nullID'];
    $_SESSION['SID'] = $row['schedule_id'];
    $_SESSION['TID'] = $row['u_id'];
    $_SESSION['STT'] = $row['schedule_title'];
    $_SESSION['RSTB'] = $row['ref_studenttbl'];
    $_SESSION['SFirstname'] = $row['ref_stdfname'];
    $_SESSION['SLastname'] = $row['ref_stdlname'];
    $_SESSION['SGroups'] = $row['ref_stdGroups'];
    $_SESSION['SYear'] = $row['ref_years'];
    $_SESSION['status'] = $row['ref_status'];
    $_SESSION['SImg'] = $row['ref_stdImg'];
    // echo $_SESSION['SFirstname'];
}
header('location: ../../../Frontend/teacher/check_subject_date.php');


?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php       



?>
