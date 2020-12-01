<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)) {
        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $phone = $_POST["Telephone"];
        $subject = $_POST["Subject"];
        $text= $_POST["Message"];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: query@our-grocery.tk\r\n';
        $headers .= 'Reply-To: ' . $email;
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $message = '<table style="width:100%">
                <tr><td>Name: '.$name.'</td></tr>
                <tr><td>Email: '.$email.'</td></tr>
                <tr><td>Phone: '.$phone.'</td></tr>
                <tr><td>Subject: '.$subject.'</td></tr>
                <tr><td>Text: '.$text.'</td></tr>
            </table>';

        if(@mail('contact@our-grocery.tk', 'Email from Contact Page', $message, $headers)) {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #85c639;'><h4>The message has been sent!</h4></div>";
        }
        else {
            echo "<div style='margin: 1em 1em 1em 1em; text-align: center; color: #fa1818;'><h4>Message send failed!</h4></div>";
        }
    }
?>