<?php 

session_start();

include '../db/connect.db.php';


isset($_REQUEST['stdid']) ? $stdid = $_REQUEST['stdid'] : $stdid = '';
isset($_REQUEST['stdname']) ? $stdname = $_REQUEST['stdname'] : $stdname = '';
isset($_REQUEST['stdlname']) ? $stdlname = $_REQUEST['stdlname'] : $stdlname = '';


$std = "SELECT * FROM enrolltbl WHERE ref_studenttbl LIKE '%".$stdid."%'";
$result = $db->query($std);


    if($searchData = mysqli_fetch_array($result)){
        $_SESSION['StudentNo'] = $searchData['no'];
        $_SESSION['Course'] = $searchData['ref_course'];
        $_SESSION['StudentID'] = $searchData['ref_studenttbl'];
        $_SESSION['StudentName'] = $searchData['ref_stdfname'];
        $_SESSION['StudentLName'] = $searchData['ref_stdlname'];
        $_SESSION['StudentGroups'] = $searchData['ref_stdGroups'];
        $_SESSION['StudentYear'] = $searchData['ref_years'];
        $_SESSION['Department'] = $searchData['ref_department'];
        $_SESSION['status'] = $searchData['ref_status'];
        $_SESSION['StudentImg'] = $searchData['ref_stdImg'];
        header("Refresh:0; url=../../components/teacher/search_stu_result.php");
    }
    

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php       

include("../../components/assets/header.php");

echo "<script  type='text/javascript'>
Swal.fire({
    icon: 'error',
    title: 'ไม่พบข้อมูล.',
    text: 'ลองใหม่อีกครั้งภายหลัง',
  })
</script>";
header("Refresh:2; url=../../components/teacher/service_information.php");

?>

<script  type="text/javascript">
Swal.fire({
  icon: 'error',
  title: 'ไม่พบข้อมูล.',
  text: 'ลองใหม่อีกครั้งภายหลัง',
})
</script>

<!-- Modal toggle -->
<button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>

<h1></h1>
