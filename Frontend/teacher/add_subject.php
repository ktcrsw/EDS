<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
    include "../assets/header.php";

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>

<section class="m-3 h-[20px]">
    <!-- component 
-->

<div class="sm:px-6 w-full">
    
    <div class="px-4 md:px-10 ">
        <div class="flex items-center justify-between">
            <div class="">
                <div class="">
                    <div class="py-2  text-gray-600 ">
                        <select class="select select-info">
                            <option>- รายชื่อวิชาในระบบ -</option>
                            <?php while ($row = mysqli_fetch_assoc($data)) {
                                echo "<option>" . $row['subject_name'] . "</option>";
                            }
            
            
            
                            ?>
                        </select>
                    </div>
            
                </div>
            
            </div>
        </div>
        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">จัดการตารางเรียน</p>
        </div>

        <div class="bg-white py-4  px-4 md:px-8 xl:px-10">
            <form class="">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            ชื่อวิชา
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="ชื่อวิชา">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            หลักสูตร
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="หลักสูตร">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            ชื่อครูผู้สอน
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="ชื่อครูผู้สอน">
                        <p class="text-gray-600 text-xs italic"></p>
                    </div>
                </div>
                <a href="add_subject.php">
                    <button onclick="popuphandler(true)" class="mt-3 dropdown dropdown-top focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                        <p class="text-sm font-medium leading-none text-white">เพิ่มวิชาที่สอน</p>
                    </button>
                </a>
            </form>



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