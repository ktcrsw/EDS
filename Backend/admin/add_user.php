<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../Frontend/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    $studentID = $_GET['username'];
    $department = $_GET['department'];


    $_FILES['upload']['tmp_name'];
    $targetDir = "./img/";

    isset($_FILES['upload']) && isset($_FILES['upload']['name']);
    $ext = explode(".",$_FILES['upload']['name']);
    $filename = $_SESSION['Username'].".".$ext[1]."png";


    if(move_uploaded_file($_FILES['upload']['tmp_name'], $targetDir . $filename)){
        echo "";
    }
    

    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, permission, img) VALUES ('', '', '$username', '', '', '$fname', '$lname', '1', '$filename')";
    $query = $db->query($data);


?>