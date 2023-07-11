<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "assets/header_bt.php"; ?></title>
    <link rel="stylesheet" href="./assets/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../src/input.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" Frontend/index.php crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/7360243360.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&family=IBM+Plex+Sans+Thai+Looped&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js
"></script>
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css
" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</head>

<body>
    <div class="grid min-[1030px]:grid-cols-2 h-screen">
        <div class=" w-full flex justify-center items-center">
            <div class="w-full min-[1300px]:ml-32  flex justify-center items-center">
                <img src="../Frontend/image/eds_logo.svg" class="w-[200px] h-[300px] md:w-[auto] md:h-[auto]" alt="">
                <label class="text-[130px] min-[1300px]:text-[200px] font-[700] text-[#3884FD]">EDS</label>
            </div>
        </div>
        <div class="w-full flex justify-center items-center">
            <div class="flex items-center justify-center">
                <div>
                    <label class="text-[70px] font-bold text-[#808080] ">เข้าสู่ระบบ EDS</label>
                    <div class="btn-group flex justify-center items-center mt-8">
                        <a href="http://localhost/eds/Frontend/login_stu.php">
                            <button class="btn btn-success
  text-white rounded-none rounded-l-[15px]   w-32 "><img src="./image/graduated (1).png" class="mr-1">นักเรียน</button>
                        </a>
                        <a href="http://localhost/eds/Frontend/login.php">
                            <button class="btn rounded-none btn-info text-white w-32 bg-[#3884fd]  hover:bg-[#5ED9AC]  "><img src="./image/teacher (1).png" class="mr-1">ครู</button>
                        </a>
                        <a href="http://localhost/eds/Frontend/login_admin.php">
                            <button class="btn rounded-none btn-info bg-[#3884fd]  text-white hover:bg-[#5ED9AC] rounded-r-[15px] w-32"><img src="./image/manager.png" class="mr-1">ผู้ดูแล</button>
                        </a>
                    </div>


                    
          <!-- /* -------------------------------------------------------------------------- */
          /*                                    login                                   */
          /* -------------------------------------------------------------------------- */ -->
          <form action="../Backend/auth/signin_std.php" method="post">
                    <div class="flex justify-center items-center mt-8">
                        <div class="w-[340px]">
                            <div class="relative h-10 w-full min-w-[200px]  ">

                                <input class="peer h-full w-full rounded-[7px] border border-gray-300 t bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="idcard"/>
                                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">

                                    บัตรประจำตัวประชาชน
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center mt-4">
                        <div class="w-[340px]">
                            <div class="relative h-10 w-full min-w-[200px]  ">
                                <input class="peer h-full w-full rounded-[7px] border border-gray-300 t bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-pink-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50" placeholder=" " name="pwd"/>
                                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-pink-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-pink-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-pink-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                    วัน/เดือน/ปีเกิด
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center items-center pb-11">
                        <button type="submit" class="btn bg-[#3884fd] hover:bg-[#5ED9AC] text-white border-0 duration-500  w-[340px] mt-7"><svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3" />
                            </svg>เข้าสู่ระบบ</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>


</body>
<?php include 'bg.php'; ?>

</html>