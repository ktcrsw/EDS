<?php 

    include"../db/connect.db.php";
    include"../../components/assets/header.php";

    $sql = "SELECT * FROM subjecttbl";
    $result = $db->query($sql);


    
    isset($_REQUEST['search']) ? $search = $_REQUEST['search'] : $search = '';
    $search_details = '';
    
    $data = "SELECT * FROM subjecttbl WHERE subject_name like '%$search%'";
    $result = $db->query($data);
    $search_details = mysqli_fetch_array($result);
    print_r($search_details);


?>