<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="">Euro School Election Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" disabled href=""><?=$_SESSION['house']?>  House<span class="sr-only">(current)</span></a>
            </li> 
            <!-- <li class="nav-item">
                <a class="nav-link" href="viewcandidates.php">View Candidates</a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="">View Orders</a>
            </li> -->
        </ul>
        <p style="margin-right:20px; margin-top:10px;">click here after selecting all candidates ->  </p>
        <div style="margin-right: 100px;">
            <button onclick="vote()" class="btn btn-outline-success">Cast your Vote!</button>
        </div>
    </div>
</nav>