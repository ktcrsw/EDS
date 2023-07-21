<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php
session_start();
include '../db/connect.db.php';
include '../../Frontend/assets/admin_nav.php';

// echo $userID;

$sql = "SELECT * FROM users";
$result = $db->query($sql);

?>
<section class="m-2 w-full">
    <div class="flex justify-center px-24 items-center">
        <div class="w-full overflow-x-auto">
            <form action="../functions/add_user.php">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h1 class="text-base font-semibold leading-7 text-gray-900" style="font-size: 22px;margin-top:2rem;">เพิ่มข้อมูลนักเรียนนักศึกษา</h1>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">รหัสนักศึกษา</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                        <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">แผนก</label>
                                <div class="mt-1 mb-2">
                                    <input type="text" name="department" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="เทคโนโลยีสารสนเทศ" disabled/>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">ระดับการศึกษา</label>
                                <div class="mt-2">
                                    <select name="years" id="years" class="select select-bordered mb-2 select-bordered w-full max-w-xs">
                                        <option selected>--- เลือกระดับการศึกษา ---</option>
                                        <option value="ปวช">ปวช</option>
                                        <option value="ปวส">ปวส</option>
                                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                                    </select>
                                </div>
                            </div>
                                                        <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">กลุ่ม</label>
                                <div class="mt-2">
                                    <select name="groups" id="groups" class="select select-bordered mb-2 select-bordered w-full max-w-xs">
                                        <option selected>--- เลือกกลุ่ม ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">ระดับปีการศึกษา</label>
                                <div class="mt-2">
                                    <select name="certificate" id="years" class="select select-bordered mb-2 select-bordered w-full max-w-xs">
                                        <option selected>--- เลือกระดับปีการศีกษา ---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">รูปประจำตัว</label>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <img src="../../Frontend/image/null_user.png" class="h-64 w-64 rounded-full"/>
                                    <input type="file" name="upload" class="file-input file-input-bordered w-full max-w-xs"></input>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">ข้อมูลส่วนตัว</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">ระบุข้อมูลนักศีกษา</p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">ชื่อจริง</label>
                                <div class="mt-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">นามสกุล</label>
                                <div class="mt-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="sex" class="block text-sm font-medium leading-6 text-gray-900">เพศ</label>
                                <div class="mt-2">
                                <select name="sex" id="years" class="select select-bordered mb-2 select-bordered w-full max-w-xs">
                                        <option selected>--- เพศ ---</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                        <option value="ไม่ระบุ">ไม่ระบุ</option>
                                    </select>                                </div>
                            </div>


                        <a href="add_user.php"><button class="btn btn-success" style="color:#fff;">บันทึกข้อมูล</button></a>
                        </div>
                    </div>

            </form>
        </div>
    </div>

</section>