<?php
include '../config.php';
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $sname=$_POST['sname'];
    $query="INSERT INTO `tools`(`name`,`sname`) VALUES ('$title','$sname')";
    
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: addtool.php");
} 
?>