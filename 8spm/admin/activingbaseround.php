<?php
include '../config.php';
if(isset($_POST['submit']))
{
    $title=$_POST['actround'];
  
    $query="update `activate_round` set round_id='$title' where id=2 ";
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: actbaseround.php");
} 
?>