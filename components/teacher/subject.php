<?php include"../../Backend/db/connect.db.php";?>
<?php include"../assets/header.php";?>
<?php 

    $subject = "SELECT * FROM subjecttbl";
    $query = $db->query($subject);


?>
<div class="mb-3 m-5">
    <label for="" class="form-label">เลือกวิชา</label>
    <select class="form-select" name="" id="" style="width:25%;">
        <?php while($row = mysqli_fetch_assoc($query)): ?>
        <option><?php echo $row['subject_name']; ?> - <?php echo $row['subject_des']; ?></option>
        <?php endwhile ?>
    </select>
    <div class="mb-3">
        <label for="" class="form-label">เลือกวัน</label>
        <select class="form-select" name="" id="" style="width:25%;">
            <option selected >จันทร์</option>
            <option>อังคาร</option>
            <option>พุธ</option>
            <option>พฤหัสบดี</option>
            <option>ศุกร์</option>
        </select>
    </div>
    <label for="" class="form-label">เลือกเวลาลงสอน</label>
    <input type="time" name="time" id="time" class="mt-4">
    <a name="" id="" class="btn btn-success" href="#" role="button">ยืนยัน</a>

</div>
