<?php include "../db/connect.db.php";

    include "../../Frontend/assets/header.php";

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);
    isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = '';
    $del = "DELETE FROM users WHERE u_id = '".$id."'";
    $query = $db->query($del);
    // header('location:admin.php');
?>