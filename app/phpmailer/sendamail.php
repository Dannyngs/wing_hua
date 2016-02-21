<?php
 
 require("class.phpmailer.php");  
 include('class.smtp.php');
  
  
 function smtp_mail( $sendto_email, $subject, $body){   
     $mail = new PHPMailer();   
     $mail->IsSMTP();   
         $mail->SMTPDebug  = 0;                     // 启用SMTP调试功能               // send via SMTP   
     $mail->Host = "msv.c-m.hk";   // SMTP servers   
     $mail->SMTPAuth = true;           // turn on SMTP authentication   
     $mail->Username = "danny.ng";     // SMTP username  注意：普通邮件认证不需要加 @域名   
     $mail->Password = "cmmail123"; // SMTP password   
     $mail->From = "application@c-m.hk";      // 发件人邮箱   
     $mail->FromName =  "CM Admin";  // 发件人   
	$mail->Port = 25; 
     $mail->CharSet = "UTF-8";   // 这里指定字符集！   
     $mail->Encoding = "base64";   
     $mail->AddAddress($sendto_email);  // 收件人邮箱和姓名   
     $mail->AddReplyTo("application@c-m.hk","c-m.hk");   
     //$mail->WordWrap = 50; // set word wrap 换行字数   
     //$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件   
     //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");   
     $mail->IsHTML(true);  // send as HTML   
     // 邮件主题   
     $mail->Subject = $subject;   
     // 邮件内容   
     $mail->AltBody ="text/html";
     $mail->Body = $body;     
            
     if($mail->Send())   
     {    
            return true ;  
         //exit;   
	  
     }else {   
           //echo "邮件发送有误 <p>";   
          // echo "邮件错误信息: " . $mail->ErrorInfo;  
	    return false;
	   
	   
	   
     }   
     
 }   
 
 
 
  
?>