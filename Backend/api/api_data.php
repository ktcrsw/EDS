<?php 


    class std{
        
        public function studentData(){

            include("../db/connect.db.php");
            $data = "SELECT * FROM stdtbl";
            $query = $db->query($data);
            $rows = mysqli_num_rows($query);

            while($std = $query->fetch_assoc()) {
                echo "ID: " . $std["std_id"]  . " Name: " . $std["std_name"] . "<br>";
              }
              
            echo $std;

        }
    }


    class allSessions{

        public function dataSessions(){

            include "../db/connect.db.php";
            $std = "SELECT * FROM student WHERE dep_id = 11";
            $result = $db->query($std);
            if($row = mysqli_fetch_array($result)){

                $_SESSION['ID'] = $row["no_id"];
                $_SESSION['StdID'] = $row["std_id"];
                $_SESSION['Fullname'] = $row["fullname"];
                $_SESSION['Address'] = $row["address"];
                $_SESSION['Tel'] = $row["tel"];
                $_SESSION['Department'] = $row["dep_id"];
                $_SESSION['Group'] = $row["grp"];
                
                $id = $_SESSION['StdID'];

                while($id = mysqli_fetch_assoc($result)){
                    echo "<pre>";
                    print_r($id);
                    echo "</pre>";

                }
            }

        }

    }


    $api = new allSessions();
    $std = $api->dataSessions();


?>

