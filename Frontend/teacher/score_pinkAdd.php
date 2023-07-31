<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";
$subjectStuID = $_SESSION['subjectStuID'];
$teacherID = $_SESSION['UserID'];



$getScore = "SELECT * FROM createscore WHERE createScoreTeacherID = '$teacherID' AND createScoreSubjectID = '$subjectStuID'";
$queryGetScore = $db->query($getScore);

?>
<?php while ($score = mysqli_fetch_array($queryGetScore)) {

    $mindScore = $score['createScoreMind'];
    $theoryScore = $score['createScoreTheory'];
    $carryScore = $score['createScoreCarry'];
    $finalScore = $score['createScoreFinal'];
    $startDate = $score['createScoreStartDate'];
    $endDate = $score['createScoreEndDate'];
} ?>

<div class="w-full">
    <div class="p-8 flex-row">
            <label for="birthday">วันที่</label>
            <input type="date" id="date" name="date">
        <label for="" class="font-semibold">ใบงานที่ : </label>
        <span>1 ภาคปฏิบัติ</span>

        <div class="flex items-center gap-2">
            <label for="">ชื่อใบงาน</label>
            <input id="name" type="text" class="block w-64 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        </div>
        <div class="flex items-center gap-2 ml-4">
            <label for="">คะแนน</label>
            <input id="score" type="text" placeholder="0" class="block w-32 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">

        </div>
        <table class="w-full mt-4 text-left border border-separate rounded border-slate-200" cellspacing="0">
            <tbody>
                <tr>
                <?php

$getStd = "SELECT enrollsubject.ref_studenttbl AS stdid, 
enrollsubject.ref_stdfname AS name, 
enrollsubject.ref_stdlname AS lname ,
enrollsubject.ref_stdImg AS img ,
save_studentscore.mindScore AS mind, 
save_studentscore.theoryScore AS theory, 
save_studentscore.carryScore AS carry, 
save_studentscore.finalScore AS final 
FROM enrollsubject INNER JOIN save_studentscore 
ON enrollsubject.ref_studenttbl = save_studentscore.studentID
WHERE teacherID = '$teacherID' AND subjectID = '$subjectStuID'";

$queryGetStd = $db->query($getStd);
while ($stds = mysqli_fetch_assoc($queryGetStd)) {


?>         
                   <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                            <div class="flex gap-2 py-3">
                                <div class="avatar">
                                    <div class="w-24 rounded-full w-64 h-64">
                                        <img src="../image/<?php echo $stds['img']; ?>" class="block w-16 h-16" width="16" height="16" style="width:100%; height:100%;" />
                                    </div>
                                </div>
                                <div class="flex-col cols-md-4">
                                    <div>
                                        <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                            <span class="sr-only"></span>
                                        </span class="font-semibold "><?php echo $stds['stdid']; ?>
                                    </div>
                                    <div class="gap-2" >
                                    <form action="../../Backend/functions/saveTheoryScore.php?=<?php echo $stds['stdid']; ?>" method="post" class="myForms" >
                                        <span class="ml-4 "><?php echo $stds['name'] . "            " . $stds['lname']; ?></span>
                                        <input id="std_id" type="text" name="std_id" value="<?php echo $stds['stdid']; ?>" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <input id="std_id" type="text" name="subjectID" value="<?php echo $subjectStuID; ?>" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <input id="score" type="number" name="theory" min="1" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                        <input id="submit" value="บันทึก" type="submit" name="submit" placeholder="0" class="btn btn-primary block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </form>
                                    </div>

                                <?php
                            };

                                ?>


                                </div>

                            </div>
                        </th>
                 

                </tr>


            </tbody>
        </table>
<div class="pt-4">
<a href="./score_pinkEdit.php" class="px-4 py-2 bg-blue-500 text-white">บันทึก</a>
        <button class="px-4 py-2 bg-pink-500 text-white">ย้อนกลับ</button>
</div>
    </div>

</div>