<?php
include '../config.php';
$gid=$_GET['id'];
if(isset($gid))
{
    // $title=$_POST['actround'];
  
    $query="update `usr` set login_before=0 where id='$gid' ";
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: activateuser.php");
} 
?>