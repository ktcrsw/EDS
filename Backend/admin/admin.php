<?php session_start(); ?>
<?php include "../../components/assets/header_bt.php"; ?>
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
            <input class="border border-black" type="text" name="idcard" id="idcard" placeholder="ID Card">
            <input class="border border-black" type="text" name="username" id="username" placeholder="Username">
            <input class="border border-black" type="text" name="password" id="password" placeholder="Password">
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
                        <td><?php 
                        
                        
                            if($row['permission'] == 0){
                                echo "สถานศึกษา";
                            }
                            if($row['permission'] == 1){
                                echo "ครู"; 
                            }
                            if($row['permission'] == 2){
                                echo "นักเรียน";
                            }
                        
                        ?> </td>
                        <td><input name="id" id="id" placeholder="<?php echo $row['u_id'];?>" hidden></td>
                        <td><a href="del_user.php?=<?php echo $row['u_id'];?>"><button class="btn btn-danger p-auto">ลบข้อมูล</button></a> 

                        </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>