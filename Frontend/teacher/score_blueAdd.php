<?php session_start(); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";
include "../assets/teacher_nav.php";



?>

<div class="w-full">
    <div class="p-8 flex-row">
      
        <label for="" class="font-semibold">ใบงานที่ : </label>
        <span>จิตพิสัย</span>

    
        <div class="flex items-center gap-2 ml-4 pb-2">
            <label for="">คะแนน</label>
            <input id="score" type="text" placeholder="20" disabled class="block w-32 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">

        </div>
        <div class="w-full px-4 py-3 text-sm border text-center rounded bg-green-400 text-white" role="alert">
  <p>สอบปลายภาค (20)</p>
</div>
        <table class="w-full mt-4 text-left border border-separate rounded border-slate-200" cellspacing="0">
            <tbody>
                <tr>
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        1
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        2
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        3
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        4
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        5
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 

                </tr>
                <tr>
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        6
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        7
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        8
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                        9
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 
                    <th scope="col" class="h-full px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
                        <div class="flex gap-2 py-3">
                            <div class="avatar">
                                <div class="w-24 rounded-full">
                                    <img src="https://hips.hearstapps.com/esquire/assets/16/38/1474665651-breaking-bad.png" />
                                </div>
                            </div>
                            <div class="flex-col ">
                                <div>
                                    <span class="inline-flex items-center justify-center gap-1 rounded-full bg-emerald-500 px-1.5 text-sm text-white">
                                      10
                                        <span class="sr-only"></span>
                                    </span class="font-semibold ">64209010033</div>
                                    <div class="gap-2">
                                    <span class="ml-4 ">นายบงกชเพชร ยอดกระโทก</span>
                                    <input id="score" type="text" placeholder="0" class="block w-16 px-4 py-2 mt-2 ml-4  text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    </div>
                                    
                            </div>
                        </div>
                    </th>
                 

                </tr>
                


            </tbody>
        </table>
<div class="pt-4">
<a href="./score_list.php" class="px-4 py-2 bg-blue-500 text-white">บันทึก</a>
        <a href="./score_list.php" class="px-4 py-2 bg-pink-500 text-white">ย้อนกลับ</a>
</div>
    </div>

</div>