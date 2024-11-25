<?php 
include 'config.php';


$email=$_GET['email'];
$vcode=$_GET['vcode'];
$seccode=strstr($email,'@',true);
$verify = password_verify($seccode, $vcode);
if($verify){
    // echo "done";

    $sqlInsert = "update `usr` set is_verified=1 where email='$email' and type='1' ";
    $run = mysqli_query($con, $sqlInsert);
    if($run){
        header('location:login.php');
    }

}
else{
    header('location:index.php');
}

// echo $email; 

?>