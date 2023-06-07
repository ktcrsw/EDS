<?php 

    session_start();
    include '../db/connect.db.php';

    $sql = "SELECT * FROM enrolltbl";
    $query = $db->query($sql);

    isset($_REQUEST['std_name']) ? $std_name = $_REQUEST['std_name'] : $std_name = '';
    isset($_REQUEST['absent']) ? $absent = $_REQUEST['absent'] : $absent = '';
    isset($_REQUEST['present']) ? $present = $_REQUEST['present'] : $present = '';

    echo "Hello" . $std_name . " " . $absent . " " . $present;

?>