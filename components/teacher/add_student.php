<?php session_start(); ?>
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
    <a href=""><button class="btn btn-primary">เพิ่มข้อมูลนักเรียน</button></a>

    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <th>รหัสนักศึกษา - รูปประจำตัว</th>
                <th>ชื่อ - สกุล</th>
                <th>ห้อง</th>
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
                        <div>
                            <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
                        </div>
                        <div>
                            <div class="font-bold"><input type="text" placeholder="รหัสนักศึกษา" class="input input-bordered w-full max-w-xs" /></div>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="badge badge-ghost badge-sm"><input type="text" placeholder="ชื่อสกุล" class="input input-bordered w-full max-w-xs" /></span>
                </td>
                <td>
                    <input type="text" placeholder="ห้อง" class="input input-bordered w-full max-w-xs" />
                </td>
                <th>
                    <button class="btn btn-ghost btn-xs">แก้ไขข้อมูล</button>
                </th>
            </tr>

        </tbody>
    </table>
    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>รหัสนักศึกษา - รูปประจำตัว</th>
        <th>ชื่อ - สกุล</th>
        <th>ห้อง</th>
        <th>แก้ไชช้อมูล</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <?php 
      
      while ($row = mysqli_fetch_assoc($query)):
      
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
                <img src="../image/<?php echo $row['ref_stdImg'];?>" alt="" />
              </div>
            </div>
            <div>
              <div class="font-bold"><?php echo $row['ref_studenttbl'];?></div>
              <div class="text-sm opacity-50"><?php echo $row['ref_stdname'];?></div>
            </div>
          </div>
        </td>
        <td>
          <span class="badge badge-ghost badge-sm"><?php echo $row['ref_stdname'];?></span>
        </td>
        <td><?php echo $row['ref_stdroom'];?></td>
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

</div>
