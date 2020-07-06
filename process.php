<?php include 'templates/header.php'; ?>

<?php
if(!isset($_POST['email'])){
    header('Location: index.php');
}

$enroll = $_POST['enroll'];
$email = $_POST['email'];
$house = $_POST['house'];

$keyid = substr(sha1($enroll."ksndkfne"),0,10);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <img id="logo" src="images/EuroSchool.jpg" alt="logo">
        </div>
        <div class="col-sm-4 text-center">
            <h1 id="title">Registration</h1>
        </div>
    </div>
</div>

<?php
include 'backend/conn.php';
    $data = $_POST;
    $sql = "SELECT * FROM register WHERE enroll='$enroll'";
    $result = $conn->query($sql);
    $sql = "SELECT * FROM register WHERE email='$email'";
    $result2 = $conn->query($sql);
    $row2 = $result2->fetch_assoc();
    $row = $result->fetch_assoc();
    if($row && !$row2){ 
        $sql = "UPDATE register SET email = '$email', house = '$house', keyid='$keyid' WHERE enroll = '$enroll'";
        $result = $conn->query($sql);
        $sql = "INSERT INTO votekeys VALUES('0','$keyid','$house','0')";
        $result2 = $conn->query($sql);
        if($result && $result2){
      
?>
<br>

<div class="container">
    <div class="card ">
        <div class="card-header text-center">
            You have Successfuly registered to vote ! 
        </div>
        <div class="card-body">
            <p>Link for voting along with your voting ID is mailed to you.</p>
            <p>Voting will begin at ***time date** and end ***time date*** </p>
            <p>Follow the link in your mail to vote when voting starts</p>
            <h3 class="card-title">Instructions</h3>
            <ul>
            <li class="card-text">Your voting login ID is : <b><?=$keyid?></b></li>
            <li class="card-text">Please Note down your login ID</li>
            <li class="card-text">You are not allowed to share this ID with anyone else</li>
            <li class="card-text">You can only vote once</li>
            <li class="card-text">Contact your class teacher if you did not recieve the mail or are facing any issue</li>
            </ul>
            
           
        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>
</div>


<?php
                }else{
                    $error_message = "You have Already Registered!";
                }
        }else{
            $error_message = "Failed to Register ! Incorrect Enrollment number";
        }
    
?>
<br>
<?php if(isset($error_message)){?>
<div class="container">
    <div class="card ">
        <div style="color:red;" class="card-header text-center">
            <?=$error_message?>
        </div>
        <div class="card-body">
            <p>Contact your classs teacher if you did not recieve any mail or are facing any issue</p>
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>
</div>

<?php
    }

?>
<?php include 'backend/sendmail.php'; 

if(!isset($error_message)){
$resultmail = sendmail($enroll,$email,$keyid,$house);
}

?>

<?php include "templates/footer.php"; ?>