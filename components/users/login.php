<?php include("../assets/header.php");?>
  <main>
    <form action="../../backend/auth/signin.php" method="post">
        <input type="text" name="idcard" id="idcard" placeholder="รหัสบัตรประชาชน">
        <input type="text" name="pwd" id="pwd" placeholder="รหัสผ่าน">
        <input type="submit" value="submit">
    </form>
  </main>