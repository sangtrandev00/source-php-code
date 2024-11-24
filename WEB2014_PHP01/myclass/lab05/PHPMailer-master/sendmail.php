<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // gửi mail SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'sangtnps20227@fpt.edu.vn'; // SMTP username
    $mail->Password = 'phaithanhcong10'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    //Recipients
    $mail->setFrom('sangtnps20227@fpt.edu.vn', 'Mailer');
    $mail->addAddress('nhatsang0101@gmail.com', 'Sang Tran'); // Add a recipient
    $mail->addAddress('ellen@example.com'); // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Here is the subject! I has sent you an email! Please open and read';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>. And this lab05 php1, please give 10 grade thank you';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}