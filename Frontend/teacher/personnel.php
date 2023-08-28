<?php session_start(); ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";


$sql = "SELECT * FROM enrolltbl";
$query = $db->query($sql);

$sql = "SELECT * FROM users";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>


<div class="w-full p-4 flex flex-col">

    <span class="text-xl mb-4 flex items-center justify-center">ขออนุญาติเดินทางไปราชการ</span>
    <div class="flex justify-center mt-4 items-center ">
        <form action="../../Backend/functions/saveBudgetApproval.php" method="post">
            <div class="  bg-[#e9f2f4] rounded-lg p-10">


                <div class=" px-4 py-3 text-sm border rounded border-emerald-100 bg-emerald-50 text-emerald-500" role="alert">
                    <p>ผู้ขออนุมัติ</p>
                </div>
                <div class="flex gap-4 mb-4 mt-4 ]">
                    <div class=" items-center">
                        <div class="mr-2">
                            <span class="text-[14px]">ชื่อ :</span>
                        </div>
                        <div class="relative w-64 ">
                            <div class="mx-auto max-w-xs">
                                <input type="text" class="block w-full h-10 rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="ชื่อจริง" name="name" />
                            </div>
                        </div>
                    </div>
                    <div class=" items-center">
                        <div class="mr-2">
                            <span class="text-[14px]">นามสกุล :</span>
                        </div>
                        <div class="relative w-64 ">
                            <div class="mx-auto max-w-xs">
                                <input type="text" class="block w-full h-10 rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="นามสกุล" name="lname" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" items-center mb-4">
                    <div class="mr-2">
                        <span class="text-[14px]">ตำแหน่ง :</span>
                    </div>
                    <div class="relative w-64 ">
                        <div class="mx-auto max-w-xs">
                            <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="" name="position" required />
                        </div>
                    </div>
                </div>
                <div class="items-center mb-4">
                    <div class="mr-2">
                    </div>
                    <div class="relative w-64 ">
                        <div class="mx-auto max-w-xs">
                        </div>

                    </div>

                </div>
                <div class=" px-4 py-3 text-sm border rounded border-emerald-100 bg-emerald-50 text-emerald-500" role="alert">
                    <p>ข้อมูลการเดินทาง</p>
                </div>
                <div class=" items-center mt-4 mb-4">
                    <div class="mr-2">
                        <span class="text-[14px]">พร้อมด้วย :</span>
                    </div>
                    <div class="relative w-64 ">
                        <div class="mx-auto max-w-xs">
                            <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="" name="with_person" required />
                        </div>
                    </div>
                </div>
                <div class="  mb-4">
                    <div class="mr-2">
                        <span class="text-[14px]">เรื่อง :</span>
                    </div>
                    <div class="relative w-64 ">
                        <div class="mx-auto max-w-xs">
                            <textarea type="text" class="block w-full  h-32 rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring  disabled:bg-gray-50 disabled:text-gray-500" rows='3' placeholder="" name="details" required /></textarea>
                        </div>
                    </div>
                </div>
                <div class=" items-center mt-4 mb-4">
                    <div class="mr-2">
                        <span class="text-[14px]">สถานที่ไปราชการ :</span>
                    </div>
                    <div class="relative w-64 ">
                        <div class="mx-auto max-w-xs">
                            <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="" name="location" required />
                        </div>
                    </div>
                </div>


                <div class="flex items-center mb-4 w-full">
                    <span>จังหวัด : </span>
                    <div class=" w-64 ">
                        <select id="example1" name="provinces" class="block ml-2 w-full h-10 rounded-md border-gray-300 shadow-sm ">
                        <?php 
                        
                        $getProvince = "SELECT * FROM provinces ";
                        $queryProvice = $db->query($getProvince);
                        while($pv = mysqli_fetch_assoc($queryProvice)){
                        
                        ?>
                            <option value="<?php echo $pv['id'];?>" class="ml-3 py-2" name="provinces"><?php echo $pv['name_th'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="flex items-center ml-[5px] w-full">
                    <span>อำเภอ : </span>
                    <div class=" w-64 ">
                    <input type="text" class="block ml-2 w-full h-10 rounded-md border-gray-300 shadow-sm" placeholder="" name="aumphures"  required />
                    </div>
                </div>
                <div class="mt-4">
                        <label for="birthday">ตั้งแต่วันที่ : </label>
                        <input type="date" id="birthday" class="border border-white rounded-md" name="startdate">

            

                </div>
                <div class="mt-4 ml-[20px]">
                        <label for="birthday">ถึงวันที่ : </label>
                        <input type="date" id="birthday" class="border border-white rounded-md" name="enddate">

            
                
                </div>
                <fieldset class=" gap-10">
                    <legend class="mb-2 ">งบประมาณที่ใช้ :</legend>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="1" id="huey" name="budget" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="huey">
                            งบประมาณแผนก
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-1 description-1" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="2" id="dewey" name="budget" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="dewey">
                            งบประมาณสถานศึกษา
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-2 description-2" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="3" id="louie" name="budget" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="louie">
                            งบประมาณส่วนตัว
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-3 description-3" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                </fieldset>


                <fieldset class=" mt-4 gap-10">
                    <legend class="mb-2  ">ยานพาหนะในการเดินทาง :</legend>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="1" id="huey" name="vehicles" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="huey">
                            รถยนต์ราชการ
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-1 description-1" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="2" id="dewey" name="vehicles" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="dewey">
                            รถยนต์ส่วนตัว
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-2 description-2" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input class="w-4 h-4 transition-colors bg-white border-2 rounded-full appearance-none cursor-pointer peer border-slate-500 checked:border-emerald-500 checked:bg-emerald-500 checked:hover:border-emerald-600 checked:hover:bg-emerald-600 focus:outline-none checked:focus:border-emerald-700 checked:focus:bg-emerald-700 focus-visible:outline-none disabled:cursor-not-allowed disabled:border-slate-100 disabled:bg-slate-50" type="radio" value="3" id="louie" name="vehicles" />
                        <label class="pl-2 cursor-pointer text-slate-500 peer-disabled:cursor-not-allowed peer-disabled:text-slate-400" for="louie">
                            เดินทางร่วมกับหน่วยงานอื่น
                        </label>
                        <svg class="absolute left-0 w-4 h-4 transition-all duration-300 scale-50 opacity-0 pointer-events-none fill-white peer-checked:scale-100 peer-checked:opacity-100 peer-disabled:cursor-not-allowed" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title-3 description-3" role="graphics-symbol">

                            <circle cx="8" cy="8" r="4" />
                        </svg>
                    </div>
                </fieldset>

                

                </div>
                <div class="flex justify-center mt-8">
                    <button class="inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none">
                        <span>บันทึกข้อมูล</span>
                    </button>
                </div>
            </div>
        </form>




    </div>
</div>