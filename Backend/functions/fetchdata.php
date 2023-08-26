<?php
session_start();
require '../db/connect.db.php';
$searchTerm = $_GET['term']; 
 
$query = $db->query("SELECT * FROM amphures WHERE name_th LIKE '%".$searchTerm."%'"); 
 
$skillData = array(); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $data['id'] = $row['id']; 
        $data['value'] = $row['name_th']; 
        array_push($skillData, $data); 
    } 
} 
 
echo json_encode($skillData); 
?>