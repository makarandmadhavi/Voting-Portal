
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="">Euro School Election Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <img src="images/<?=$_SESSION['house']?>.jpg" class="houseimg" alt="">
            </li> 
            <li class="nav-item" style="padding:20px;">
               Voter ID: <b><?=$_SESSION['key']?></b>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="">View Orders</a>
            </li> -->
        </ul>
        <h1 class="votehead">Click to vote  </h1>
        <div style="margin-right: 100px;">
            <button onclick="vote()" class="btn btn-outline-success">Vote!</button>
            <a href="novote.php" class="btn btn-outline-danger">logout</a>
        </div>
    </div>
</nav>