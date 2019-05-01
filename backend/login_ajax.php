<?php
    include 'conn.php';
    $data = $_POST;
    $key = $data['key'];
    $house = $data['house'];
    $sql = "SELECT * FROM votekeys WHERE keyid='$key'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($row){
        session_start();
       $_SESSION['key'] = $row['keyid'];
       $_SESSION['house'] = $house;
       echo 'SUCCESS';
    }
?>