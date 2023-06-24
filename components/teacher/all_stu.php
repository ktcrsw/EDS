<?php include "../assets/header.php"; ?>

<div class="grid  min-[1306px]:grid-cols-2 ">
<div class="flex justify-center items-center w-auto h-auto">





<div id="chart-area"></div>
<script>
const el = document.getElementById('chart-area');
      const data = {
        categories: ['Browser'],
        series: [
          {
            name: 'ปวช',
            data: 46.02,
          },
          {
            name: 'ปวส',
            data: 20.47,
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

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">2</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">3</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-700 ">ตกค้าง</th>

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
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">100</td>
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

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">2</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">3</th>

        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 ">100</td>
      </tr>
      <tr>
        <th scope="row" class="h-12 px-6 text-sm text-center transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-700 ">ตกค้าง</th>

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
        <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 bg-[#ddf8ed] border-slate-200 stroke-slate-500 text-slate-700 ">100</td>
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