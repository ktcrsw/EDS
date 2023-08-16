<?php


    session_start();
    session_destroy();




?>
.<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</script>
<script>
    setTimeout(function() {
        Swal.fire({
            icon: 'success',
            title: 'ออกจากระบบสำเร็จ',
            text: 'โปรดรอสักครู่ ระบบกำลังพาคุณไป',
            showCancelButton: false,
            showConfirmButton: false
        }, function() {
            window.location = "../../Frontend/login.php";
        });
    });
</script>
<?php

header("Refresh:2; url=../../Frontend/login.php");


?>