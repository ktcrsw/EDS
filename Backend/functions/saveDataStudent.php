<?php 

    session_start();

        function Man(){
            include "../db/connect.db.php";
            $totalStuMenThree = "SELECT * FROM enrolltbl WHERE ref_sex = 'ชาย' AND ref_years = '3'";
            $dataStuMenThree = $db->query($totalStuMenThree);
            $countMenThree = mysqli_num_rows($dataStuMenThree);

            echo $countMenThree;
        }
        function Woman(){
            include "../db/connect.db.php";
            $totalStuGirlThree = "SELECT * FROM enrolltbl WHERE ref_sex = 'หญิง' AND ref_years = '3'";
            $dataStuGirlThree = $db->query($totalStuGirlThree);
            $countGirlThree = mysqli_num_rows($dataStuGirlThree);

            echo $countGirlThree;
        }




?>