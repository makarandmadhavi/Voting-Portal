<?php
    include 'conn.php';
    include '../settings.php';
    $data = $_POST;
    $key = $data['key'];
    $house = $data['house'];
    $sql = "SELECT * FROM votekeys WHERE keyid='$key'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $openvoting = $global['openvoting'];
    if($row && $openvoting){
        if($row['isused']=='0'){
            session_start();
            $_SESSION['key'] = $row['keyid'];
            $_SESSION['house'] = $house;
            $_SESSION['voteids'] = 0;
            $sql = "SELECT * FROM houses WHERE house='$house'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['housecolor'] = $row['color'];
            echo 'SUCCESS';
        }
        else{
            echo 'KEYUSED';
        }
        
    }
    if(!$openvoting){
        echo 'CLOSED';
    }
?>