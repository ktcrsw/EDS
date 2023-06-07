<?php session_start(); ?>
<?php include "../../components/assets/header.php"; ?>
<?php include "../../components/assets/admin_nav.php"; ?>
<?php include "../db/connect.db.php";


$sql = "SELECT * FROM users";
$result = $db->query($sql);




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
      <?php 
      
      while ($row = mysqli_fetch_assoc($result)):
      
      ?>
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
                <img src="./img/<?php echo $row['img'];?>" alt="" />
              </div>
            </div>
            <div>
              <div class="font-bold"><?php echo $row['id_card'];?></div>
              <div class="text-sm opacity-50"><?php echo $row['fname'] . "" . $row['lname'];?></div>
            </div>
          </div>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['fname'] . "" . $row['lname'];?></span>
        </td>
        <td><?php 
          
          if($row['permission'] == 1){
            echo "อนุมัติ";
          }
          
          if($row['permission'] == 0){
            echo "ไม่อนุมัติ";
          }
          
          
          ?></td>
        <th>
          <button class="btn btn-ghost btn-xs">แก้ไขข้อมูล</button>
        </th>
      </tr>
      <?php endwhile; ?>
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