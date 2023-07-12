<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../Frontend/assets/header.php";

    $userID = $_GET['userID'];
    echo $userID;

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);
?>