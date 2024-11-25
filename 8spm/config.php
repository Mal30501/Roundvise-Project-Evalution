<?php
error_reporting(1);
$con = mysqli_connect("localhost","root","","8spm");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>	
