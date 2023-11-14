<?php
          require "../PHPMailer-master/src/PHPMailer.php";
          require "../PHPMailer-master/src/SMTP.php"; 
          require '../PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);  //true: enables exceptions
    $mail->isSMTP();
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';  //SMTP servers
    $mail->SMTPAuth = true; // Enable authentication
    $nguoigui = 'anhkietncong@gmail.com';
    $matkhau = 'njgn mniq alte voxt';
    $tennguoigui = 'kiet nguyen';
    $mail->Username = $nguoigui; // SMTP username
    $mail->Password = $matkhau;   // SMTP password
    $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
    $mail->Port = 465;  // port to connect to                
    $mail->setFrom($nguoigui, $tennguoigui);
    $tieude ='test'; 
    $recipients = "kietnguyenhoc@gmail.com, kietnca.22ds@vku.udn.vn";
    $email_array = explode(",",$recipients);
    foreach($email_array as $email)
    {
    $to      =  $email;
    $to_name  = 'ban';
    $mail->addAddress($to, $to_name); 
    }   
    $mail->Subject = $tieude;
	$noidungthu = 'test';
    $mail->Body =  $noidungthu;	
    $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
    ));
    if($mail->send())
    {
        echo "thanh cong";
    }
    else{
        echo "loi";
    }
?>