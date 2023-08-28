<section class="flex justify-center items-center">
    <div class="  bg-[#e9f2f4] rounded-lg p-10">
      <!-- Component: Dismissible Danger Alert -->
      <!-- End Dismissible Danger Alert -->
      <div class=" items-center mb-4">
        <div class="mr-2 flex flex-col justify-center items-center">
        <div>
        <div class="avatar mb-6 ">
  <div class="w-64 h-64 rounded-full">
    <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202307/lisa_and_fred_0-three_four.jpg?VersionId=gsEMS79OTrrdLEoHOO32mkW3M8oU0Xaf" />
  </div>
</div>
        </div>
          <div>
          <form class="flex justify-center" action="../../Backend/functions/ediImage.php" method="post" enctype="multipart/form-data">
          <input type="text" class="file-input w-full max-w-xs" name="id" value="<?php echo $_SESSION['UserID'];?>" hidden/>
          <input type="file" class="file-input w-full max-w-xs" upload />
          <button type="submit" class="btn btn-success inline-flex items-center justify-center ml-2 h-10 gap-2 px-5 text-sm font-medium tracking-wide text-white transition duration-300 rounded focus-visible:outline-none whitespace-nowrap bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-700 disabled:cursor-not-allowed disabled:border-emerald-300 disabled:bg-emerald-300 disabled:shadow-none">

        <span class="order-2 text-white">บันทึกรูป</span>
        <span class="relative only:-mx-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="butt" stroke-linejoin="arcs">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </span>
      </a>
      </button>
          </form>
          </div>
        </div>
      </div>
      <!-- Component: Base primary button with leading icon  -->

      
      <!-- End Base primary button with leading icon  -->
    </div>






</section>