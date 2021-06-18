<?php
 $name =$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];





$email_from='istieak.hasan1996@gmail.com';
$email_subject="New Form Submission";
$email_body="user Name:$name.\n".
             "user Email:$visitor_email.\n".
            "user Message:$message.\n";


$to ="krobin649@gmail.com";
$headers="From:$email_from\r\n";
$headers .="Reply-To:$visitor_email\r\n";





if( mail($to,$email_subject,$email_body,$headers)){
     header("Location: success.php");
}else{
    header("Location: error.php");
}





?>