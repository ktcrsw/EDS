<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">

<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";

$teacherID = $_SESSION['UserID'];

$sql = "SELECT * FROM tbl_schedule WHERE schedule_teacherID = '$teacherID'";
$query = $db->query($sql);

?>

    <style type="text/css">
    .sc-detail{

        background-color: #8BB4D0;
        color: #002640;
    }
    .sc-detail a{
        color: #002640;
        font-size: 12px;    
    }
    </style>  

<?php
$dayTH=array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");     
$monthTH=array(
"","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน",
"กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"        
);     
$monthTH_brev=array(     
"","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค."                                        
);    
function thai_date_short($time){  
    global $dayTH,$monthTH_brev;   
    $thai_date_return = date("j",$time);
    $thai_date_return .= " " . $monthTH_brev[date("n", $time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
 
  

$sc_startTime=date("Y-m-d 08:30:00");  
$sc_endtTime=date("Y-m-d 18:30:00"); 
$sc_t_startTime=strtotime($sc_startTime);
$sc_t_endTime=strtotime($sc_endtTime);
$sc_numStep="60";
$num_dayShow=5;  
$sc_timeStep=array();
$sc_numCol=0;
$hour_block_width = 90;
  
      
$now_day=date("Y-m-d"); 
if(isset($_GET['uts']) && $_GET['uts']!=""){ 
    $now_day=date("Y-m-d",trim($_GET['uts']));
    $now_day=date("Y-m-d",strtotime($now_day." monday this week")); 
}
$start_weekDay=date("Y-m-d",strtotime("monday this week"));
if(isset($_GET['uts']) && $_GET['uts']!=""){ 
    $start_weekDay=$now_day;
}
$end_weekDay=date("Y-m-d",strtotime($start_weekDay." +7 day"));
$timestamp_prev=strtotime($start_weekDay." -7 day");
$timestamp_next=strtotime($start_weekDay." +7 day");
while($sc_t_startTime<=$sc_t_endTime){
    $sc_timeStep[$sc_numCol]=date("H:i",$sc_t_startTime);    
    $sc_t_startTime=$sc_t_startTime+($sc_numStep*60); 
    $sc_numCol++;   
}
 
function getduration($datetime1, $datetime2){
        $datetime1 = (preg_match('/-/',$datetime1))?(int)strtotime($datetime1):(int)$datetime1;
        $datetime2 = (preg_match('/-/',$datetime2))?(int)strtotime($datetime2):(int)$datetime2;
        $duration = ($datetime2 >= $datetime1)?$datetime2 - $datetime1:$datetime1 - $datetime2;
        return $duration;
}       
function timeblock($time,$sc_numCol,$sc_timeStep){
    global $sc_numStep;
    $time = (preg_match('/:/',$time))?(int)strtotime($time):(int)$time;
    for($i_time=0;$i_time<$sc_numCol-1;$i_time++){
        if($time>=strtotime($sc_timeStep[$i_time]) && $time<strtotime($sc_timeStep[$i_time+1])){
            if($time>strtotime($sc_timeStep[$i_time]) ){
                $duation = getduration($time,strtotime($sc_timeStep[$i_time]));
                $float_duration = ((($duation/60)*100)/$sc_numStep)*0.01;
                return $i_time+$float_duration;
            }else{
                return $i_time;
            }           
        }       
    }
} 
 
 
 
$data_schedule=array();
$sql="SELECT * FROM tbl_schedule  WHERE schedule_teacherID = '$teacherID' AND
    (schedule_startdate  >= '".$start_weekDay."' AND schedule_startdate <  '".$end_weekDay."') OR
('".$start_weekDay."' > schedule_startdate  AND schedule_enddate <  '".$end_weekDay."'  AND schedule_enddate >= '".$start_weekDay."' )  OR
    ('".$start_weekDay."' > schedule_startdate  AND '".$end_weekDay."'  < schedule_enddate  AND schedule_enddate >= '".$start_weekDay."' )
    ORDER BY schedule_startdate
";
$result = $db->query($sql);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $repeat_day = ($row['schedule_repeatday']!="")?explode(",",$row['schedule_repeatday']):[];
        $data_schedule[] = array(
            "id"=>$row['schedule_id'],
            "start_date"=>$row['schedule_startdate'],
            "end_date"=>$row['schedule_enddate'],
            "start_time"=>$row['schedule_starttime'],
            "end_time"=>$row['schedule_endtime'],
            "repeat_day"=>$repeat_day,
            "title"=>$row['schedule_title'],
            "detail"=>$row['schedule_detail'],
            "room"=>$row['schedule_room'],
            "teachername"=>$row['schedule_teacherName'],
        );
    }
}
?>
 
 
 <?php
 $data_day_schedule = [];
 $checkDayKey = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
 if(isset($data_schedule) && count($data_schedule)>0){
    foreach($data_schedule as $row){
        if((strtotime($row['start_date'])>=strtotime($start_weekDay) && strtotime($row['start_date'])<strtotime($end_weekDay))
        || (strtotime($start_weekDay)>strtotime($row['start_date']) && strtotime($row['end_date'])<strtotime($end_weekDay) 
            && strtotime($row['end_date'])>=strtotime($start_weekDay) )
        || (strtotime($start_weekDay)>strtotime($row['start_date']) && strtotime($end_weekDay)<strtotime($row['end_date']) 
            && strtotime($row['end_date'])>=strtotime($start_weekDay) )          
        ){
            if(isset($row['repeat_day']) && count($row['repeat_day'])>0){ // have day repeat
                for($i=0;$i<$num_dayShow;$i++){
                    if(strtotime($start_weekDay." +{$i} day")>=strtotime($row['start_date']) && strtotime($start_weekDay." +{$i} day")<=strtotime($row['end_date'])){
                        $dayKey = date("D",strtotime($start_weekDay." +{$i} day"));
                        if(in_array($i+1,$row['repeat_day'])){
                             $data_day_schedule[$dayKey][] = [
                                "start_time" => $row['start_time'],       
                                "end_time" => $row['end_time'],
                                "duration" => getduration(strtotime($row['start_time']),strtotime($row['end_time'])),
                                "timeblock"=> timeblock($row['start_time'],$sc_numCol,$sc_timeStep),
                                "title" => $row['title'],
                                "detail" => $row['detail'],
                                "room" => $row['room'],
                             ];             
                        }
                    }
                }
            }else{ // else repeat all day
                for($i=0;$i<$num_dayShow;$i++){
                    if(strtotime($start_weekDay." +{$i} day")>=strtotime($row['start_date']) && strtotime($start_weekDay." +{$i} day")<=strtotime($row['end_date'])){
                        $dayKey = date("D",strtotime($start_weekDay." +{$i} day"));
                         $data_day_schedule[$dayKey][] = [
                            "start_time" => $row['start_time'],       
                            "end_time" => $row['end_time'],
                            "duration" => getduration(strtotime($row['start_time']),strtotime($row['end_time'])),
                            "timeblock"=> timeblock($row['start_time'],$sc_numCol,$sc_timeStep),
                            "title" => $row['title'],
                            "detail" => $row['detail'],
                            "room" => $row['room'],
                            "teachername" => $row['teachername'],                          
                         ];
                    }
                }
            }
        }
    }
 }
 ?>
 <?php
// การบันทึกข้อมูลอย่างง่ายเบื้องตั้น
if(isset($_POST['btn_add']) && $_POST['btn_add']!=""){
    $p_schedule_title = (isset($_POST['schedule_title']))?$_POST['schedule_title']:"";
    $p_schedule_detail = (isset($_POST['schedule_detail']))?$_POST['schedule_detail']:"";
    $p_schedule_teacherName = $_SESSION['Firstname'];
    $p_schedule_teacherID = $_SESSION['UserID'];
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
    schedule_detail='".$p_schedule_detail."',
    schedule_teacherName='".$p_schedule_teacherName."',
    schedule_teacherID='".$p_schedule_teacherID."',
    schedule_startdate='".$p_schedule_startdate."',
    schedule_enddate='".$p_schedule_enddate."',
    schedule_starttime='".$p_schedule_starttime."',
    schedule_endtime='".$p_schedule_endtime."',
    schedule_repeatday='".$p_schedule_repeatday."'
    ";
    $db->query($sql);
    header("Location: data_management.php");

}
?>

  <body>

      <div class="  ">
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
    <label for="schedule_startdate" class="col-sm-2 col-form-label text-right">หลักสูตร</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_detail" data-target-input="nearest">
        <select name="schedule_detail" id="schedule_detail" class="select select-bordered w-full">
                            <option value="ปวช">ปวช</option>
                            <option value="ปวส">ปวส</option>
                            <option value="ป.ตรี">ป.ตรี</option>
                        </select>     
    </div>          
        </div>       
          
    </div>
</div>  
<div class="form-group row">
    <label for="schedule_startdate" class="col-sm-2 col-form-label text-right">วันที่เริ่มต้น</label>
    <div class="col-12 col-sm-8">
        <div class="input-group date" id="schedule_startdate" data-target-input="nearest">
          <input type="date" datepicker  class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="schedule_startdate" data-target="#schedule_startdate"
           autocomplete="off" value="" required>           
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
          <input type="date" class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="schedule_enddate" data-target="#schedule_enddate"
           autocomplete="off" value="" >           
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
          <input type="time" class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="schedule_starttime" data-target="#schedule_starttime"
           autocomplete="off" value="" >           
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
          <input type="time" class="appearance-none block w-full select select-bordered text-gray-700 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" name="schedule_endtime" data-target="#schedule_endtime"
           autocomplete="off" value="" >           
        </div>           
          
    </div>
</div>
</div>
<div class="form-group row" >
    <label for="schedule_endtime" class="col-2 col-form-label text-right">สอนซ้ำในวัน</label>
    <div class="col-12 col-sm-10 pt-2">
        <?php
        $dayTH = array('จันทร์.','อังคาร.','พุธ.','พฤหัสบดี.','ศุกร์.', 'เสาร์.');
        ?>
        <div class="input-group">
        <?php foreach($dayTH as $k => $day_value){?>
        <div class="form-check ml-3" style="width:50px;">
            <input class="radio radio-info repeatday_chk" type="radio"
                name="schedule_repeatday_chk" id="schedule_repeatday_chk<?=$k?>"
                value="<?=$k?>" >
                <label class="custom-control-label" for="schedule_repeatday_chk<?=$k?>"><?=$day_value?></label>
        </div>    
        <?php } ?>
        <input type="text" name="schedule_repeatday" id="schedule_repeatday" value="" hidden/>
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
<div class="table-responsive wrap_schedule">
<table class="table m-3 border-collapse border border-slate-500">
<thead class="thead-light">
  <tr class="time_schedule">
    <th class="p-0">
    <div class="day-head-label text-right">
        เวลา
    </div>
    <div class="diagonal-cross"></div>
    <div class="time-head-label text-left">
        วัน
    </div>
    </th>
<?php
for($i_time=0;$i_time<$sc_numCol-1;$i_time++){
?>
    <th class="px-0 text-nowrap th-time">
    <div class="time_schedule_text text-center" style="width: <?=$hour_block_width ?>px;">
        <?=$sc_timeStep[$i_time]?> - <?=$sc_timeStep[$i_time+1]?> 
    </div>
    </th>
<?php }?>
  </tr>
</thead>  
<tbody>
<?php
for($i_day=0;$i_day<$num_dayShow;$i_day++){
    $dayInSchedule_chk=date("Y-m-d",strtotime($start_weekDay." +".$i_day." day"));
    $dayKeyChk = date("D",strtotime($start_weekDay." +".$i_day." day"));
    $dayInSchedule_show = thai_date_short(strtotime($start_weekDay." +".$i_day." day"));
?>
  <tr>
    <td class="p-0 text-center table-active border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100">
    <div class="day_schedule_text text-nowrap " style="min-height: 60px;">
        <?=$dayTH[$i_day]?> 
        </div>
    </td>
    <td class="p-0 position-relative  " colspan="10">
    <div class="position absolute mb-5 ">
    <div class="d-flex align-content-stretch " style="min-height: 60px; ">
        <?php for($i=1;$i<$sc_numCol;$i++){ ?>
        <div class="bg-light text-center border-right mb-5" style="width: <?=$hour_block_width ?>px;margin-right: 1px;">
        &nbsp;
        </div>
        <?php } ?>
    </div>
    </div>
    <div class="relative" style="z-index: 100;">
        <?php
        if(isset($data_day_schedule[$dayKeyChk]) && count($data_day_schedule[$dayKeyChk])>0){
            foreach($data_day_schedule[$dayKeyChk] as $row_day){
                $sc_width = ($row_day['duration']/60)*($hour_block_width/$sc_numStep);
                $sc_start_x = $row_day['timeblock']*$hour_block_width+(int)$row_day['timeblock'];
        ?>
        <div class="relative border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100 absolute bottom-0 left-0  text-center sc-detail border-l first:border-l-0 border-slate-200 stroke-slate-700 text-slate-700 bg-slate-100" style="
        width: <?=$sc_width?>px;margin-right: 1px;
        margin-left: <?=$sc_start_x?>px;
        min-height: 60px;">
        <?php echo ""; ?><br>
        <a href="#" style="font-size: 18px;"><?=$row_day['title']?></a><br>
        <?=$row_day['room']?><br>
        <?=$row_day['detail']?><br>
        <?php echo ""; ?><br>
        </div>
        <?php } ?>
        <?php } ?>
    </div>    
    </td>
  </tr>  
<?php }?>
</tbody>
</table>       
      
</div>    
<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
      crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment-with-locales.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>        
<script type="text/javascript">
$(function(){
    $('#select_date').datetimepicker({
        useCurrent:false,
        locale: 'th',
        format: 'YYYY-MM-DD'
    });
    $('#select_date').on('change.datetimepicker',function(e){
        window.location='data_management.php?uts='+e.date.format("X");
    });
 
}); 
</script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const ele = document.querySelector('.wrap_schedule');
    ele.style.cursor = 'grab';
 
    let pos = { top: 0, left: 0, x: 0, y: 0 };
 
    const mouseDownHandler = function(e) {
        ele.style.cursor = 'grabbing';
        ele.style.userSelect = 'none';
 
        pos = {
            left: ele.scrollLeft,
            top: ele.scrollTop,
            x: e.clientX,
            y: e.clientY,
        };
 
        document.addEventListener('mousemove', mouseMoveHandler);
        document.addEventListener('mouseup', mouseUpHandler);
    };
 
    const mouseMoveHandler = function(e) {
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;
 
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
    };
 
    const mouseUpHandler = function() {
        ele.style.cursor = 'grab';
        ele.style.removeProperty('user-select');
 
        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);
    };
 
    ele.addEventListener('mousedown', mouseDownHandler);
});
$(function () {
        $(document.body).on("change",".repeatday_chk",function(){
            $("#schedule_repeatday").val("");
            var repeatday_chk = [];
            $(".repeatday_chk:checked").each(function(k, ele){
                repeatday_chk.push($(ele).val());
            });
            $("#schedule_repeatday").val(repeatday_chk.join(",")); 
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
