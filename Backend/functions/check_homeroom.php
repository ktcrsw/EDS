<?php 


    include '../db/connect.db.php';

    $sql = "SELECT * FROM stdtbl inner join checked ON stdtbl.std_id = checked.std_id";
    $query = $db->query($sql);


    $std_id = "";
    

    if($row = mysqli_fetch_array($query)){
        echo $row;
    }



?>