<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/OAuth.php';
require 'PHPMailer/src/POP3.php';
require 'PHPMailer/src/SMTP.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer{

public function datXe($tieude,$noidung,$img,$maildatxe){
    $mail= new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'hungnvph23034@fpt.edu.vn';                 // SMTP username
    $mail->Password = 'lotovwuurxjedzpm';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('hungnvph23034@fpt.edu.vn', 'AUTO XE H2l');
    $mail->addAddress($maildatxe, 'Auto Xe H2L');     // Add a recipient
    // $mail->addAddress('');               // Name is optional

    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject =$tieude;
    $mail->Body    = $noidung;
    $mail->Body .= "<img src='$img'><br>";
 
    $mail->send();
    // echo 'Mail đã được gửi thành công';
} catch (Exception $e) {
    echo "Không thể gủi mail . Có lỗi xảy ra : {$mail->ErrorInfo}";
}
}
}

?>