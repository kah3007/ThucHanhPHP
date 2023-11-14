<?php
          require "../PHPMailer-master/src/PHPMailer.php";
          require "../PHPMailer-master/src/SMTP.php"; 
          require '../PHPMailer-master/src/Exception.php'; 
          $mail = new PHPMailer\PHPMailer\PHPMailer(true); 
            try {
               // $mail->SMTPDebug = 2;  // 0,1,2: chế độ debug. khi mọi cấu hình đều tớt thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true; // Enable authentication
		    $nguoigui = 'anhkietncong@gmail.com';
		    $matkhau = ' njgn mniq alte voxt';// mật khẩu của tài khoản ngolequanvh@gmail.com
		    $tennguoigui = 'Nguyen Cong Anh Kiet';
                $mail->Username = $nguoigui; // SMTP username
                $mail->Password = $matkhau;   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom($nguoigui, $tennguoigui ); 
                $to = "kietnguyenhoc@gmail.com";
                $to_name = "lequan";
                
                $mail->addAddress($to, $to_name);
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'Gửi thư từ php';      
                $noidungthu = "<b>Chào bạn!</b><br>Chúc an lành!" ;
                $mail->Body = $noidungthu;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }

?>
