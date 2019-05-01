<?php include 'templates/header.php'; ?>
<?php include 'backend/loggedin.php'; ?>
<?php include 'backend/getdata.php';?>
<?php
$posts = getallposts();

?>
<?php include 'templates/navbar.html'; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6">


            <div class="container add-box">
                <h3 class="text-center">Add Candidate</h3>

                <div class="form-group" id="postdiv">
                    <label for="exampleInputPassword1">Post</label>
                    <select class="form-control" id="post">
                        <?php foreach($posts as $post){ ?>
                        <option value="<?=$post['postname']?>"><?=$post['postname']?></option>
                        <?php } ?>
                        <!-- <option value="TVs">TVs</option>
                        <option value="Laptops">Laptops</option> -->
                    </select>
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

                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                        placeholder="Student Name">
                </div>

                <div>
                    <button onclick="addcandidate()" class="btn btn-success">Submit</button>
                </div>

            </div>
        </div>
        <div class="col-sm-6">


            <div class="container add-box">
                <h3 class="text-center">Generate Keys</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Number of keys</label>
                    <input type="number" min='1' class="form-control" id="keys" aria-describedby="emailHelp"
                        placeholder="#">
                </div>
                <div>
                    <button onclick="generatekeys()" class="btn btn-success">Generate</button>
                </div>


            </div>
            <div class="container add-box">
                <h3 class="text-center">Results</h3>

                <div><a href="results.php">
                        <button class="btn btn-success">Get Results</button>
                    </a>
                </div>


            </div>
        </div>
    </div>
</div>



<?php include 'templates/footer.php'; ?>