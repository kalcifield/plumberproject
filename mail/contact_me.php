<?php

require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
require '../vendor/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if( empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'].FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$mail = new PHPMailer();
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'cpanel14.tarhelypark.hu';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@dugulastelharitunk.hu';                 // SMTP username
$mail->Password = '8o!,Rx6A)eP)0a';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

//Recipients
$mail->setFrom('info@dugulastelharitunk.hu', 'Dugulas webmail');
$mail->addAddress('bezilaszlo95@gmail.com', 'Joe User');     // Add a recipient

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Dugulaselharitas webmail';
$mail->Body    = "<b>Név:</b> {$name} <br> <b>Email:</b> {$email_address} <br> 
<b>Telefonszám:</b> {$phone} <br><b>Üzenet:</b> {$message}";

if(!$mail->send()) {
    echo 'A levél nem küldhető el.';
    echo 'PHPMailer hiba: ' . $mail->ErrorInfo;
} else {
    echo 'A levél elküldve.';
}