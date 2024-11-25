<?php
include '../config.php';
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $hours=$_POST['hours'];
    $que=$_POST['que'];
    $cri=$_POST['criteria'];
    $query="INSERT INTO `round`(`name`,`hours`,`question`,`no_criteria`) VALUES ('$title','$hours','$que','$cri')";
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