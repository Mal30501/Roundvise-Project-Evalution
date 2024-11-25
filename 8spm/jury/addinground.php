<?php
include '../config.php';
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $hours=$_POST['hours'];
    $que=$_POST['que'];
    $query="INSERT INTO `round`(`name`,`hours`,`question`) VALUES ('$title','$hours','$que')";
    if(!file_exists("../submission/".$title))
          {
              mkdir("../submission/".$title);
              }
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: addround.php");
} 
?>