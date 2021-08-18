<?php

if(isset($_POST['btn-submit']))
{
    $Fullname = $_POST['fullname'];
    $visitor_email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];
    
    $to = "dimugold@gmail.com";
    $subject = $Subject;
    
    $message = "The sender's Email is:{$visitor_email} The message is: ".$Message;
   
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <dimugold@gmail.com>';
    
    $mail = mail($to,$subject,$message,$headers);

    if($mail)
    {
        echo "<script>alert('Mail has been sent.')</script>";
    }
    else
    {
        echo "<script>alert('Mail not sent.')</script>";
    }

}
    ?>
