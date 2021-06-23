<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
    //Put data in variables
    $from = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $subject = "Form submission";
    $message = $from . " " . " wrote the following:" . "\n\n" . $_POST['content'];
    $message = wordwrap($message, 70, "\r\n");

    //Debugger for error 500
    ini_set('display_errors', 1);

    //Load Composer's autoloader
    require '../vendor/autoload.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->Username = "runnest.dev@gmail.com";                  // Site GMail user name
        $mail->Password = "LoDans20-30APlus";
        $mail->AddAddress("runnest.dev@gmail.com");         // recipients email
        $mail->FromName = $userName;                                // readable name
        $mail->From = $mail->Username;

        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->Host = "ssl://smtp.gmail.com";                       //GMail
        $mail->Port = 465;                                          //TCP port to connect to
        $mail->IsSMTP();                                            // use SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->SMTPAuth = true;                                     // turn on SMTP authentication
        $mail->Send();
        echo ("<script LANGUAGE='JavaScript'>window.location.href='../view';window.alert('Message has been sent');</script>");
    } catch (Exception $e) {
        echo ("<script LANGUAGE='JavaScript'>window.location.href='../view';window.alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>");
    }
}