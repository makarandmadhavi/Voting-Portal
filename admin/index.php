<?php include 'templates/header.php'; ?>
<?php include 'backend/loggedout.php'; ?>



<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <img id="logo" src="images/EuroSchool.jpg" alt="logo">
        </div>
        <div class="col-sm-4 text-center">
            <h1 id="title">Administrator Login</h1>
        </div>
    </div>
</div>


<div class="add-box container">
    <div class="">
        <h1 class="text-center">Login</h1>
    </div>
    <div class="container">

        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button onclick="login()" class="btn btn-success">Login</button>


    </div>

</div>

<?php include "templates/footer.php"; ?>