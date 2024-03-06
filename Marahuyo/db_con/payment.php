<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'johnerwinalbos@gmail.com';
$mail->Password = 'zqogncvjtqpojiya';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('johnerwinalbos@gmail.com');
$mail->addAddress('albosjohn0@gmail.com');

$price = isset($_GET['subtotal']) ? $_GET['subtotal'] : '';
$trip = isset($_GET['trip']) ? $_GET['trip'] : '';
$mail->Subject = 'Test Email';
$mail->Body = "Hello! This is a test email... Your total bill is: $price for booking in trip: $trip";

if ($mail->send()) {
    echo "<script>alert('Sent Successfully'); document.location.href = '../dist/index.php';</script>";
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}

?>