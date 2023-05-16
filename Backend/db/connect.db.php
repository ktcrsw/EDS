<?php

    class Connection{


    public function Connect(){
         $dbhost = "localhost";
         $dbroot = "root";
         $dbpass = "";
         $dbname = "eds";            

        $conn = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname)or die("Couldn't connect to database");


    }

    }


    $db = new Connection();
    $db->Connect();
?>