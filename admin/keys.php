<?php include 'templates/header.php'; ?>
<?php include 'backend/loggedin.php'; ?>
<?php include 'backend/getdata.php';?>
<?php
$allkeys = getkeys();
$parts = array_chunk($allkeys,35);
//print_r($parts);
?>
<?php include 'templates/navbar.html'; ?>

<div class="container">
    <div class="row">
        
        <?php foreach($parts as $part=>$keys){ ?>
        <div class="col-sm-3">
            <br>
            <br><br>
        <h5>Part Number <?=$part+1?></h5>
            <ul class="list-group">
                <?php foreach($keys as $key){ $key['keyid']=substr(sha1($key['keyid']),0,8)?>
                <li style="height:41px;" class="list-group-item d-flex justify-content-between align-items-center">
                    <?=$key['keyid']?>
                    <span class="badge badge-danger badge-pill"><?php if($key['isused']){ echo 'used'; } ?></span>
                </li>
                <?php } ?>
                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
            Dapibus ac facilisis in
            <span class="badge badge-primary badge-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Morbi leo risus
            <span class="badge badge-primary badge-pill">1</span>
        </li> -->
            </ul>
        
        </div>
        <?php } ?>
    </div>

</div>


<br>
<br>
<?php include 'templates/footer.php'; ?>