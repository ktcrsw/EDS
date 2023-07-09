<?php session_start();?>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";

$sql = "SELECT * FROM tbl_schedule";
$query = $db->query($sql);

$subject = "SELECT * FROM subjecttbl";
$data = $db->query($subject);
?>

<?php
if(isset($_POST['btn_add']) && $_POST['btn_add']!=""){
    $p_schedule_title = (isset($_POST['schedule_title']))?$_POST['schedule_title']:"";
    $p_schedule_startdate = (isset($_POST['schedule_startdate']))?$_POST['schedule_startdate']:"0000-00-00";
    $p_schedule_enddate = (isset($_POST['schedule_enddate']))?$_POST['schedule_enddate']:"0000-00-00";
    $p_schedule_enddate = ($p_schedule_enddate=="0000-00-00")?$p_schedule_startdate:$p_schedule_enddate;
    $p_schedule_starttime = (isset($_POST['schedule_starttime']))?$_POST['schedule_starttime']:"00:00:00";
    $p_schedule_endtime = (isset($_POST['schedule_endtime']))?$_POST['schedule_endtime']:"00:00:00";
    $p_schedule_repeatday = (isset($_POST['schedule_repeatday']))?$_POST['schedule_repeatday']:"";
    $p_schedule_allday = (isset($_POST['schedule_allday']))?1:0;
    $sql = "
    INSERT INTO tbl_schedule SET
    schedule_title='".$p_schedule_title."',
    schedule_startdate='".$p_schedule_startdate."',
    schedule_enddate='".$p_schedule_enddate."',
    schedule_starttime='".$p_schedule_starttime."',
    schedule_endtime='".$p_schedule_endtime."',
    schedule_repeatday='".$p_schedule_repeatday."'
    ";
    $db->query($sql);
    header("Location:data_management.php");
    exit;
}
?>
  <head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">    
  </head>
  <body>
  
    <br>
    <br>
      <div class="wrap-form">
<form action="" method="post" accept-charset="utf-8"> 
<div class="form-group row">
    <label for="schedule_title" class="col-sm-2 col-form-label text-right">วิชาที่สอน</label>
    <div class="col-12 col-sm-8">
    <select name="schedule_title" id="schedule_title" class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500 ">
                            <?php while ($allSub = mysqli_fetch_assoc($data)) { ?>
                                <option value="<?php echo $allSub['subject_name']; ?>" style="font-size:14px;"><?php echo $allSub['subject_name']; ?></option>
                            <?php } ?>
                        </select>           
    </div>
</div>
<div class="form-group row">
    <label for="schedule_startdate" class="col-sm-2 col-form-label text-right">วันที่เริ่มต้น</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_startdate" data-target-input="nearest">
          <input type="text" datepicker  class="form-control  w-full" name="schedule_startdate" data-target="#schedule_startdate"
           autocomplete="off" value="" required>           
            <div class="input-group-append" data-target="#schedule_startdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
            </div>
        </div>       
      <div class="invalid-feedback">
        กรุณากรอก วันที่เริ่มต้น
      </div>            
    </div>
</div>
<div class="form-group row">
    <label for="schedule_enddate" class="col-sm-2 col-form-label text-right">วันที่สิ้นสุด</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_enddate" data-target-input="nearest">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-times-circle"></i></div>
            </div>           
          <input type="text" class="form-control datetimepicker-input" name="schedule_enddate" data-target="#schedule_enddate"
           autocomplete="off" value="" >           
            <div class="input-group-append" data-target="#schedule_enddate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
            </div>
        </div>            
      <div class="invalid-feedback">
        กรุณากรอก วันที่สิ้นสุด
      </div>            
    </div>
</div>
<div class="form-group row">
    <label for="schedule_starttime" class="col-sm-2 col-form-label text-right">เวลาเริ่มต้น</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_starttime" data-target-input="nearest">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-times-circle"></i></div>
            </div>           
          <input type="text" class="form-control datetimepicker-input" name="schedule_starttime" data-target="#schedule_starttime"
           autocomplete="off" value="" >           
            <div class="input-group-append" data-target="#schedule_starttime" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>          
      <div class="invalid-feedback">
        กรุณากรอก เวลาเริ่มต้น
      </div>            
    </div>
</div>
<div class="form-group row">
    <label for="schedule_endtime" class="col-sm-2 col-form-label text-right">เวลาสิ้นสุด</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_endtime" data-target-input="nearest">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="far fa-times-circle"></i></div>
            </div>           
          <input type="text" class="form-control datetimepicker-input" name="schedule_endtime" data-target="#schedule_endtime"
           autocomplete="off" value="" >           
            <div class="input-group-append" data-target="#schedule_endtime" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-clock"></i></div>
            </div>
        </div>           
      <div class="invalid-feedback">
        กรุณากรอก เวลาสิ้นสุด
      </div>            
    </div>
</div>
<div class="form-group row">
    <label for="schedule_endtime" class="col-2 col-form-label text-right">สอนซ้ำในวัน</label>
    <div class="col-12 col-sm-10 pt-2">
        <?php
        $dayTH = array('จ.','อ.','พ.','พฤ.','ศ.');
        ?>
        <div class="input-group">
        <?php foreach($dayTH as $k => $day_value){?>
        <div class="form-check ml-3" style="width:50px;">
            <input class="custom-control-input repeatday_chk" type="checkbox"
                name="schedule_repeatday_chk" id="schedule_repeatday_chk<?=$k?>"
                value="<?=$k?>">
                <label class="custom-control-label" for="schedule_repeatday_chk<?=$k?>"><?=$day_value?></label>
        </div>    
        <?php } ?>
        <input type="hidden" name="schedule_repeatday" id="schedule_repeatday" value="" />
        </div>
        <br>    
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-2 offset-sm-2 text-right pt-3">
         <button type="submit" name="btn_add" value="1" class="btn btn-primary btn-block">เพิ่มข้อมูล</button>
    </div>
</div> 
</form>
          </div>
  
<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
      crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>    
  
<script>
    $(function () {
        // เมื่อเฃือกวันทำซ้ำ วนลูป สร้างชุดข้อมูล
        $(document.body).on("change",".repeatday_chk",function(){
            $("#schedule_repeatday").val("");
            var repeatday_chk = [];
            $(".repeatday_chk:checked").each(function(k, ele){
                repeatday_chk.push($(ele).val());
            });
            $("#schedule_repeatday").val(repeatday_chk.join(",")); // จะได้ค่าเปน เช่น 1,3,4
        });
        $('#schedule_startdate,#schedule_enddate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#schedule_starttime,#schedule_endtime').datetimepicker({
            format: 'HH:mm'
        });     
        $(".input-group-prepend").find("div").css("cursor","pointer").click(function(){
            $(this).parents(".input-group").find(":text").val("");
        });         
    });
</script>