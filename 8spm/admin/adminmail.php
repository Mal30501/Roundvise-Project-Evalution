<?php
session_start();

require_once("function.php");
require 'PHPMailer-master/PHPMailerAutoload.php';
$firstname ="demo" ;
$email ="niharsoni23@gmail.com";
$message="lol";
        $message = "Name:-".$firstname."<br>"."Email:-".$email."<br>"."Message:-".$message;
        $subject = "Thank You For contacting ";   
        $mailSent = send_mail($email, $message, $subject);
        if ($mailSent) {
            
          header('location:allocatejury.php');
            
        } else {
            
                  }
 ?>

