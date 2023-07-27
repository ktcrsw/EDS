<?php
session_start();
include '../db/connect.db.php';
include '../../Frontend/assets/admin_nav.php';

$userID = $_GET['userID'];
// echo $userID;

$sql = "SELECT * FROM users WHERE u_id = '$userID'";
$result = $db->query($sql);

?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<section class="m-2 w-full">
    <!-- /* -------------------------------------------------------------------------- */
    /*                        หน้าผลการค้นหาข้อมูลนักศึกษา                        */
    /* -------------------------------------------------------------------------- */ -->




    <!-- Component: Table with hover state -->
    <div class="flex justify-center px-24 items-center">
        <div class="w-full overflow-x-auto">
            <form action="../functions/updateUser.php" method="post" enctype="multipart/form-data">
                <?php while($userResult = mysqli_fetch_array($result)): ?>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">แก้ไขข้อมูลของ <?php echo $userResult['fname']. "&nbsp;". $userResult['lname'];?></h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                        <input type="text" name="uid" id="id" autocomplete="id" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['u_id'];?>" value="<?php echo $userResult['u_id'];?>" hidden>
                                        <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['username'];?>" value="<?php echo $userResult['username'];?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">ที่อยู่</label>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?php echo $userResult['username'];?>"><?php echo "&nbsp;". $userResult['address'];?></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">แก้ไขที่อยู่่</p>
                            </div>

                            <div class="col-span-full">
                                <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">รูปประจำตัว</label>
                                <div class="mt-2 flex items-center gap-x-3">
                                    <img src="img/<?php echo $userResult['img'];?>" class="h-64 w-64 rounded-full" id="img"/>
                                    <input type="file" name="upload" class="file-input file-input-bordered w-full max-w-xs" id="upload"></input>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">ข้อมูลส่วนตัว</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">ก่อนแก้ไขข้อมูลส่วนตัวตรวจเช็คข้อมูลให้ดีก่อน</p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">ชื่อจริง</label>
                                <div class="mt-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['fname'];?>" value="<?php echo $userResult['fname'];?>">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">นามสกุล</label>
                                <div class="mt-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['lname'];?>" value="<?php echo $userResult['lname'];?>"/>
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">อีเมล์</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['email'];?>" value="<?php echo $userResult['email'];?>">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">เบอร์มือถือ</label>
                                <div class="mt-2">
                                    <input type="text" name="phone" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="<?php echo $userResult['phone'];?>" value="<?php echo $userResult['phone'];?>">
                                    
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <input type="submit" value="บันทึกการแก้ไข " class="btn btn-success" style="color:#fff;">
                    
                <?php endwhile; ?>
            </form>
        </div>
    </div>

</section>
<script>
    
    $(document).ready(() =>{
        $('#upload').change(function(){ 
            const file = this.files[0];
            if(file){
                let reader = new FileReader();
                reader.onload = function (event){
                    $('#img').attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });

</script>