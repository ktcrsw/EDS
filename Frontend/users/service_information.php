<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/user_nav.php";

$perpage = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start = ($page - 1) * $perpage;
$sql = "SELECT * from enrolltbl WHERE ref_stdGroups = '".$_SESSION['Student_Groups']."' ORDER BY ref_studenttbl ASC limit {$start} , {$perpage} ";
$query = $db->query($sql);

?>

<section class="m-2 w-full">


    <div class="  mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class=" flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#listStd" type="button" role="tab" aria-controls="listStd" aria-selected="false">รายชื่อนักเรียนนักศึกษาในกลุ่มเดียวกัน</button>
            </li>
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


                $enroll = "SELECT * FROM tbl_schedule WHERE schedule_classGroup = '" . $_SESSION['Student_Groups'] . "'";
                $data = $db->query($enroll);
                while ($sbj = mysqli_fetch_assoc($data)) :

                ?>
                    <div class="card w-96 bg-neutral text-neutral-content mt-3">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo "20001-000" . $sbj['schedule_id']; ?></h2>
                            <p><?php echo $sbj['schedule_title']; ?></p>
                            <p><?php echo "ห้องเรียน" . "   " . $sbj['schedule_room']; ?></p>
                            <p><?php echo "เวลา" . "    " . $sbj['schedule_starttime'] . "   -   " . $sbj['schedule_endtime']; ?></p>
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
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="listStd" role="tabpanel" aria-labelledby="listStd">
        <div class="flex justify-center px-24 items-center">

            <div class="w-full overflow-x-auto">
                <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                    <tbody>
                        <tr>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">รหัสนักศึกษา ชื่อ-นามสกุล</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานะ</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สาขาวิชา</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">หลักสูตร</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชั้นปี</th>
                            <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">กลุ่มเรียน</th>
                        </tr>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr>
                                <td class="h-16 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <div class="flex">
                                        <div>
                                            <a href="admin.php" data-popover-target="popover-1" data-popover-placement="right" type="button" class="items-center justify-center w-12 h-12 text-white rounded-full">
                                                <div class="avatar">
                                                    <div class="w-12 rounded-full">
                                                        <?php

                                                        if ($row['ref_stdImg'] == '' and $row['ref_sex'] == 'หญิง') {
                                                            echo "<img src='../../Frontend/image/null_user_girl.png' />";
                                                        } elseif ($row['ref_stdImg'] == '' and $row['ref_sex'] == 'ชาย') {
                                                            echo "<img src='../../Frontend/image/null_user.png' />";
                                                        } else {


                                                        ?>
                                                            <img src="../../Frontend/image/<?php echo $row['ref_stdImg']; ?>" />
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="flex flex-col ml-2">
                                            <span class="text-[16px] font-semibold"><?php echo $row['ref_stdfname'] . "&nbsp;" . $row['ref_stdlname']; ?></span>
                                            <span><?php echo $row['ref_studenttbl']; ?></span>
                                        </div>
                                        
                                    </div>

                                </td>

                                <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                        <input type="text" name="id" value="<?php echo $row['ref_studenttbl']; ?>" hidden>
                                        <p type="submit" href="">
                                            <?php

                                            if ($row['ref_status'] == 0) {
                                                echo "<span class='inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300'>";
                                                echo "พ้นการศึกษา";
                                                echo "</span>";
                                            }
                                            if ($row['ref_status'] == 1) {
                                                echo "<span class='inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300'>";
                                                echo "กำลังศึกษา";
                                                echo "</span>";
                                            }


                                            ?>
                                        </p>
                                    </form>

                                </td>
                                <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <?php echo $row['ref_department']; ?>
                                </td>
                                <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <?php echo $row['ref_course']; ?>
                                </td>
                                <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['ref_years']; ?></td>
                                <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['ref_stdGroups']; ?></td>
                            </tr>
                        <?php endwhile; ?>


                    </tbody>
                    </form>
                </table>
                <?php
                $sql2 = "SELECT * from enrolltbl WHERE ref_stdGroups = '".$_SESSION['Student_Groups']."'";
                $query2 = $db->query($sql2);
                $total_record = mysqli_num_rows($query2);
                $total_page = ceil($total_record / $perpage);
                $total_pages = 1;
                ?>
                <div class="mt-2">
                    <a href="service_information.php?page=<?php echo $total_pages; ?>" aria-label="Next">
                        <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-left"></i></span>
                    </a>
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                        <a href="service_information.php?page=<?php echo $i; ?>"><button class="btn btn-ghost border bordered" style="background-color:#E3E3E3;color:gray;"><?php echo $i; ?></button></a>
                    <?php } ?>
                    <a href="service_information.php?page=<?php echo $total_page; ?>" aria-label="Next">
                        <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-right"></i></span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    </div>


</section>