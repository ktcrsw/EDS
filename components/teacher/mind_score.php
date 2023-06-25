
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php include"../../Backend/db/connect.db.php";?>
<?php include"../assets/header.php";?>
<?php 
    include "../assets/teacher_nav.php";


    $subject = "SELECT * FROM stdtbl";
    $query = $db->query($subject);


?>
<div class="mb-3 m-5">
    <label for="" class="form-label">เลือกวิชา</label>
    <select class="form-select border border-black" name="" id="" style="width:25%;">
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <option><?php echo $row['std_id']; ?> - <?php echo $row['std_name']; ?></option>
        <?php endwhile ?>
    </select>
    <label for="" class="form-label">จำนวนคะแนน</label>
    <input type="text" name="mind_score" id="mind_score" class="mt-4 border border-black">
    <a name="" id="" class="btn btn-success border border-black" href="../../Backend/functions/remove_mind_score.php" role="button">ยืนยัน</a>

</div>
