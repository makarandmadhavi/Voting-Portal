<?php

function sendmail($enroll,$email,$keyid,$house){
    include "mail/class.phpmailer.php"; // include the class name
    include "settings.php";
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP();         // enable SMTP
            $mail->SMTPDebug = 1;    // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true;  // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587  465
            $mail->IsHTML(true);
            $mail->Username = $global['email']; 
            $mail->Password = $global['password']; 
            $mail->SetFrom($global['email']);  
            $mail->Subject = "EuroSchool Election";
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            
            $mail->Body = "
            <p>Click the link to start voting - <a href='http://euroschoolelection.hopto.org/login.php?id=$keyid&house=$house'>http://euroschoolelection.hopto.org/login.php?id=$keyid&house=$house</a>
            
            <h3>Instructions</h3>
            <ul>
            <li >Your voting login ID is : <b>$keyid</b></li>
            <li >House : <b>$house</b></li>
            <li >You are not allowed to share this ID with anyone else</li>
            <li >You can only vote once</li>
            <li>Contact your class teacher if you are facing any issue</li>
            </ul>
            
            ";
            
            $mail->AddAddress("$email") ;
                                                        
                    
                       if(!$mail->Send())
                         {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                            $data = $mail->ErrorInfo;
                         }
                         else
                        {
                            $data = "Mail sent $email $enroll"; 
                        }
    

return $data;
}

?>
