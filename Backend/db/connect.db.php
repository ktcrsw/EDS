<?php

    $dbhost = "localhost";
    $dbroot = "root";
    $dbpass = "05052004";
    $dbname = "eds_db";            
    $db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die("Couldn't connect to database");
    date_default_timezone_set('Asia/Bangkok');
    $_SESSION['err'] = 'ไม่สามารถลงข้อมูลได้';
    $_SESSION['succ'] = 'ลงข้อมูลสำเร็จ';

?>
