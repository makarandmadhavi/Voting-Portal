<?php include 'templates/header.php'; ?>
<?php include 'templates/navbar.php'; ?>
<?php include 'backend/getdata.php';?>
<?php include 'backend/keyin.php';?>

<?php
$data=getcandidates();
$house = $_SESSION['house'];
$house_posts = gethousecandidates($house);
//print_r($house_posts);
?>
<br><br><br>
<div class="container outer">
    <div class="row ">

        <?php foreach($data as $key=>$post){ ?>
        <div class="col-sm-4 ">
            <div class="add-box">
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$key?></h5>


                    <div class="container">

                        <div class="list-group">
                            <?php foreach($post as $candidate){ ?>

                            <input type="radio" name="<?=$key?>" value="<?=$candidate['id']?>"
                                id="<?=$candidate['id']?>" />
                            <label class="list-group-item" for="<?=$candidate['id']?>"><?=$candidate['name']?></label>

                            <?php } ?>
                            <!-- <input type="radio" name="radioInputName" value="Value2" id="radio2" />
                                <label class="list-group-item" for="radio2">Caption for radio2</label>

                                <input type="radio" name="radioInputName" value="Value3" id="radio3" />
                                <label class="list-group-item" for="radio3">Caption for radio3</label>

                                <input type="radio" name="radioInputName" value="Value4" id="radio4" />
                                <label class="list-group-item" for="radio4">Caption for radio4</label> -->

                        </div>


                    </div>



                </div>
            </div>
        </div>
        <?php } ?>


        <?php foreach($house_posts as $key=>$post){ ?>
        <div  class="col-sm-4 ">
            <div class="add-box">
                <div class="card-body">
                    <h5 style="color:<?=$_SESSION['housecolor']?>" class="card-title text-center"><?=$key?></h5>


                    <div class="container">

                        <div class="list-group">
                            <?php foreach($post as $candidate){ ?>
                            <input type="radio" name="<?=$key?>" value="<?=$candidate['id']?>"
                                id="<?=$candidate['id']?>" />
                            <label class="list-group-item" for="<?=$candidate['id']?>"><?=$candidate['name']?></label>
                            <?php } ?>
                            <!-- <input type="radio" name="radioInputName" value="Value2" id="radio2" />
                                <label class="list-group-item" for="radio2">Caption for radio2</label>

                                <input type="radio" name="radioInputName" value="Value3" id="radio3" />
                                <label class="list-group-item" for="radio3">Caption for radio3</label>

                                <input type="radio" name="radioInputName" value="Value4" id="radio4" />
                                <label class="list-group-item" for="radio4">Caption for radio4</label> -->

                        </div>


                    </div>



                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>
<br>
<br>
<div class="container">
    
    <center>
    <button onclick="vote()" style="width:50%; height:40px" class="btn btn-success">Vote!</button>
    </center> 
        


    
</div>
<br>
<br>

<?php include 'templates/footer.php'; ?>