<?php 

    class enrolltbl {
        public function getEnroll() {
            
        include "../db/connect.db.php";
        //WHERE ref_stdroom
            $sql = "SELECT * FROM enrolltbl";
            $query = $db->query($sql);

            if($enrl = mysqli_fetch_array($query)){

                $_SESSION['no'] = $enrl['no'];
                $_SESSION['Subtbl'] = $enrl['ref_subjecttbl'];
                $_SESSION['Stdtbl'] = $enrl['ref_studenttbl'];
                $_SESSION['Stdname']= $enrl['ref_stdname'];
                $_SESSION['Stdroom'] = $enrl['ref_stdroom'];
                $_SESSION['StdImg'] = $enrl['ref_stdImg'];

                while ($row = mysqli_fetch_all($query)){
                    echo "<pre>";
                    print_r($row);
                    echo "</pre>";
                }


            }
            

        }
    }