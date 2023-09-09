<?php

    $dbhost = "localhost";
    $dbroot = "root";
    $dbpass = "";
    $dbname = "eds_db";            
    $db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die("Couldn't connect to database");
    date_default_timezone_set('Asia/Bangkok');
    
?>
