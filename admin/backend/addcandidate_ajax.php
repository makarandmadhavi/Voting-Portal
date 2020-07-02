<?php
    include 'conn.php';
    $data = $_POST;
    $name = $data['name'];
    $house = $data['house'];
    $post = $data['post'];
    $sql = "INSERT INTO `candidates` (`id`, `name`, `post`, `house`, `votes`) VALUES (0, '$name', '$post', '$house', 0)";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }else{
        echo $result;
    }
?>
