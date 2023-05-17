<?php include("../assets/header.php");?>
  <main>
    <form action="../../backend/auth/signin.php" method="post">
        <input class="m-4" type="text" name="idcard" id="idcard" minlength="13" placeholder="รหัสบัตรประชาชน" required>
        <input class="m-4" type="text" name="pwd" id="pwd" placeholder="รหัสผ่าน" required>
        <input type="submit" value="submit">
    </form>
  </main>