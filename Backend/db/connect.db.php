<?php

    $dbhost = "localhost";
    $dbroot = "root";
    $dbpass = "";
    $dbname = "eds";            

    $db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die("Couldn't connect to database");



?>