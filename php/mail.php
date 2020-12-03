<?php
    require_once 'sendgrid-php/sendgrid-php.php';

    $mail = new \SendGrid\Mail\Mail();

    $sendgrid = new \SendGrid('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');

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)) {
        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $phone = $_POST["Telephone"];
        $subject = $_POST["Subject"];
        $text= $_POST["Message"];

        $mail->setFrom("query@our-grocery.tk", "query");
        $mail->setSubject("Email from Contact Page");
        $mail->addTo("rajarsi3997@gmail.com", "Rajarsi Saha");
        $mail->addTo("sawon17081997@gmail.com", "Sawon Bhattacharya");
        
        $mail->addContent("text/plain", "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nText: $text");
        
        $mail->addContent("text/html", "<table style='width:100%'>
                                <tr><td>Name: $name</td></tr>
                                <tr><td>Email: $email</td></tr>
                                <tr><td>Phone: $phone</td></tr>
                                <tr><td>Subject: $subject</td></tr>
                                <tr><td>Text: $text</td></tr>
                            </table>"
        );

        if($sendgrid->send($mail)) {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #85c639;'><h4>The message has been sent!</h4></div>";
        }
        else {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #fa1818;'><h4>Message send failed!</h4></div>";
        }
    }
?>