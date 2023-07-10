<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);

$schdule = "SELECT * FROM classschedule";
$result = $db->query($schdule);
?>
<section class="m-2 w-full">
    <!-- /* -------------------------------------------------------------------------- */
    /*                        หน้าผลการค้นหาข้อมูลนักศึกษา                        */
    /* -------------------------------------------------------------------------- */ -->
    <nav aria-label="Breadcrumb ">
        <ol class="flex items-stretch p-4 gap-2 list-none">
            <li class="flex items-center gap-2">
                <a href="./index.php" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li class="items-center hidden gap-2 md:flex">
                <a href="./service_information.php" class="flex max-w-[20ch] truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">บริการข้อมูลทั่วไป</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-03 description-03" role="graphics-symbol">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li class="flex items-center gap-2">
                <a href="./service_information.php" class="flex max-w-[20ch] truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">ค้นหาข้อมูลนักศึกษา</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-04 description-04" role="graphics-symbol">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li class="flex items-center flex-1">
                <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">ผลการค้นหา</a>
            </li>
        </ol>
    </nav>





    <!-- Component: Table with hover state -->
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
                    <tr>



                        <?php
                        ///////////////////////////////////////////////
                        /*

                                $_SESSION ของข้อมูลนักเรียนอิงจากพวกนี้ไปใช้
                                
                                $_SESSION['StudentNo']
                                $_SESSION['Course'] 
                                $_SESSION['StudentID'] 
                                $_SESSION['StudentName'] 
                                $_SESSION['StudentLName'] 
                                $_SESSION['StudentGroups'] 
                                $_SESSION['StudentYear']
                                $_SESSION['Department']
                                $_SESSION['status'] 
                                $_SESSION['StudentImg'] 

                                        #Kittichai Raksawong

                        */
                        //////////////////////////////////////////////



                        ?>
                        <td class="h-16 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <div class="flex">
                                <div>
                                    <a href="" data-popover-target="popover-1" data-popover-placement="right" type="button" class="items-center justify-center w-12 h-12 text-white rounded-full">
                                        <div class="avatar">
                                            <div class="w-12 rounded-full">
                                            <?php 
                                                
                                                if($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'หญิง'){
                                                    echo "<img src='../image/null_user_girl.png' />";
                                                } elseif($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'ชาย') {
                                                    echo "<img src='../image/null_user.png' />";
                                                } else {

                                                
                                                ?>
                                                    <img src="../image/<?php echo $_SESSION['StudentImg']; ?>" />
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </a>
                                    <div data-popover id="popover-1" role="tooltip" class="absolute z-10 invisible transition-opacity duration-300">
                                        <div class="flex">
                                            <div class="avatar">
                                                <div class="w-[130px] h-[170px]  rounded">
                                                <?php 
                                                
                                                if($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'หญิง'){
                                                    echo "<img src='../image/null_user_girl.png' />";
                                                } elseif($_SESSION['StudentImg'] == '' AND $_SESSION['StudentSex'] == 'ชาย') {
                                                    echo "<img src='../image/null_user.png' />";
                                                } else {

                                                
                                                ?>
                                                    <img src="../image/<?php echo $_SESSION['StudentImg']; ?>" />
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col ml-2">
                                    <span class="text-[16px] font-semibold"><?php echo $_SESSION['StudentName'] . "&nbsp;" . $_SESSION['StudentLName']; ?></span>
                                    <span><?php echo $_SESSION['StudentID']; ?></span>
                                </div>
                                <a href="profile_stu.php?=<?php echo $_SESSION['StudentID']. "&nbsp" .$_SESSION['StudentName'] . "&nbsp;" . $_SESSION['StudentLName']; ?>" class=" ml-auto flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#f2b118" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </a>
                            </div>

                        </td>

                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <?php

                            if ($_SESSION['status'] == 0) {
                                echo "<span class='inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300'>";
                                echo "พ้นการศึกษา";
                                echo "</span>";
                            }
                            if ($_SESSION['status'] == 1) {
                                echo "<span class='inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300'>";
                                echo "กำลังศึกษา";
                                echo "</span>";
                            }
                            ?>
                        </td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <?php echo $_SESSION['Department']; ?>
                        </td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <?php echo $_SESSION['Course']; ?>
                        </td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['StudentYear']; ?></td>
                        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $_SESSION['StudentGroups']; ?></td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>



</section>