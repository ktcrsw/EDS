<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<div class="flex items-center w-full mb-4 px-4 py-3 text-sm text-pink-500 border border-pink-100 rounded bg-pink-50" role="alert">
  <!-- Text -->
  <p class="flex-1">ระบุข้อมูลอย่างน้อย 1 ข้อมูล</p>
  <!-- Close button -->

</div>
<section class="flex justify-center items-center">
  <form action="../../Backend/functions/search_student.php" method="post">
    <div class="  bg-[#e9f2f4] rounded-lg p-10">
      <!-- Component: Dismissible Danger Alert -->
      <!-- End Dismissible Danger Alert -->
      <div class=" items-center mb-4">
        <div class="mr-2">
          <span class="text-[14px]">รหัสนักศึกษา :</span>
        </div>
        <div class="relative w-64 ">
          <div class="mx-auto max-w-xs">
            <input type="text" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="รหัสนักศึกษา" name="stdid" required/>
          </div>
        </div>
      </div>
      <div class="flex gap-4 mb-4 ]">
        <div class=" items-center">
          <div class="mr-2">
            <span class="text-[14px]">ชื่อ :</span>
          </div>
          <div class="relative w-64 ">
            <div class="mx-auto max-w-xs">
              <input type="text" class="block w-full h-10 rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="ชื่อจริง" name="stdname" />
            </div>
          </div>
        </div>
        <div class=" items-center">
          <div class="mr-2">
            <span class="text-[14px]">นามสกุล :</span>
          </div>
          <div class="relative w-64 ">
            <div class="mx-auto max-w-xs">
              <input type="text" class="block w-full h-10 rounded-md border-gray-300 shadow-sm focus:border-primary-400 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:cursor-not-allowed disabled:bg-gray-50 disabled:text-gray-500" placeholder="นามสกุล" name="stdlname" />
            </div>
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
      <!-- Component: Base primary button with leading icon  -->

      <button type="submit" class="btn btn-success inline-flex items-center justify-center h-10 gap-2 px-5 text-sm font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none">

        <span class="order-2">ค้นหา</span>
        <span class="relative only:-mx-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </span>
      </a>

      <!-- End Base primary button with leading icon  -->
    </div>
  </form>






</section>