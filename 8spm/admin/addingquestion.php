<?php
include '../config.php';
if(isset($_POST['submit']))
{
    $round=$_POST['round'];
    $tool=$_POST['tool'];
    $que1=$_POST['que1'];
    $que2=$_POST['que2'];
    $que3=$_POST['que3'];
    $que4=$_POST['que4'];
    $que5=$_POST['que5'];
    $query="INSERT INTO `question`(`full_question1`,`full_question2`,`full_question3`,`full_question4`,`full_question5`,`round_id`,`tool_id`) VALUES ('$que1','$que2','$que3','$que4','$que5','$round','$tool')";
    // echo $query;
    // exit();

    $run = mysqli_query($con,$query);
    header("Location: addquestion.php");
} 
?>