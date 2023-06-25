<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

#enrolltbl is saved list student 



// if($_SESSION != $_SESSION['IdCard'])

?>
<div class="overflow-x-auto m-3">
    <a href=""><button class="btn btn-primary">เพิ่มข้อมูลครู</button></a>
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <th>รหัสบัตรประชาชน - รูปประจำตัว</th>
                <th>ชื่อ - สกุล</th>
                <th>สถานะ</th>
                <th>แก้ไชช้อมูล</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->

            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <td>
                    <div class="flex items-center space-x-3">
                        <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="font-bold"><?php //echo $row['ref_studenttbl']; 
                                                    ?></div>
                            <div class="text-sm opacity-50"><?php //echo $row['ref_stdname']; 
                                                            ?></div>
                        </div>
                    </div>
                </td>
                <td>
                    <select class="select select-bordered w-full max-w-xs">
                        <span class="badge badge-ghost badge-sm"> <?php

                                                                    while ($row = mysqli_fetch_assoc($query)) :

                                                                    ?>
                                <option selected><?php echo $row['ref_stdname']; ?></option>
                            <?php endwhile; ?>
                        </span>
                    </select>

                </td>
                <td></td>
                <th>
                    <button class="btn btn-ghost btn-xs"></button>
                </th>
            </tr>
        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th></th>
                <th>รหัสนักศึกษา - รูปประจำตัว</th>
                <th>ชื่อ - สกุล</th>
                <th>ห้อง</th>
                <th>แก้ไชช้อมูล</th>
                <th></th>
            </tr>
        </tfoot>

    </table>
</div>