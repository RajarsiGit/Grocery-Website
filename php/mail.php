<?php
    require_once "PHPMailer/PHPMailerAutoload.php";

    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Telephone"];
    $subject = $_POST["Subject"];
    $text= $_POST["Message"];

    $mail = new PHPMailer;
      
    $mail->SMTPDebug = 3; 
    $mail->isSMTP();                              
    $mail->Host = "smtp-pulse.com";
    $mail->SMTPAuth = true;                           
    $mail->Username = "ultradevsofficial2020@gmail.com";                 
    $mail->Password = "B3Q8ZWPnqrb";                           
    $mail->SMTPSecure = "tls";                           
    $mail->Port = 587;
    $mail->setFrom('contact@our-grocery.tk', 'Our Grocery');
    $mail->addAddress('ultradevsofficial2020@gmail.com', 'Ultra Devs');
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true);
    $mail->Subject = "Email from Contact Page";
    $mail->addCustomHeader("X-SMTPProvider-MailClass: transactional");

    $mail->Body = '<table style="width:100%">
        <tr><td>Name: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
    </table>';

    $mail->ALtBody = 'Name: '.$name.
        '\nEmail: '.$email.
        '\nPhone: '.$phone.
        '\nSubject: '.$subject.
        '\nText: '.$text;

    if($mail->send()) {
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #85c639;'><h4>The message has been sent!</h4></div>";
    }
    else {
        echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #fa1818;'><h4>Message send failed!</h4></div>";
    }
?>