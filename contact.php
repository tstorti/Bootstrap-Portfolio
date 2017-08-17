<?php
    echo $_POST;
    if(empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
            echo "No arguments Provided!";
            return false;
    }
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];
    $to = 'tonystorti@gmail.com';
    $email_subject = "Portfolio Contact:  $name";
    $email_body = "Name: $name\n\nEmail: $email_address\n\nMessage:\n$message";
    $headers = "From: noreply@tonystorti.com" . "\r\n";
    $headers .= "Reply-To: $email_address" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$email_subject,$email_body,$headers);
    return true;                    
?>
						