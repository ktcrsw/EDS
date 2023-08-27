<link rel="icon" type="image/x-icon" href="https://cdn.discordapp.com/attachments/960423388369813514/1119515459730026526/logo.png">
<?php session_start(); ?>
<?php include "../assets/header.php"; ?>
<?php include "../assets/teacher_nav.php"; ?>
<?php include '../../Backend/db/connect.db.php';



$sql = "SELECT * from form_budget_approval ";
$query = $db->query($sql);




?>

<section class="m-2 w-full">
    <div class="flex justify-center px-24 items-center mt-3">

        <div class="w-full overflow-x-auto">
            <table class="w-full text-left border border-separate rounded border-slate-200" cellspacing="0">
                <tbody>
                    <tr>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">ชื่อ-นามสกุล | ตำแหน่ง</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">เรื่อง</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานที่ | จังหวัด | อำเภอ</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">วันที่</th>
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">สถานะ</th>                        
                        <th scope="col" class="h-12 px-6 text-sm font-medium border-l first:border-l-0  border-slate-200 stroke-slate-500 text-slate-500">พิมพ์เอกสาร</th>                        
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td class="h-16 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <div class="flex">
                                    <div class="flex flex-col ml-2">
                                        <span class="text-[16px] font-semibold"><?php echo $row['fba_name'] . "&nbsp;" . $row['fba_lname'] . "  |   ". $row['fba_position']; ?></span>
                                    </div>
                                </div>

                            </td>

                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                            <?php echo $row['fba_details']; ?>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php  
                                
                                $getProvince = "SELECT * FROM provinces WHERE id = '".$row['fba_province']."'";
                                $queryProvince = $db->query($getProvince);
                                while($pv = mysqli_fetch_assoc($queryProvince)){
                                    echo $row['fba_location']. " | " .$pv['name_th']. " | " .$row['fba_amphure']; 
                                }
                                
                                ?>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php echo $row['startdate']. " - ". $row['enddate']; ?>
                            </td>
                            <td class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 ">
                                <?php 
                                 if($row['fba_status'] == 0){
                                    echo "ยังไม่ได้รับการอนุญาต";
                                } else if($row['fba_status'] == 1){
                                    echo "อนุญาต";
                                }
                                 ?>
                            </td>
                            
                            </td>
                            <td class="h-12 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500 text-center text-light text-white">
                            <form action="../../Backend/pdf/แบบขออนุญาตไปราชการ.php?=<?php echo $row['fba_id']; ?>" method="post">
                                <input type="text" name="id" id="id" value="<?php echo $row['fba_id'];?>" hidden>

                                <?php
                                
                                if($row['fba_status'] == 1){
                                    echo '                                <button type="submit" class="btn btn-success mt-3"><i class="fa-solid fa-check"  style="color:#fff;"></i></button>                                                      ';
                                } else if($row['fba_status'] == 0){
                                    echo '                                <button type="submit" class="btn btn-error mt-3"><i class="fa-solid fa-x"  style="color:#fff;"></i></button>                  
                                    ';
                                }

                                ?>
                                
                            </form>
                        </td>

                        </tr>
                    <?php endwhile; ?>


                </tbody>
                </form>
            </table>
            
        </div>
    </div>


</section>