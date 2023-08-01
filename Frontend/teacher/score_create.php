<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$subjectStuID = $_SESSION['subjectStuID'];
$teacherID = $_SESSION['UserID'];



$stds = "SELECT * FROM tbl_schedule WHERE schedule_id = '$subjectStuID'";
$result = $db->query($stds);


$getScore = "SELECT * FROM createscore WHERE createScoreTeacherID = '$teacherID' AND createScoreSubjectID = '$subjectStuID'";
$queryGetScore = $db->query($getScore);

?>
<?php while ($score = mysqli_fetch_array($queryGetScore)) {

$mindScore = $score['createScoreMind'];
$theoryScore = $score['createScoreTheory'];
$carryScore = $score['createScoreCarry'];
$finalScore = $score['createScoreFinal'];
$startDate = $score['createScoreStartDate'];
$endDate = $score['createScoreEndDate'];
} ?>
<div class="w-full ">
    <div class="flex p-8">
        <div class="w-1/3 h-screen  p-4 flex justify-center">
            <div>
            <form action="../../Backend/functions/createScore.php" method="post">

                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <div class="flex-row">
                        <div>
                            <span>รหัสวิชาเรียน : 20001-000<?php echo $row['schedule_id']; ?></span>
                            <span> </span>
                        </div>
                        <div>
                            <span>ชื่อวิชาเรียน : </span>
                            <span><?php echo $row['schedule_title']; ?></span>
                        </div>
                        <span>กำหนดสัดส่วนคะแนนเป็นร้อยละ(%) จาก 100%</span>
                        <div class="flex pb-2">
                            <div class="p-4 rounded-md text-white bg-green-400">จิตพิสัย</div>
                            <input id="mindScore" name="mind" type="number" min="0" max="20" placeholder="<?php echo $mindScore;?>"  class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            <div class="flex items-center text-lg ">%</div>
                        </div>
                        <div class="flex pb-2">
                            <div class="p-4 rounded-md text-white bg-pink-500">ทฤษฎี</div>
                            <input id="theoryScore" type="number" min="0" max="100"  placeholder="<?php echo $theoryScore;?>" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            <div class="flex items-center text-lg ">%</div>
                        </div>
                        <div class="flex pb-2">
                            <div class="p-4 rounded-md text-white bg-orange-400">ปฏิบัติ</div>
                            <input id="carryOutScore" type="number" min="0" max="100"  placeholder="<?php echo $carryScore;?>" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            <div class="flex items-center text-lg ">%</div>
                        </div>
                        <div class="flex pb-2">
                            <div class="p-4 rounded-md text-white bg-blue-400">สอบปลายภาค</div>
                            <input id="finalThermScore" type="number" min="0" max="100" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            <div class="flex items-center text-lg ">%</div>
                        </div>
                        <label class="text-[22px] font-semibold">กำหนดหน่วยการสอน</label>

                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="score-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">คะแนนเก็บระหว่างภาค (ุ60%)</button>
                                </li>
                                <li class="mr-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="final-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">คะแนนสอบปลายภาค (ุ60%)</button>
                                </li>

                            </ul>
                        </div>



                        <div id="myTabContent">
                                <div class="hidden  " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="pb-6">
                                        <span>หน่วยการสอน :
                                            <span class="border p-1 rounded-lg border-gray-300">หน่วยการเรียนที่ 1</span>
                                        </span>
                                    </div>
                                    <div class="pb-6">
                                        <span>คะแนนจิตพิสัย :
                                            <input id="score" name="mind" type="text" placeholder="0" class=" w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 ">
                                        </span>
                                    </div>
                                    <div class="pb-6">
                                        <span>คะแนนภาคทฤษฎี :
                                            <input id="score" name="theory" type="text" placeholder="0" class=" w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 ">
                                        </span>
                                    </div>
                                    <div class="pb-6">
                                        <span>คะแนนภาคปฏิบัติ :
                                            <input id="score" name="carry" type="text" placeholder="0" class=" w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 ">
                                        </span>


                                    </div>
                                    <div class="pb-6">
                                        <label for="birthday">วันที่เริ่มสอน</label>
                                        <input type="date" id="date" class="rounded-lg border-gray-300" name="startdate">
                                    </div>
                                    <div class="pb-6">
                                        <label for="birthday">วันสิ้นสุดการสอน</label>
                                        <input type="date" id="date" class="rounded-lg border-gray-300" name="enddate">
                                    </div>
                                    <button type="submit" class="px-4 py-2  rounded-lg btn btn-primary">ยืนยัน</button>
                                    <div class="hidden  " id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    </div>
                                </div>
                            </form>

                            <form action="../../Backend/function/createScoreFinal.php" method="post">
                                <div class="hidden  rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="pb-6">
                                        <span>ชื่อรายการ :
                                            <span class="border p-1 rounded-lg border-gray-300">สอบปลายภาค</span>
                                        </span>
                                    </div>
                                    <div class="pb-2">
                                        <span>คะแนน :
                                            <input id="score" type="text" placeholder="0" name="final" class=" w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 ">
                                        </span>
                                    </div>
                                    <div class="pb-6">
                                        <label for="birthday">วันที่เริ่มสอบ</label>
                                        <input type="date" id="date" class="rounded-lg border-gray-300" name="Startfinal">
                                    </div>
                                    <div class="pb-6">
                                        <label for="birthday">วันสิ้นสุดการสอบ</label>
                                        <input type="date" id="date" class="rounded-lg border-gray-300" name="Endfinal">
                                    </div>
                                    <a href="" class="px-4 py-2  rounded-lg bg-blue-500 text-white">ยืนยัน</a>
                                    <div class="hidden  " id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endwhile;     ?>
                    </div>
            </div>
        </div>




        <div class="w-full h-screen  ">
            <div class="w-full overflow-x-auto p-4">
                <div class="flex mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#ff8e00" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                        <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                    </svg>
                    <span class="text-[20px] font-medium">สร้างบันทึกคะแนน</span>
                </div>
                <div>
                    <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                        <tbody>
                            <tr>
                                <th scope="col" class="h-12 px-6 text-center text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-gray-600 bg-gray-300">จิตพิสัย 20%</th>

                                <th scope="col" class="h-12 px-6 text-center text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-gray-600 bg-gray-300" colspan="2">คะแนนระหว่างภาค 60%</th>


                                <th scope="col" class="h-12 px-6 text-lg text-center font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-gray-600 bg-gray-300">คะแนนสอบ<br>ปลายภาค 20%</th>


                            </tr>
                            <tr>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">จิตพิสัย 20%</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">ภาคทฤษฏี 20%</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">ภาคปฏิบัติ 40%</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">สอบปลายภาค 20%</th>

                            </tr>
                            
                            <tr class="transition-colors duration-300 hover:bg-slate-50" a>
                                <td class="h-12 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <div class="w-full h-12 flex bg-[#ffffe8]">
                                        <div class="w-full p-2 text-16 font-semibold">จิตพิสัย</div>
                                        <div class="w-1/3 bg-green-400 flex items-center justify-center">
                                            <span class="text-white font-medium text-lg"><?php echo $mindScore; ?></span>
                                        </div>

                                    </div>
                                </td>
                                <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <div class="w-full   h-full flex bg-[#ffffe8]">
                                        <div class="w-full p-2 text-16 font-semibold flex-col">
                                            <div>หน่วยการเรียนที่ 1</div>
                                            <span><?php echo $startDate; ?> - <?php echo $endDate; ?></span>
                                        </div>
                                        <div class="w-1/3 bg-pink-500 flex items-center justify-center">
                                            <span class="text-white font-medium text-lg"><?php echo $theoryScore; ?></span>
                                        </div>

                                    </div>
                                </td>
                                <td class="h-12 px-6 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <div class="w-full   h-full flex bg-[#ffffe8]">
                                        <div class="w-full p-2 text-16 font-semibold flex-col">
                                            <div>หน่วยการเรียนที่ 2</div>
                                            <span><?php echo $startDate; ?> - <?php echo $endDate; ?></span>
                                        </div>
                                        <div class="w-1/3 bg-orange-400 flex items-center justify-center">
                                            <span class="text-white font-medium text-lg"><?php echo $carryScore; ?></span>
                                        </div>

                                    </div>
                                </td>
                                <td class="h-12 p-2 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                    <div class="w-full h-12 flex bg-[#ffffe8]">
                                        <div class="w-full p-2 text-16 font-semibold">ปลายภาค</div>
                                        <div class="w-1/3 bg-blue-400 flex items-center justify-center">
                                            <span class="text-white font-medium text-lg"><?php echo $finalScore; ?></span>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-green-400">20 คะแนน</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-pink-500">20 คะแนน</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-orange-400">40 คะแนน</th>
                                <th scope="col" class="h-12 px-6 text-lg font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-white bg-blue-400">20 คะแนน</th>

                            </tr>
                        </tbody>
                    </table>


                    <div class="py-4">
                        <a href="./score_list.php" class="px-4 py-2  rounded-lg bg-blue-500 text-white">เสร็จสิ้น</a>
                        <button id="clear" class="px-4 py-2  rounded-lg bg-red-500 text-white" value="clear" onclick="clearInput()">ลบทั้งหมด</button>
                        <a href="./data_management.php" class="px-4 py-2  rounded-lg bg-blue-300 text-white">ย้อนกลับ</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var mindScore = document.getElementById('mindScore');
        var theoryScore = document.getElementById('theoryScore');
        var carryOutScore = document.getElementById('carryOutScore');
        var finalThermScore = document.getElementById('finalThermScore');
        $('#mindScore').on('input', function(evt) {
            var value = evt.target.value

            if (value.length == 20) {
                $('#theoryScore').val(20);
                $('#carryOutScore').val(20);
                $('#finalThermScore').val(40);
                return
            }
        })


        function clearInput() {
            var getValue = document.getElementById("mindScore");
            if (getValue.value != "") {
                getValue.value = "";
            }
            var getValue = document.getElementById("theoryScore");
            if (getValue.value != "") {
                getValue.value = "";
            }
            var getValue = document.getElementById("carryOutScore");
            if (getValue.value != "") {
                getValue.value = "";
            }
            var getValue = document.getElementById("finalThermScore");
            if (getValue.value != "") {
                getValue.value = "";
            }
        }
    </script>