<?php 

function send_mail($to, $message, $subject,$file_path1){
	
	$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug =0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "8semsgp@gmail.com";                 
$mail->Password = "Antimatter89";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

//$mail->From = "@gmail.com";
$mail->FromName = "8SPM";

$mail->addAddress($to);
// $mail->addBCC('8semsgp@gmail.com');

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content";
$mail->addAttachment($file_path1);
$mail->SMTPOptions=array("ssl"=>array(
	"verify_peer"=>false,
	"verify_peer_name"=>false,
	"allow_self_signed"=>false,
));
if(!$mail->send()) 
{
     //echo "Mailer Error: " . $mail->ErrorInfo;
	 return false;
} 
else 
{
	// echo "dfmdsfnsdfndsjfnsdpk;f";
    return true;
}
}

?>