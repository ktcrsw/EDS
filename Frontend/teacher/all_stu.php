<?php include "../assets/header.php"; ?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<div class="grid  min-[1306px]:grid-cols-2 ">
<div class="flex justify-center items-center w-auto h-auto">





<div id="chart-area"></div>
<?php include "../../Backend/db/connect.db.php";

//รวมปวช
$totalStu = "SELECT * FROM enrolltbl";
$dataStu = $db->query($totalStu);

//ปวช.1 ชาย
$totalStuMenOne = "SELECT * FROM enrolltbl WHERE ref_sex = 'ชาย' AND ref_years = '1'";
$dataStuMenOne = $db->query($totalStuMenOne);

//ปวช.1 หญิง
$totalStuMenThree = "SELECT * FROM enrolltbl WHERE ref_sex = 'ชาย' AND ref_years = '1'";
$dataStuMenThree = $db->query($totalStuMenThree);

//ปวช.3 ชาย
$totalStuMenThree = "SELECT * FROM enrolltbl WHERE ref_sex = 'ชาย' AND ref_years = '3'";
$dataStuMenThree = $db->query($totalStuMenThree);

//ปวช.3 หญิง
$totalStuGirlThree = "SELECT * FROM enrolltbl WHERE ref_sex = 'หญิง' AND ref_years = '3'";
$dataStuGirlThree = $db->query($totalStuGirlThree);

//รวมปวส
$totalStus = "SELECT * FROM enrolltbl_high";
$dataStus = $db->query($totalStus);


///////////////////////////////////////////////
/*

CountVoc = รวมนักเรียนทั้งหมดที่อยู่ในระดับชั้น ปวช.
CountVocHigh = รวมนักเรียนทั้งหมดที่อยู่ในระดับชั้น ปวส.


วิธีเรียกใช้ใน Tag Script ให้ <?=$countVoc;?> หรือ <?=$countVocHigh?>
แต่ตัวแปลมันไม่เป็น Global ถ้าใช้บน Hostingอาจจะพังไปเลย

          #Kittichai Raksawong

*/
//////////////////////////////////////////////
$countMenOne = mysqli_num_rows($dataStuMenOne); 

$countVoc = mysqli_num_rows($dataStu); 
$countVocHigh = mysqli_num_rows($dataStus);

$countMenThree = mysqli_num_rows($dataStuMenThree); 
$countGirlThree = mysqli_num_rows($dataStuGirlThree);

$totalVocMen = $totalStuMenThree;
$totalVocGirl = $totalStuGirlThree;

?>
<script>
const el = document.getElementById('chart-area');
      const data = {
        categories: ['Browser'],
        series: [
          {
            name: 'ปวช',
            data: <?=$countVoc;?>,
          },
          {
            name: 'ปวส',
            data: <?=$countVocHigh;?>,
          },
         
        ],
      };
      const options = {
        chart: { title: 'จำนวนนักศึกษา', width: 600, height: 500 },
        series: {
          dataLabels: {
            visible: true,
            pieSeriesName: {
              visible: true,
              anchor: 'outer',
            },
          },
        },
      };

      const chart = toastui.Chart.pieChart({ el, data, options });
</script>



</div>

<div class="w-">
<div >
<div class="w-[420px]  min-[710px]:w-full overflow-x-auto">
            <div class="h-12 flex items-center   bg-[#0093fb]">
                <span class="text-[16px] ml-4 text-white">ประกาศนียบัตรวิชาชีพ (ปวช)</span>
            </div>
  <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-12 px-6 text-sm font-medium text-center border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">ชั้นปี</th>

        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">ชาย</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">หญิง</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">รวม</th>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">1</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countMenOne?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">2</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">3</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countMenThree?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countGirlThree?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countVoc?></td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-700 ">ตกค้าง</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
      </tr>
    </tbody>
    <tfoot>
    <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">รวม</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 "><?=$countVoc?></td>
      </tr>
    </tfoot>
  </table>
</div>


<div class="w-[420px]  mt-8  min-[710px]:w-full overflow-x-auto">
            <div class="">
            <div class="h-12 flex items-center   bg-[#0093fb]">
                <span class="text-[16px] ml-4 text-white">ประกาศนียบัตรวิชาชีพขั้นสูง (ปวส)</span>
            </div>
  <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
        <th scope="col" class="h-12 px-6 text-sm font-medium text-center border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">ชั้นปี</th>

        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">ชาย</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">หญิง</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">รวม</th>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">1</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countVocHigh?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 "><?=$countVocHigh?></td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">2</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">3</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">0</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-700 ">ตกค้าง</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">0</td>
      </tr>
    </tbody>
    <tfoot>
    <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">รวม</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 "><?=$totalVocMen?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 "><?=$totalVocGirl?></td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 "><?=$countVocHigh?></td>
      </tr>
    </tfoot>
  </table>
            </div>
</div>
</div>
</div>

</div>
<div class="flex items-center justify-center">
<div class="w-[420px] rounded-sm  mt-8  min-[710px]:w-full overflow-x-auto">
            <div class="">
            <div class="h-12 flex items-center   bg-gray-400">
                <span class="text-[16px] ml-4 text-white">รวมทั้งหมด</span>
            </div>
  <table class="w-full  text-left border border-separate rounded border-slate-200" cellspacing="0">
    <tbody>
      <tr>
      

        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">ชาย</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">หญิง</th>
        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500">รวม</th>
      </tr>
      <tr>
       

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
      </tr>
      <tr>
    

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
      </tr>
      
  
    </tbody>
    <tfoot>
    <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">รวม</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">100</td>
      
      </tr>
    </tfoot>
  </table>
            </div>
</div>
</div>