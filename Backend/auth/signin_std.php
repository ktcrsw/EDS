<?php
session_start();

include("../../Frontend/assets/header.php");
include("../db/connect.db.php");

$users = "SELECT * FROM enrolltbl";
$query = $db->query($users);

$idcard = $_POST['idcard'];

if (empty($idcard)) {
    echo "<script>Swal('กรุณากรอกข้อมูล')</script>";
}

$auth = "SELECT * FROM enrolltbl WHERE ref_studenttbl = '$idcard'";
$query = $db->query($auth);
if ($row = mysqli_fetch_array($query)) {
    $_SESSION['no'] = $row['no'];
    $_SESSION['Student_Course'] = $row['ref_course'];
    $_SESSION['Student_ID'] = $row['ref_studenttbl'];
    $_SESSION['Student_FirstName'] = $row['ref_stdfname'];
    $_SESSION['Student_LastName'] = $row['ref_stdlname'];
    $_SESSION['Student_Sex'] = $row['ref_sex'];
    $_SESSION['Student_Groups'] = $row['ref_stdGroups'];
    $_SESSION['Student_Year'] = $row['ref_years'];
    $_SESSION['Student_Department'] = $row['ref_department'];
    $_SESSION['StudentStatus'] = $row['ref_status'];
    $_SESSION['Student_Img'] = $row['ref_stdImg'];
    if ($_SESSION['StudentStatus'] == 1) {
        header("refresh:2; url=../../Frontend/users/index.php");
            include("../../Frontend/assets/header.php");
            echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'เข้าสู่ระบบสำเร็จ',
                    text: 'โปรดรอสักครู่ กำลังอ่านข้อมูล',
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../../Frontend/users/index.php';
                });
            });</script>";
    } else {
        header("refresh:2; url=../../Frontend/login.php");
        include("../../Frontend/assets/header.php");
        echo "<script>setTimeout(function() {
            Swal.fire({
                icon: 'error',
                title: 'เข้าสู่ระบบไม่สำเร็จ',
                text: 'โปรดติดต่อเจ้าหน้าที่หรือครูที่ปรึกษา',
                showCancelButton: false,
                showConfirmButton: false
            }, function() {
                window.location = '../../Frontend/login.php';
            });
        });</script>";
    }
}



?>
.<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</script>
