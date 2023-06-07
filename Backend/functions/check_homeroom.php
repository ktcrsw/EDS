<?php 

    session_start();
    include '../db/connect.db.php';

    $sql = "SELECT * FROM enrolltbl";
    $query = $db->query($sql);

    $std_name = $_REQUEST['std_name'];
    $absent = $_REQUEST['absent'];
    $present = $_REQUEST['present'];

    echo "Hello" . $std_name . " " . $absent . " " . $present;

?>