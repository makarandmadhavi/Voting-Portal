<?php include 'templates/header.php'; ?>
<?php include 'backend/keyout.php'; ?>




<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <img id="logo" src="images/EuroSchool.jpg" alt="logo">
        </div>
        <div class="col-sm-4 text-center">
            <h1 id="title">Cast Your Vote</h1>
        </div>
    </div>
</div>


<div style="max-width: 500px;" class="add-box container">
    <div>
        <h1 class="text-center">Register</h1>
    </div>
    <div class="container">
        <form action="process.php" method="post">
            <div class="form-group">
                <label >Enrollment number</label>
                <input required="" type="number" name="enroll" class="form-control" id="enroll" 
                    placeholder="Enrollment number">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input required="" type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Email">
            </div>
            <div class="form-group" id="housediv">
                <label >House</label>
                <select name="house" required value="select" class="form-control" id="house">
                    <option disabled="" default hidden selected="selected" value="" >Select house</option>
                    <option value="Apollo">Apollo</option>
                    <option value="Mercury">Mercury</option>
                    <option value="Poseidon">Poseidon</option>
                    <option value="Zeus">Zeus</option>
                </select>
            </div>
            <center>
                <button type="submit" class="btn btn-success ">Register</button>
            </center>
            <br>
            <center>
            <a href="login.php" style="margin-left:5px;"  class="btn btn-info ">Go to Login</a>
            </center>
            <br>

        </form>
    </div>

</div>

<?php include "templates/footer.php"; ?>