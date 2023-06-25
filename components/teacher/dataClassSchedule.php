<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<?php include "../../Backend/db/connect.db.php";
include "../assets/header.php";

$sql = "SELECT * FROM tbl_schedule";
$query = $db->query($sql);

?>
    <style type="text/css">
    div.table-responsive::-webkit-scrollbar,
    div.table-responsive::-webkit-scrollbar {
      width: 10px;
      height: 2px;
    }
    ::-webkit-scrollbar {
      width: 10px;
      height: 7px;
    }
    ::-webkit-scrollbar-button {
      width: 0px;
      height: 0px;
    }
    ::-webkit-scrollbar-thumb {
      background: #CACACA;
      border: 0px none #CACACA;
      border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb:active {
      background: #000000;
    }
    .diagonal-cross{
    border-bottom: 2px solid #dee2e6;
        /* -webkit-transform: translateY(20px) translateX(5px) rotate(26deg); */
        position: relative;
        top: -20px;
        left: 0;
        transform: translateY(20px) translateX(5px) rotate(20deg);
    }
    .sc-detail{

        background-color: #8AF3FF;
        color: #000000;
    }
    .sc-detail a{
        color: #000000;
        font-size: 18px;    
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
    $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
 
  

$sc_startTime=date("Y-m-d 08:00:00");  
$sc_endtTime=date("Y-m-d 18:00:00"); 
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
$sql="
    SELECT * FROM tbl_schedule  WHERE 
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
            "room"=>$row['schedule_room'],
            "building"=>$row['schedule_teacherName']     
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
                                "room" => $row['room'],
                                "building" => $row['building'],
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
                            "room" => $row['room'],
                            "building" => $row['building'],                          
                         ];
                    }
                }
            }
        }
    }
 }
 ?>
 
<div class="wrap_schedule_control mt-5">
<div class="d-flex">
    <div class="text-left d-flex align-items-center">
    <?php
    $num_dayShow_in_schedule = $num_dayShow-1;
    ?>
    ตารางเรียนวันที่ <?=thai_date_short(strtotime($start_weekDay))?> ถึง 
    <?=thai_date_short(strtotime($start_weekDay."+{$num_dayShow_in_schedule} day"))?>
    </div>
    <div class="col-auto text-right ml-auto">
        <div class="input-group date" id="select_date" data-target-input="nearest">
            <input type="text" name="select_date" class="form-control datetimepicker-input d-none" data-target="#select_date"/>
            <div class="input-group-append" data-target="#select_date" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
            </div>
        </div>        
    </div>    
    <div class="col-auto text-right">
        <button class="btn btn-light btn-sm mr-2" type="button" onClick="window.location='data_management.php?uts=<?=$timestamp_prev?>'">< Prev</button>
        <button class="btn btn-light btn-sm" type="button" onClick="window.location='data_management.php?uts=<?=$timestamp_next?>'">Next ></button>
    </div>
</div>
</div>
<br>
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
    <td class="p-0 text-center table-active">
    <div class="day_schedule_text text-nowrap" style="min-height: 60px;">
        <?=$dayTH[$i_day]?> 
        <br>
        <?=$dayInSchedule_show?>    
    </div>
    </td>
    <td class="p-0 position-relative" colspan="10">
    <div class="position-absolute">
    <div class="d-flex align-content-stretch" style="min-height: 60px;">
        <?php for($i=1;$i<$sc_numCol;$i++){ ?>
        <div class="bg-light text-center border-right" style="width: <?=$hour_block_width ?>px;margin-right: 1px;">
        &nbsp;
        </div>
        <?php } ?>
    </div>
    </div>
    <div class="position-absolute" style="z-index: 100;">
        <?php
        if(isset($data_day_schedule[$dayKeyChk]) && count($data_day_schedule[$dayKeyChk])>0){
            foreach($data_day_schedule[$dayKeyChk] as $row_day){
                $sc_width = ($row_day['duration']/60)*($hour_block_width/$sc_numStep);
                $sc_start_x = $row_day['timeblock']*$hour_block_width+(int)$row_day['timeblock'];
        ?>
        <div class="position-absolute text-center sc-detail" style="
        width: <?=$sc_width?>px;margin-right: 1px;
        margin-left: <?=$sc_start_x?>px;
        min-height: 60px;">
        <a href="#"><?=$row_day['title']?></a><br>
        <?=$row_day['room']?><br>
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
// ส่วนของ script สำหรับให้สามารถลากตารางเวลา ซ้ายขวา โดยไม่ต้องเลื่อน scroll bar
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
            // Get the current mouse position
            x: e.clientX,
            y: e.clientY,
        };
 
        document.addEventListener('mousemove', mouseMoveHandler);
        document.addEventListener('mouseup', mouseUpHandler);
    };
 
    const mouseMoveHandler = function(e) {
        // How far the mouse has been moved
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;
 
        // Scroll the element
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
    };
 
    const mouseUpHandler = function() {
        ele.style.cursor = 'grab';
        ele.style.removeProperty('user-select');
 
        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);
    };
 
    // Attach the handler
    ele.addEventListener('mousedown', mouseDownHandler);
});
</script>   
