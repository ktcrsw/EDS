<?php

session_start();

include '../../db/connect.db.php';

isset($_REQUEST['subi']) ? $stuSubID = $_REQUEST['subi'] : $stuSubID = '';


$_SESSION['subjectStuID'] = $stuSubID;
$teacherID = $_SESSION['UserID'];

echo $stuSubID;


        $check = "SELECT * FROM createscore  WHERE  createScoreSubjectID = '$stuSubID'";
        $result = $db->query($check);
        $num= mysqli_num_rows($result); 
            if($num > 0)   		
            {
                header('location: ../../../Frontend/teacher/score_create.php');

            }else{
            $sql = "INSERT INTO createscore(createScoreID, createScoreTeacherID, createScoreSubjectID, createScoreMind, createScoreTheory, createScoreCarry, createScoreFinal, createScoreStartDate, createScoreEndDate) VALUES ('','$teacherID','$stuSubID','0','0','0','0','0','0')"; 
            $result = $db->query($sql);
            header('location: ../../../Frontend/teacher/score_create.php');
            }
             
        



?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php



?>