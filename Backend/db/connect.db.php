<?php

    $dbhost = "localhost";
    $dbroot = "root";
    $dbpass = "";
    $dbname = "eds_db";            

    $db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die("Couldn't connect to database");

    // if ($nobody_should_ever_be_here) {
    //     header('HTTP/1.1 404 Not Found'); 
    //     $_GET['e'] = 404; 
                          
    //     exit; 
    //   }

?>