<?php
    include 'conn.php';
    $data = $_POST;
    $id = $data['id'];
    $name = $data['name'];
    $sql = "UPDATE candidates SET name='$name' WHERE id='$id'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>