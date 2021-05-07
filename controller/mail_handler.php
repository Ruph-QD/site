<?php 
if(isset($_POST['send'])){
    $to = "laurie.galmiche@gmail.com";
    $from = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $subject = "Form submission";
    $message = $userName . " " . " wrote the following:" . "\n\n" . $_POST['content'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Envoyé. Merci " . $userName . ", nous vous recontactons rapidement.";
    }
