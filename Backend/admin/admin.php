<?php session_start(); ?>
<?php include "../../components/assets/header.php"; ?>
<?php include "../../components/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$sql = "SELECT * FROM users";
$result = $db->query($sql);




?>


<div class="container">
    <h3 class="text-dark p-3">UsersData
    </h3>
    <div class="container table-responsive">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>

        <a name="" id="" class="m-5 mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="subject.php" role="button">ลงเวลาเรียน</a>


        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                <div class="grid grid-cols-3 gap-4 mb-4">
                    <div class="flex flex-row">
                        <form action="add_user.php" class="mb-1">
                            <input class="mr-20 border border-black" type="text" name="idcard" id="idcard" placeholder="ID Card">
                            <input class="mr-20 border border-black" type="text" name="username" id="username" placeholder="Username">
                            <input class="mr-20 border border-black" type="text" name="password" id="password" placeholder="Password">
                            <button class="btn btn-primary p-auto">เพิ่มข้อมูล</button>
                        </form>
                        <table class="border-collapse border border-slate-500">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">UserID</th>
                                    <th class="border border-slate-600">ID Card</th>
                                    <th class="border border-slate-600">Username</th>
                                    <th class="border border-slate-600">Email</th>
                                    <th class="border border-slate-600">Password</th>
                                    <th class="border border-slate-600">Firstname</th>
                                    <th class="border border-slate-600">Lastname</th>
                                    <th class="border border-slate-600">Permission</th>
                                    <th class="border border-slate-600">Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                    <tr>
                                        <td class="border border-slate-600"><?php echo $row['u_id']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['id_card']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['username']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['email']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['pwd']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['fname']; ?> </td>
                                        <td class="border border-slate-600"><?php echo $row['lname']; ?> </td>
                                        <td class="border border-slate-600"><?php


                                            if ($row['permission'] == 0) {
                                                echo "สถานศึกษา";
                                            }
                                            if ($row['permission'] == 1) {
                                                echo "ครู";
                                            }
                                            if ($row['permission'] == 2) {
                                                echo "นักเรียน";
                                            }

                                            ?> </td>
                                        <td class="border border-slate-600"><input name="id" id="id" placeholder="<?php echo $row['u_id']; ?>" hidden></td>
                                        <td class="border border-slate-600"><a href="del_user.php?=<?php echo $row['u_id']; ?>"><button class="btn btn-danger p-auto">ลบข้อมูล</button></a>

                                        </td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>