<?php

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.memorialtrip.com";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "info@memorialtrip.com";
$mail->Password = "ENTER THE PASSWORD";

$mail->From = "info@memorialtrip.com";
$mail->FromName = "Test from Info";
$mail->AddAddress("RECIPIENT EMAIL ADDRESS");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Test message from server";
$mail->Body = "Test Mail<b>in bold!</b>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";

?>