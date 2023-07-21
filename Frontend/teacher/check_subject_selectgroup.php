<?php

include '../../Backend/db/connect.db.php';
$teacherID = $_SESSION['UserID'];
$subjectList = "SELECT * FROM tbl_schedule WHERE schedule_teacherID = $teacherID";
$resultSubjectList = $db->query($subjectList);

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>


  <div class="flex justify-center px-24">
    <div class="w-full overflow-x-auto">
      <div class="flex mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
          <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
          <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
        </svg>
        <span class="text-[20px] font-medium">เลือกกลุ่มเรียนเพื่อบันทึกเข้ารายวิชา</span>
      </div>
      <div>
        <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
          <tbody>
            <tr>
              <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">ชื่อกลุ่มที่สอน</th>
              <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">กลุ่มที่สอน</th>
              <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">วิชาที่เรียน</th>
              <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">อาจารย์</th>
              <th scope="col" class="h-12 px-1 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100"></th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($resultSubjectList)) : ?>
              <tr class="transition-colors duration-300 hover:bg-slate-50" a>
                <form action="../../Backend/api/studentData_Module/listStudentCheck.php" method="get">
                  <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['schedule_detail'] . "&nbsp;" . "เทคโนโลยีสารสนเทศ"; ?></td>
                  <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['schedule_classYears'] . "/" . $row['schedule_classGroup']; ?></td>
                  <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['schedule_title']; ?></td>
                  <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><?php echo $row['schedule_teacherName']; ?></td>
                  <input type="text" name="year" value="<?php echo $row['schedule_classYears']; ?>" hidden>
                  <input type="text" name="group" value="<?php echo $row['schedule_classGroup'];; ?>" hidden>
                  <input type="text" name="subID" value="<?php echo $row['schedule_id'];; ?>" hidden>

                  <td class="h-12 px-1 text-sm transitions duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 "><button type="submit" class=" ml-auto flex items-center" type="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#f2b118" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    </button>
                  </td>
                </form>
              </tr>
            <?php endwhile; ?>

          </tbody>
        </table>
      </div>
    </div>


  </div>