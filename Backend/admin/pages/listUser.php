<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../db/connect.db.php";
?>
<section class="m-2 w-full">
   <!-- /* -------------------------------------------------------------------------- */
    /*                        หน้าผลการค้นหาข้อมูลนักศึกษา                        */
    /* -------------------------------------------------------------------------- */ -->




   <!-- Component: Table with hover state -->
   <div class="flex justify-center px-24 items-center">
      <div class="w-full overflow-x-auto">
         <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
            <a href=""><button class="btn btn-success text-light mb-3" style="color:#fff; ">เพิ่มผู้ใช้งาน</button></a>
            <tbody>
               <tr>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">รหัสบัตรประชาชน</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชื่อผู้ใช้</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">อีเมล์</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชื่อจริง</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">นามสกุล</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ที่อยู่</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">เบอร์</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานะ</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">รูป</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">Edit</th>
                  <!-- <select class="select select-bordered w-full max-w-xs mb-3">
                     <option disabled selected>เลือกปีการศึกษา</option>
                     <option value="2566">2566</option>
                     <option value="2565">2565</option>
                     <option value="2564">2564</option>
                     <option value="2563">2563</option>
                     <option value="2562">2562</option>
                     <option value="2561">2561</option>
                     <option value="2560">2560</option>
                     <option value="2559">2559</option>
                     <option value="2558">2558</option>
                     <option value="2557">2557</option>
                     <option value="2556">2556</option>
                     <option value="2555">2555</option>
                     <option value="2554">2554</option>
                     <option value="2553">2553</option>
                     <option value="2552">2552</option>
                     <option value="2551">2551</option>
                  </select> -->
               </tr>
               <?php

               $getUsers = "SELECT * FROM users";
               $queryUsers = $db->query($getUsers);
               while ($user = mysqli_fetch_assoc($queryUsers)) :

               ?>
                  <tr>
                     <form action="editUser.php" method="get">
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <span><?php echo $user['id_card']; ?></span>
                     </td>

                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <span><?php echo $user['username']; ?></span>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $user['email']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $user['fname']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $user['lname']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $user['address']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $user['phone']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php

                        if ($user['permission'] == 0) {
                           echo "<p style='color:red;'>Error</p>";
                        }
                        if ($user['permission'] == 1) {
                           echo "<p style='color:green;'>Aprroved</p>";
                        }
                        if ($user['permission'] == 2) {
                           echo "<p style='color:orange;'>Admin</p>";
                        }

                        ?> </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <img src="../img/<?php echo $user['img']; ?>" alt="">
                     </td> 
                     <td class="h-12 px-8 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <input type="text" value="<?php echo $user['u_id'];?>" name="userID" hidden>
                        <button type="submit" class="btn btn-warning w-full" style="color:#fff;">Edit</button>
                     </td>
                     </form>
                  </tr>
               <?php endwhile; ?>


            </tbody>
         </table>
      </div>
   </div>



</section>