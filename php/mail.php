<?php
    $to = 'rajarsi3997@gmail.com';
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Telephone"];
    $subject = $_POST["Subject"];
    $text= $_POST["Message"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
    </table>';

    if (@mail($to, 'Message from contact page', $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }
?>