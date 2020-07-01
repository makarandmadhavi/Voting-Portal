<?php
include "templates/header.php";
    include 'backend/conn.php';
    if(!isset($_SESSION['key'])){
        header("refresh: 0; url = index.php"); 
    }
    $key = $_SESSION['key'];
    $house = $_SESSION['house'];
    $voteids = $_SESSION['voteids'];
    $sql = "UPDATE votekeys SET isused=1, house='$house', isused='$voteids' WHERE keyid='$key'";
    $result = $conn->query($sql);

session_destroy();

?>



<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <img id="logo" src="images/EuroSchool.jpg" alt="logo">
        </div>
        <div class="col-sm-4 text-center">
            <h1 id="title">Thank you for voting!</h1>
        </div>
    </div>
</div>

<?php
include "templates/footer.php";

?>

