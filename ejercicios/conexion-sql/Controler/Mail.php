<?php
require("../vendor/phpmailer/phpmailer/src/PHPMailer.php");
require("../vendor/phpmailer/phpmailer/src/SMTP.php");
require_once("../env.php");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    // Enable verbose debug output
    $mail->isSMTP();                                            
    // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    
    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   
    // Enable SMTP authentication
    $mail->Username   = MAIL;                     
    // SMTP username
    $mail->Password   = MAIL_KEY;                               
    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    
    // TCP port to connect to

    //Recipients
    $mail->setFrom(MAIL, 'PHPMAILER');
    $mail->addAddress($_GET["email"]);

    // Attachments
    $mail->addAttachment('../img/pelican.jpg');         

    // Content
    $mail->isHTML(true);                                  
    // Set email format to HTML
    $mail->Subject = '¡ZayasBooks!';
    $mail->Body = 'Gracias por registrate en nuestra aplicación de libros';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: ../index.php");