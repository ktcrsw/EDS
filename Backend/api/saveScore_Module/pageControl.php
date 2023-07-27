<?php 

session_start();

include '../../db/connect.db.php';

isset($_REQUEST['subi']) ? $stuSubID = $_REQUEST['subi'] : $stuSubID = '';



echo $stuSubID;


    // header('location: ../../../Frontend/teacher/score_create.php');


?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php       



?>
