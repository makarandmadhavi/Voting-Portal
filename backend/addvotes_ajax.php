<?php
    include 'conn.php';
    $data = $_POST;
    $voteids = $data['voteids'];

    session_start();
    $_SESSION['voteids'] = $voteids;

    $voteids = json_decode($voteids);
    foreach($voteids as $voteid){
        $sql = "UPDATE candidates SET votes = votes+1 WHERE id = '$voteid'";
        $result = $conn->query($sql);
        if(!$result){
            echo 'fail';
        }
            
    }
    //session_start();
    //$_SESSION['voteids'] = voteids;
    echo 'SUCCESS';
    
?>