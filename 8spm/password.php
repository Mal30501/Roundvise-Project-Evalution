<?php  
$psno="123";
$psno=password_hash($psno, PASSWORD_DEFAULT);  
echo $psno; ?>