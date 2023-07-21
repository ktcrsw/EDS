<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../db/connect.db.php";
?>
<section class="m-2 w-full">
   <!-- /* -------------------------------------------------------------------------- */
    /*                        หน้าผลการค้นหาข้อมูลนักศึกษา                        */
    /* -------------------------------------------------------------------------- */ -->




   <!-- Component: Table with hover state -->
   <div class="flex justify-center px-24 items-center">
      <div class="w-full overflow-x-auto">
         <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
            <tbody>
               <tr>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชื่อเอกสาร</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานะ</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">รายละเอียดเบื้องต้น</th>
                  <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ปีการศึกษา</th>
                  <select class="select select-bordered w-full max-w-xs mb-3">
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
                  </select>
                  <a href="./addFile.php"><button class="btn btn-success ml-2" style="color:#fff;">เพิ่มเอกสาร</button></a>
               </tr>
               <?php

               $getFiles = "SELECT * FROM files";
               $queryFiles = $db->query($getFiles);
               while ($file = mysqli_fetch_assoc($queryFiles)) :

               ?>
                  <tr>
                     <td class="h-16 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <div class="flex">
                           <div class="flex flex-col ml-2">
                              <span class="text-[16px] font-semibold"></span>
                              <span><?php echo $file['fileName']; ?></span>
                           </div>
                           <a href="../../Backend/files/<?php echo $file['filesLinks']; ?>" class=" ml-auto flex items-center">
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                                 <line fill="none" stroke="#A5A5A5" stroke-width="2" stroke-miterlimit="10" x1="25" y1="28" x2="7" y2="28" />
                                 <line fill="none" stroke="#A5A5A5" stroke-width="2" stroke-miterlimit="10" x1="16" y1="23" x2="16" y2="4" />
                                 <polyline fill="none" stroke="#A5A5A5" stroke-width="2" stroke-miterlimit="10" points="9,16 16,23 23,16 " />
                              </svg>
                           </a>
                        </div>

                     </td>

                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php

                        if ($file['fileStatus'] == 0) {
                           echo "<p style='color:red;'>ไม่พร้อมดาวน์โหลด</p>";
                        }
                        if ($file['fileStatus'] == 1) {
                           echo "<p style='color:green;'>พร้อมดาวน์โหลด</p>";
                        }

                        ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $file['fileDescription']; ?>
                     </td>
                     <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                        <?php echo $file['fileYears']; ?>
                     </td>
                  </tr>
               <?php endwhile; ?>


            </tbody>
         </table>
      </div>
   </div>



</section>