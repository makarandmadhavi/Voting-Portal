<?php include 'templates/header.php'; ?>
<?php include 'backend/keyout.php'; ?>
<?php
$id="";
$house="Apollo";

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

if(isset($_GET['house'])){
    $house=$_GET['house'];
}

?>



<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <img id="logo" src="images/EuroSchool.jpg" alt="logo">
        </div>
        <div class="col-sm-4 text-center">
            <h2 id="title">Euro School Thane</h2>
        </div>
    </div>
</div>


<div style="max-width: 500px;" class="add-box container">
    <div>
        <h1 id="logintitle" class="text-center">Login to Vote!</h1>
    </div>
    <br>
    <div class="container">

        <div class="form-group">
            <label for="exampleInputEmail1">Voter ID</label>
            <input type="text" class="form-control" id="key" value="<?=$id?>"
                aria-describedby="emailHelp" placeholder="ID">
        </div>
        <div class="form-group" id="housediv">
            <label for="exampleInputPassword1">House</label>
            <select class="form-control" id="house">
                <option <?php if($house=="Apollo"){ echo 'selected'; } ?> value="Apollo">Apollo</option>
                <option <?php if($house=="Mercury"){ echo 'selected'; } ?> value="Mercury">Mercury</option>
                <option <?php if($house=="Poseidon"){ echo 'selected'; } ?> value="Poseidon">Poseidon</option>
                <option <?php if($house=="Zeus"){ echo 'selected'; } ?> value="Zeus">Zeus</option>
            </select>
        </div>
        <center>
        <button  onclick="login()" class="btn btn-success ">Start Voting</button>
        </center>
        <br>
        <center>
        <button style="margin-left:5px;" onclick="window.location = 'index.php';" class="btn btn-info ">Register to Vote!</button>
        </center>
       <br>
     
    </div>
    <center>
    <p>Please Register First before Logging in</p>
    </center>
</div>

<?php include "templates/footer.php"; ?>
