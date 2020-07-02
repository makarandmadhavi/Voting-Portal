<?php
    $conn = mysqli_connect("localhost", "root", "Makjets13", "schoolelection");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
?>
