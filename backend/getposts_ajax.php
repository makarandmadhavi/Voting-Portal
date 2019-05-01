<?php
include 'conn.php';
    $data=array();
    $sql = "SELECT postname FROM posts";
    $result = $conn->query($sql);
    if($result){
        while($row=$result->fetch_assoc()){
            array_push($data,$row['postname']);
        }
        
        echo json_encode($data);
    
    }
?>