<?php include "header.php"; 

include '../../Backend/db/connect.db.php';

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);

$schdule = "SELECT * FROM classschedule";
$result = $db->query($schdule);
?>

<section class="m-3">
      <!-- component 
-->

      <div class="sm:px-6 w-full">

            <div class="px-4 md:px-10 ">
                  <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">จัดการตารางเรียน</p>
                  </div>
            </div>

            <div class="bg-white py-4  px-4 md:px-8 xl:px-10">
                  <form action="../../Backend/functions/data_management.php" method="post">

                        <label for="years" class="block mb-2 text-md font-medium text-gray-900 dark:text-dark mt-2">ชั้นปี</label>
                        <select id="years" style="max-width:25%;" class="p-3 bg-gray-50 border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-light-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected>ปวช.1</option>
                              <option>ปวช.2</option>
                              <option>ปวช.3</option>
                              <option>ปวส.1</option>
                              <option>ปวส.2</option>
                        </select>

                        <label for="groups" class="block mt-2 text-md font-medium text-gray-900 dark:text-dark">เลือกกลุ่มที่สอน</label>
                        <select id="groups" style="max-width:25%;" class="p-3 bg-gray-50 border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-light-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                        </select>


                        <label for="subjects" class="block mb-2 text-md font-medium text-gray-900 dark:text-dark mt-2">เลือกวิชา</label>
                        <select id="subjects" style="max-width:25%;" class="p-3 bg-gray-50 border border-gray-300 text-dark-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-light-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected>- เลือกวิชา -</option>
                              <?php while ($sub = mysqli_fetch_assoc($data)) : ?>
                                    <option><?php echo $sub['subject_name']; ?></option>
                              <?php endwhile; ?>
                        </select>
                  </form>

                  <div class="sm:flex items-center justify-between">
                        <div class="flex items-center">
                              <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                                    <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                          <p>ตารางเรียนนักเรียน</p>
                                    </div>
                              </a>
                              <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                                    <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                          <p>ตารางเรียนสำหรับครู</p>
                                    </div>
                              </a>
                              <a href="add_subject.php">
                                    <button onclick="popuphandler(true)" class="dropdown dropdown-top focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                          <p class="text-sm font-medium leading-none text-white">เพิ่มวิชาที่สอน</p>
                                    </button>
                              </a>

                        </div>
                        <a href="add_workhour.php">
                              <button onclick="popuphandler(true)" class="dropdown dropdown-top focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                    <p class="text-sm font-medium leading-none text-white">ลงเวลาเรียน</p>
                              </button>
                        </a>
                  </div>
                        <table class="table m-3 border-collapse border border-slate-500">
                              <!-- head -->
                              <thead>
                                    <tr>
                                          <th class="border border-slate-600">ก่อนคาบแรก</th>
                                          <th class="border border-slate-600">คาบที่ 1 <br>8.30 - 9.30 </th>
                                          <th class="border border-slate-600">คาบที่ 2 <br>9.30 - 10.30 </th>
                                          <th class="border border-slate-600">คาบที่ 3 <br>10.30 - 11.30 </th>
                                          <th class="border border-slate-600">คาบที่ 4 <br>11.30 - 12.30 </th>
                                          <th class="border border-slate-600">คาบที่ 5 <br>12.30 - 13.30 </th>
                                          <th class="border border-slate-600">คาบที่ 6 <br>13.30 - 14.30 </th>
                                          <th class="border border-slate-600">คาบที่ 7 <br>14.30 - 15.30 </th>
                                          <th class="border border-slate-600">คาบที่ 8 <br>15.30 - 16.30 </th>
                                          <th class="border border-slate-600">คาบที่ 9 <br>16.30 - 17.30 </th>
                                          <th class="border border-slate-600">คาบที่ 10 <br>17.30 - 18.30 </th>
                                    </tr>
                              </thead>
                              <tbody class="border-collapse border border-slate-500">
                                    <!-- row 1 -->
                                    <tr>
                                          <th class="table-th-mobile">จันทร์</th>
                                          <td class="">
                                                <?php
                                                // Content for cell
                                                ?>
                                          </td>
                                    </tr>
                                    <!-- row 2 -->
                                    <tr>
                                          <th class="table-th-mobile">อังคาร</th>
                                          <td class="">
                                                <?php
                                                // Content for cell
                                                ?>
                                          </td>
                                    </tr>
                                    <!-- row 3 -->
                                    <tr>
                                          <th class="table-th-mobile">พุธ</th>
                                          <td class="">
                                                <?php
                                                // Content for cell
                                                ?>
                                          </td>
                                    </tr>
                                    <!-- row 4 -->
                                    <tr>
                                          <th class="table-th-mobile">พฤหัสบดี</th>
                                          <td class="">
                                                <?php
                                                // Content for cell
                                                ?>
                                          </td>
                                    </tr>
                                    <!-- row 5 -->
                                    <tr>
                                          <th class="table-th-mobile">ศุกร์</th>
                                          <td class="">
                                                <?php
                                                // Content for cell
                                                ?>
                                          </td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
            </div>
            <style>
                  .checkbox:checked+.check-icon {
                        display: flex;
                  }
            </style>
            <script>
                  function dropdownFunction(element) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                        list.classList.add("target");
                        for (i = 0; i < dropdowns.length; i++) {
                              if (!dropdowns[i].classList.contains("target")) {
                                    dropdowns[i].classList.add("hidden");
                              }
                        }
                        list.classList.toggle("hidden");
                  }
            </script>
</section>