<?php

    set_time_limit(120);
    require_once '/var/www/html/PHPMailer-5.2.26/PHPMailerAutoload.php';
    // require_once '/var/www/html/PHPMailer-5.2.26/class.phpmaileroauthgoogle.php';

    $mail = new PHPMailer();

    $mail->SMTPDebug = 3;
    $mail->Host = 'smtp.gmail.com';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Charset = 'utf-8';
    $mail->Encoding = 'base64';
    $mail->Username = 's1058074@gm.pu.edu.tw';
    $mail->Password = 's1058074';
    $mail->SMTSecure = 'tls';
    $mail->Port = 587;
    $mail->Debugoutput = 'html';

    $mail->setFrom('s1058074@gm.pu.edu.tw', 'jinhau');
    $mail->addAddress('s1058074@gm.pu.edu.tw', 'jinhau');
    $mail->isHTML(true);
    
    $mail->Subject = 'Here is test Subject';
    $mail->Body = 'This is the HTML message body';
    $mail->AltBody = 'This is the body in plain text';

    if($mail->send())
    {
        echo 'Message has been sent';
    } else {
        echo 'Message cloud not be send.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    }

?>