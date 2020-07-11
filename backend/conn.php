<?php
    $conn = mysqli_connect("localhost", "root", "", "schoolelection");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>
