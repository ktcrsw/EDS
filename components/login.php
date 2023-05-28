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
</head>

<body class="flex justify-center">
  <div class="flex w-600  h-600 bg-white 400 mt-24 drop-shadow-shadow-xlxl border rounded-round-40 ">
    <div class="w-571 h-772 bg-#0093FB shadow-blux border rounded-round-40 ">
      <img src="image/woman_student.png" alt="" class="w-187 h-519 absolute left-[188px] top-[139px]">
      <div class="flex flex-row items-center p-0 absolute w-[450px] h-[79px] left-[20px] top-0">
        <div class=" p-[10px] gap-[10px] w-[107px] h-[79px]">
          <h1 class="absolute  left-[29.25px] mt-[3px] "><img src="/image/logoEDS.svg" alt=""></h1>
        </div>
        <label class="font-medium text-[30px] leading-[39px] not-italic text-white font-ibm-plex-sans ml-7 mt-3 ">Education System</label>
      </div>
      <img src="image/yellow.svg" class="absolute left-[117px] top-[143.8px]" alt="">
      <img src="image/orange.svg" class="absolute left-[424.76px] top-[146.18px]" alt="">
      <img src="image/green.svg" class="absolute left-[440px] top-[414.86px]" alt="">
      <img src="image/Group 5.svg" class="absolute left-[168px] top-[661px]" alt="">
      <img src="image/pink.svg" class="absolute left-[73.56px] top-[390.06px]" alt="">
    </div>
    <div class="  w-[600px] h-[650px] mt-[109px] ml-[300px]">
      <div class="w-[470px] h-[541px]">
        <label class="font-bold not-italic text-[70px] leading-[91px] text-[#808080] -mx-px font-ibm-thai">เข้าสู่ระบบ EDS</label>
        <div class=" rounded w-[470px] h-[432px] mt-14 ">
          <div class="flex gap-20 ">
            <img src="image/female 1.svg" class=" w-[94px] h-[44px] pl-3 " alt="">
            <img src="image/graduating-student 1.svg" class="w-[94px] h-[44px] " alt="">
            <img src="image/user-gear 1.svg" class="w-[94px] h-[44px] pl-5 " alt="">
          </div>
          <div class="flex gap-20 font-ibm-thai text-[16px] font-normal">
            <button class="w-24 h-12  hover:text-blue-500 focus:text-blue-500">
              ครู/บุคลากร
            </button>
            <button class="w-24 h-12  hover:text-blue-500 focus:text-blue-500">
              นักเรียน
            </button>
            <button class="w-24 h-12 hover:text-blue-500 focus:text-blue-500">
              ผู้ดูแล
            </button>
          </div>
          ​
          <!-- ---Login---- -->

          <form action="../Backend/auth/signin.php" method="post" name="frm">
            <div class="ml-12 mt-12">
              <div class="mb-4 font-ibm-thai font-normal text-[24px] leading-[40px]">
                <div class="relative">
                  <div class="flex left-10">
                    <input id="idcard" name="idcard" type="text" class="block appearance-none w-[351px] h-[57px] rounded-[10px] bg-white border border-gray-300  rounded py-2 px-3   leading-tight focus:outline-none focus:shadow-outline shadow-sha-input " placeholder="รหัสประจำตัวประชาชน/ID Card">
                  </div>
                </div>
              </div>

              <div class="mb-4 font-ibm-thai font-normal text-[24px] leading-[40px] mt-8">
                <div class="relative">
                  <input id="pwd" name="pwd" type="password" class="block appearance-none w-[351px] h-[57px] rounded-[10px] bg-white border border-gray-300 rounded py-2 px-3 pl-[p] leading-tight  focus:outline-none focus:shadow-outline shadow-sha-input " placeholder="รหัสผ่าน/Password">
                </div>
              </div>


              <div class="flex items-center justify-between font-ibm-thai text-[24px]">
                <input id="loginBtn" type="submit" onlick="javascript:swal('test')" class="bg-bg-login hover:bg-blue-700 font-normal text-red-50 w-[351px] h-[58px] rounded-[10px] focus:outline-none focus:shadow-outline mt-[37px]" type="button" value="เข้าระบบ">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    function IsEmpty() {
      if (document.forms['frm'].username.value === "") {
        alert("empty");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>