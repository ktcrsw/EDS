<?php include "../../components/assets/header.php"; ?>
<?php include "../../components/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$sql = "SELECT * FROM users";
$result = $db->query($sql);




?>
<link rel="stylesheet" href="../../components/assets/admin.css">


<div class="container">
    <h3 class="text-dark p-3">UsersData
    </h3>
    <div class="container table-responsive">
        <form action="add_user.php" class="mb-1">
            <input type="text" name="idcard" id="idcard">
            <input type="text" name="username" id="username">
            <input type="text" name="password" id="password">
            <button class="btn btn-primary p-auto">เพิ่มข้อมูล</button>
        </form>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>UserID</th>
                    <th>ID Card</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Permission</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['u_id']; ?> </td>
                        <td><?php echo $row['id_card']; ?> </td>
                        <td><?php echo $row['username']; ?> </td>
                        <td><?php echo $row['email']; ?> </td>
                        <td><?php echo $row['pwd']; ?> </td>
                        <td><?php echo $row['fname']; ?> </td>
                        <td><?php echo $row['lname']; ?> </td>
                        <td><?php echo $row['permission']; ?> </td>
                        <td> <button class="btn btn-danger p-auto">ลบข้อมูล</button>
                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>