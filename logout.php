<?php
include "templates/header.php";

//session_start();
session_destroy();
header('Refresh:3; url=index.php');
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

