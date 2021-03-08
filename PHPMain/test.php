<?php

    set_time_limit(120);
    require_once '/var/www/html/PHPMailer-5.2.26/PHPMailerAutoload.php';
    // require_once '/var/www/html/PHPMailer-5.2.26/class.phpmaileroauthgoogle.php';

    $wd[] = parse_ini_file("test.ini", true);

    $mail = new PHPMailer();

    $mail->SMTPDebug = 3;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTSecure = 'tls';
    // $mail->Host = 'smtp.gmail.com';
    $mail->Host = $wd[0][setmail][host];
    $mail->Charset = 'utf-8'; // 設定郵件編碼
    $mail->Encoding = 'base64';
    // $mail->Username = 'gmail account';
    $mail->Username = $wd[0][setmail][username];
    // $mail->Password = 'password';
    $mail->Password = $wd[0][setmail][password];
    // $mail->Port = 587;
    $mail->Port = $wd[0][setmail][port];
    $mail->Debugoutput = 'html';

    $mail->setFrom('gmail', 'user');
    $mail->addAddress('gmail', 'user2');
    $mail->isHTML(true);
    
    $mail->Subject = 'Here is test Subject';
    $mail->Body = 'This is the HTML message body';
    $mail->AltBody = 'This is the body in plain text';

    /*
    foreach ($wd[0][tomail][address] as $key => $value)
    {
        $mail->AddAddress($value)
    }

    foreach ($wd[0][tomail][addcc] as $key => $value)
    {
        $mail->AddCC($value)
    }

    foreach ($wd[0][tomail][addbcc] as $key => $value)
    {
        $mail->AddBCC($value)
    }
    */

    if($mail->send())
    {
        echo 'Message has been sent';
    } else {
        echo 'Message cloud not be send.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    }

?>