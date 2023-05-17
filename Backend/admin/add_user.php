<?php include "../db/connect.db.php";

    if(http_response_code(404)){
        include('404.php'); 
    }

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);

    error_reporting( error_reporting() & ~E_NOTICE );


    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['username']) ? $username = $_REQUEST['username'] : $username = '';
    isset($_REQUEST['password']) ? $password = $_REQUEST['password'] : $password = '';



    $data = "INSERT INTO users(u_id, id_card, username, email, pwd, fname, lname, permission) VALUES ('', '$idcard', '$username', '', '$password', '', '', '1')";
    $query = $db->query($data);
    if(mysqli_affected_rows($db)){
        echo "Success";
    } else {
        echo "Error";
    }

?>