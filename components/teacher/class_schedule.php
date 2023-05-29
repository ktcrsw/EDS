<?php session_start();?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
      include "../assets/header.php";
      include "../assets/user_nav.php";

      $sql = "SELECT * FROM users";
      $query = $db->query($sql);

?>
