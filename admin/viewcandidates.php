<?php include 'templates/header.php'; ?>
<?php include 'backend/loggedin.php'; ?>
<?php include 'backend/getdata.php';?>
<?php include 'templates/navbar.html'; ?>
<?php
$data=getcandidates();
$house_posts = gethousecandidates();
?>

<div class="container">
    <div class="row ">

        <?php foreach($data as $key=>$post){ ?>
        <div class="col-sm-6 ">
            <div class="card add-box">
                <div class="card-body">
                    <h5 class="card-title text-center"><?=$key?></h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <!-- <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($post as $candidate){ ?>
                            <tr class="hov" id="<?=$candidate['id']?>">
                                <td style="column-width:270px;">
                                    <input id="candidate<?=$candidate['id']?>" type="text" class="inputedit" disabled
                                        value="<?=$candidate['name']?>">
                                </td>
                                <td><button onclick="editbtn(<?=$candidate['id']?>)" id="editbtn<?=$candidate['id']?>"
                                        class="btn btn-info btn-sm hide">edit</button>

                                    <button onclick="updatecandidate(<?=$candidate['id']?>)"
                                        id="updatebtn<?=$candidate['id']?>"
                                        class="btn btn-info btn-sm hidenone">update</button>
                                </td>
                                <td style="column-width:1px;">
                                    <button id="removebtn<?=$candidate['id']?>"
                                        onclick="removecandidate('<?=$candidate['id']?>','<?=$candidate['name']?>')"
                                        class="btn btn-danger btn-sm hide">remove</button>

                                    <button id="cancelbtn<?=$candidate['id']?>"
                                        onclick="cancelbtn('<?=$candidate['id']?>','<?=$candidate['name']?>')"
                                        class="btn btn-danger btn-sm hidenone">cancel</button>
                                </td>

                            </tr>
                            <?php } ?>
                            <!-- <tr>
                                <td style="column-width:270px;">Miyoko Deluca</td>
                                <td ><button class="btn btn-info btn-sm">edit</button></td>
                                <td style="column-width:1px;"><button class="btn btn-danger btn-sm">remove</button></td>
                            </tr>
                            <tr>
                                <td style="column-width:270px;" >Ethelyn Zickefoose</td>
                                <td ><button class="btn btn-info btn-sm">edit</button></td>
                                <td style="column-width:1px;"><button class="btn btn-danger btn-sm">remove</button></td>
                            </tr>
                            <tr>
                                <td style="column-width:270px;">Miyoko Deluca</td>
                                <td ><button class="btn btn-info btn-sm">edit</button></td>
                                <td style="column-width:1px;"><button class="btn btn-danger btn-sm">remove</button></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>

<div class="container">
    <div class="row ">
        <?php foreach($house_posts as $housename=>$house){ ?>
        <div class="col-sm-12">
            <div class="card add-box">
                <div class="card-body">
                    <h4 class="card-title text-center"><?=$housename?></h4>
                    <div class="row">
                        <?php foreach($house as $postname=>$post){ ?>
                        <div class="col-sm-6">
                            <h5 class="card-title text-center"><?=$postname?></h5>
                            <table class="table table-hover hov">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($post as $candidate){ ?>
                                    <tr class="hov" id="<?=$candidate['id']?>">
                                        <td style="column-width:270px;">
                                            <input id="candidate<?=$candidate['id']?>" type="text" class="inputedit"
                                                disabled value="<?=$candidate['name']?>">
                                        </td>
                                        <td><button onclick="editbtn(<?=$candidate['id']?>)"
                                                id="editbtn<?=$candidate['id']?>"
                                                class="btn btn-info btn-sm hide">edit</button>

                                            <button onclick="updatecandidate(<?=$candidate['id']?>)"
                                                id="updatebtn<?=$candidate['id']?>" 
                                                class="btn btn-info btn-sm hidenone">update</button>
                                        </td>
                                        <td style="column-width:1px;"><button id="removebtn<?=$candidate['id']?>"
                                                onclick="removecandidate('<?=$candidate['id']?>','<?=$candidate['name']?>')"
                                                class="btn btn-danger btn-sm hide">remove</button>

                                            <button id="cancelbtn<?=$candidate['id']?>"
                                                onclick="cancelbtn('<?=$candidate['id']?>','<?=$candidate['name']?>')"
                                                class="btn btn-danger btn-sm hidenone">cancel</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- <tr>
                                        <td style="column-width:270px;">Miyoko Deluca</td>
                                        <td><button class="btn btn-info btn-sm">edit</button></td>
                                        <td style="column-width:1px;"><button
                                                class="btn btn-danger btn-sm">remove</button></td>
                                    </tr>
                                    <tr>
                                        <td style="column-width:270px;">Ethelyn Zickefoose</td>
                                        <td><button class="btn btn-info btn-sm">edit</button></td>
                                        <td style="column-width:1px;"><button
                                                class="btn btn-danger btn-sm">remove</button></td>
                                    </tr>
                                    <tr>
                                        <td style="column-width:270px;">Miyoko Deluca</td>
                                        <td><button class="btn btn-info btn-sm">edit</button></td>
                                        <td style="column-width:1px;"><button
                                                class="btn btn-danger btn-sm">remove</button></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>

                    </div>

                </div>
            </div>
        </div>

        <?php } ?>

    </div>
</div>

<br>
<br>
<?php include 'templates/footer.php'; ?>