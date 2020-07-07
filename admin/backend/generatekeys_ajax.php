<?php
    include 'conn.php';
    $data = $_POST;
    $keys = $data['keys'];
    $symbols=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9'];
    for($n=0;$n<$keys;$n++){
        $key=$symbols[rand(0,25)];
        for($i=0;$i<5;$i++){
            $key=$key.$symbols[rand(0,34)];
        }
        $sql = "INSERT INTO votekeys SET keyid='$key'";
        $result = $conn->query($sql);
        if(!$result){
            echo 'FAIL';
        }
    }
    
    echo 'SUCCESS';
?>