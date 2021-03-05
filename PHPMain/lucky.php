<?php

    set_time_limit(120);
    require_once '/var/www/html/PHPMailer-5.2.26/PHPMailerAutoload.php';

    $wd[] = parse_ini_file("lucky.ini", true);

    $mail = new PHPMailer;

    $mail->SMTPDebug = 3;
    $mail->Host = 'lucky-tools.cn';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Charset = 'utf-8';
    $mail->Encoding = 'base64';
    $mail->Username = 'vt\vtinfo';
    $mail->Password = '23382121';
    $mail->SMTSecure = 'tls';
    $mail->Port = 587;
    $mail->Debugoutput = 'html';

    $mail->setFrom('vtinfo@lucky-tools.cn');
    $mail->addAddress('jinhau.huang@lucky-tools.com.tw');
    $mail->isHTML(true);
    
    $mail->Subject = 'Here is test Subject';
    $mail->Body = 'This is the HTML message body';
    $mail->AltBody = 'This is the body in plain text';

    if($mail->send())
    {
        echo 'Message cloud not be send.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

?>