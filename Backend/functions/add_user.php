<?php 
    session_start();
    include "../db/connect.db.php";
    include "../../Frontend/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);


    $password = md5($_POST['password']);
    $filename = $_POST['upload'].".png";

    function password_generate($chars) 
    {
    $data = '123456789013';
    return substr(str_shuffle($data), 0, $chars);
    }
 
    $idcard = password_generate(13);

    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, address, phone, birthday, permission, main_groups, groups, img) VALUE
    ('', '".$idcard."', '".$_POST['username']."', '".$_POST['email']."', '".$password."', '".$_POST['first-name']."', '".$_POST['last-name']."', '".$_POST['about']."', '".$_POST['phone']."', '', 1, '', '', '$filename')";
    $query = $db->query($data);

    header('location: ../admin/admin_datamanagement.php');
?>