<?php
    include 'conn.php';
    $data = $_POST;
    $name = $data['name'];
    $house = $data['house'];
    $post = $data['post'];
    $sql = "INSERT INTO candidates(name,post,house) VALUES ('$name','$post','$house')";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>