<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/user_nav.php";

?>

<section class="m-2 w-full">


    <div class="  mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class=" flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ลงทะเบียนเรียนรายวิชา</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">เอกสาร</button>
            </li>
            <li class="mr-2" role="presentation">
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden row " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <?php 
                
            
                $enroll = "SELECT * FROM tbl_schedule WHERE schedule_classGroup = '".$_SESSION['Student_Groups']."'";
                $data = $db->query($enroll);
                while($sbj = mysqli_fetch_assoc($data)):
                
                ?>
                    <div class="card w-96 bg-neutral text-neutral-content mt-3">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo "20001-000".$sbj['schedule_id'];?></h2>
                            <p><?php echo $sbj['schedule_title'];?></p>
                            <p><?php echo "ห้องเรียน". "   ". $sbj['schedule_room'];?></p>
                            <p><?php echo "เวลา" . "    " . $sbj['schedule_starttime']. "   -   " .$sbj['schedule_endtime'];?></p>
                            <div class="card-actions justify-end">
                                <form action="../../Backend/functions/enrollsubject.php" method="post">
                                    <input type="text" name="stdid" id="stdid" value="<?php echo $_SESSION['Student_ID']; ?>" hidden>
                                    <input type="text" name="subjid" id="stdid" value="<?php echo $sbj['schedule_id']; ?>" hidden>
                                    <input type="text" name="subjname" id="stdid" value="<?php echo $sbj['schedule_title']; ?>" hidden>
                                    <input type="text" name="tcid" id="stdid" value="<?php echo $sbj['schedule_teacherID']; ?>" hidden>
                                    <input type="text" name="fname" id="stdid" value="<?php echo $_SESSION['Student_FirstName']; ?>" hidden>
                                    <input type="text" name="lname" id="stdid" value="<?php echo $_SESSION['Student_LastName']; ?>" hidden>
                                    <input type="text" name="gps" id="stdid" value="<?php echo $_SESSION['Student_Groups']; ?>" hidden>
                                    <input type="text" name="yr" id="stdid" value="<?php echo $_SESSION['Student_Year']; ?>" hidden>
                                    <input class="btn btn-success" type="submit" style="background-color:#33E55C;color:#fff;" value="ลงทะเบียนวิชานี้">
                                    <?php 
                                    
                                    // $getStatus = "SELECT * FROM enrollsubject WHERE ref_studenttbl = '".$_SESSION['Student_ID']. "'";
                                    // $queryStatus = $db->query($getStatus);
                                    // if($row = mysqli_fetch_array($queryStatus)){
                                    //     if($row['ref_status'] == 1){
                                    //         echo '<input class="btn btn-error" type="submit" disabled value="วิชานี้ลงทะเบียนไปแล้ว" style="background-color:red;color:#fff;">';
                                    //     }
                                        
                                    // }
                                    // echo '';

                                    
                                    
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
        <div class="hidden p-4 " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">
            <div class="alert alert-error">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span style="color:#fff;">ระบบยังไม่เสร็จ โปรดติดต่อทีมพัฒนา</span>
            </div>
            </p>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <?php include './fileDownloads.php'; ?>
        </div>
    </div>


</section>