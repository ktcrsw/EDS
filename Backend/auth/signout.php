<?php


    session_start();

    header("Refresh:2; url=../../Frontend/login.php");
    include("../../Frontend/assets/header.php");
    echo "<script>setTimeout(function() {
        Swal.fire({
            icon: 'success',
            title: 'ออกจากระบบสำเร็จ',
            text: 'ระบบกำลังพาคุณไป',
            showCancelButton: false,
            showConfirmButton: false
        }, function() {
            window.location = '../../Frontend/login.php';
        });
    });</script>";
    session_destroy();




?>
.<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</script>

<?php

header("Refresh:2; url=../../Frontend/login.php");


?>