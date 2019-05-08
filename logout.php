<?php
include "templates/header.php";
    include 'backend/conn.php';
    
    $key = $_SESSION['key'];
    $house = $_SESSION['house'];
    $voteids = $_SESSION['voteids'];
    $sql = "UPDATE votekeys SET isused=1, house='$house', isused='$voteids' WHERE keyid='$key'";
    $result = $conn->query($sql);

session_destroy();
header('Refresh:1; url=index.php');
?>



<div class="container">
    <div class="row">
        <h1>
            Thank you for Voting!
        </h1>
    </div>
</div>

<?php
include "templates/footer.php";

?>

