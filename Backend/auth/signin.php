<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<?php 
    session_start();
    // error_reporting( error_reporting() & ~E_NOTICE );

    include("../../components/assets/header.php");
    include("../db/connect.db.php");
    
    $users = "SELECT * FROM users";
    $query = $db->query($users);

    isset($_REQUEST['idcard']) ? $idcard = $_REQUEST['idcard'] : $idcard = '';
    isset($_REQUEST['pwd']) ? $password = $_REQUEST['pwd'] : $password = '';

    if(empty($idcard)){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("WOW!","Message!","success");';
        echo '}, 1000);</script>';
        }

    $auth = "SELECT * FROM users WHERE id_card = '$idcard' AND pwd = '$password'";
    $query = $db->query($auth);
    if($row = mysqli_fetch_array($query)){
        $_SESSION['UserID'] = $row['u_id'];
        $_SESSION['IdCard'] = $row['id_card'];
        $_SESSION['Username'] = $row['username'];
        $_SESSION['Email'] = $row['email'];
        $_SESSION['Password'] = $row['pwd'];
        $_SESSION['Firstname'] = $row['fname'];
        $_SESSION['Lastname'] = $row['lname'];
        $_SESSION['Permission'] = $row['permission'];
        if($_SESSION['Permission'] == 0){
            echo "Welcome back " . $row['username'];
            header("location: ../../components/index.php");
        }
        
        if($_SESSION['Permission'] == 1){
            header("location: ../../components/teacher/index.php");
        }
        
        if($_SESSION['Permission'] == 2){
            header("location: ../admin/admin.php");
        }
        
    }


?>