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


        public function studentInsert(){

           $insertData = "INSERT INTO `stdtbl`(`std_id`, `std_name`) VALUES ('','')";


        }


    }

    class classRoom{

        public function classroomData(){}

    }




    $api = new std();
    $std = $api->studentData();


?>

