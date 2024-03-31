<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ini_set("SMTP", "victorpurice2003@gmail.com");
    ini_set("smtp_port", "587");

    // sent data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // formatted sender info
    $sender_info = "<br>" . "name:" . $fullName . "<br>" . "email:" . $email . "<br>" . "phone:" . $phone . "<br>";

    // formatted topic info
    $topic_info = "<br>" . "subject:" . $subject . "<br>" . "message:" . $message . "<br>";

    $result = mail("victorpurice2003@gmail.com", $sender_info, $topic_info);
    dd($result);
    // error: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set()
}

require "views/contact.view.php";
