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
        <h1 class="text-center">Enter in</h1>
    </div>
    <div class="container">

        <div class="form-group">
            <label for="exampleInputEmail1">KEY</label>
            <input type="text" class="form-control" id="key" aria-describedby="emailHelp" placeholder="#key">
        </div>
        <div class="form-group" id="housediv">
            <label for="exampleInputPassword1">House</label>
            <select class="form-control" id="house">
                <option value="Apollo">Apollo</option>
                <option value="Mercury">Mercury</option>
                <option value="Poseidon">Poseidon</option>
                <option value="Zeus">Zeus</option>
            </select>
        </div>

        <button style="margin-left:40%;" onclick="login()" class="btn btn-success">Start Voting</button>
        

    </div>

</div>

<?php include "templates/footer.php"; ?>