<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $labid=$_POST['event_id'];

    $query="INSERT INTO `paper_pub`(`des`,`lab`) VALUES ('$name','$labid')";
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: addpaper.php");
} 
?>