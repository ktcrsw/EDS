<?php 

    include "../db/connect.db.php";

    isset($_REQUEST['groups']) ? $groups = $_REQUEST['groups'] : $groups = '';
    isset($_REQUEST['years']) ? $years = $_REQUEST['years'] : $years = '';


    // $data = "SELECT * FROM enrolltbl WHERE ref_stdGroups = '".$groups."' AND ref_stdroom = '".$years."'"; 
    // $result = $db->query($data);

    echo $groups . " " . $years;

?>