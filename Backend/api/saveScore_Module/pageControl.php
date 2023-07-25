<?php 

session_start();

include '../../db/connect.db.php';


isset($_REQUEST['studentYear']) ? $studentYear = $_REQUEST['studentYear'] : $studentYear = '';
isset($_REQUEST['studentGroup']) ? $studentGroup = $_REQUEST['studentGroup'] : $studentGroup = '';
isset($_REQUEST['SubjectID']) ? $subjectStuID = $_REQUEST['SubjectID'] : $subjectStuID = '';
isset($_REQUEST['SubjectName']) ? $subjectIDName = $_REQUEST['SubjectName'] : $subjectIDName = '';

// $_SESSION['studentGroup'] = $studentGroup;
// $_SESSION['studentYear'] = $studentYear;
// $_SESSION['subjectStuID'] = $subjectStuID;
// $_SESSION['subjectIDName'] = $subjectIDName;


echo $_SESSION['subjectStuID'];


// $stds = "SELECT * FROM enrollsubject WHERE ref_studentYears = '$studentYear' AND ref_stdstudentGroups = '$studentGroup'";
// $result = $db->query($stds);


//     if($row = mysqli_fetch_array($result)){




// }

header('location: ../../../Frontend/teacher/score_create.php');


?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php       



?>
