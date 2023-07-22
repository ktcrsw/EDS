<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php session_start(); ?>
<?php include "../../Frontend/assets/header.php"; ?>
<?php include "../../Frontend/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$perpage = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start = ($page - 1) * $perpage;
$sql = "SELECT * from enrolltbl ORDER BY ref_studenttbl ASC limit {$start} , {$perpage} ";
$query = $db->query($sql);




?>

<section class="m-2 w-full">
    <div class="flex justify-center px-24 items-center">

        <div class="w-full overflow-x-auto">

            <a href="addUserPage.php"><button class="btn btn-success mt-2 mb-2" style="color:#fff;">เพิ่มข้อมูล</button></a>
            <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                <tbody>
                    <tr>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">รหัสนักศึกษา ชื่อ-นามสกุล</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานะ</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สาขาวิชา</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">หลักสูตร</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชั้นปี</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">กลุ่มเรียน</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500 text-center">Action</th>
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
                                    <a href="" class=" ml-auto flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#f2b118" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </a>
                                </div>

                            </td>

                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php
                                //
                                ?>
                                <a href="../functions/aprroval_std.php?stdid=<?php echo $row['no']; ?>">
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
                                </a>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php echo $row['ref_department']; ?>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php echo $row['ref_course']; ?>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['ref_years']; ?></td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['ref_stdGroups']; ?></td>
                            <td class="h-12 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 text-center text-light text-white">
                                <a href=""><button class="btn btn-warning"><i class="fa-regular fa-pen-to-square"  style="color:#fff;"></i></button></a>
                                <a href="../functions/remove_user.php?=<?php ?>"><button class="btn btn-error"><i class="fa-solid fa-user-minus"  style="color:#fff;"></i></button></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>


                </tbody>
                </form>
            </table>
            <?php
            $sql2 = "SELECT * from enrolltbl ";
            $query2 = $db->query($sql2);
            $total_record = mysqli_num_rows($query2);
            $total_page = ceil($total_record / $perpage);
            $total_pages = 1;
            ?>
            <div class="mt-2">
                <a href="admin.php?page=<?php echo $total_pages; ?>" aria-label="Next">
                    <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-left"></i></span>
                </a>
                <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <a href="admin.php?page=<?php echo $i; ?>"><button class="btn btn-ghost border bordered" style="background-color:#E3E3E3;color:gray;"><?php echo $i; ?></button></a>
                <?php } ?>
                <a href="admin.php?page=<?php echo $total_page; ?>" aria-label="Next">
                    <span aria-hidden="true" style="font-size:16px;"><i class="fa-solid fa-angles-right"></i></span>
                </a>

            </div>
        </div>
    </div>


</section>