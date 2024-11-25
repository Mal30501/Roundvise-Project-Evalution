<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<?php 
include 'config.php';
session_start();
date_default_timezone_set('Asia/Kolkata');
$date = date('h:i:s ', time());
$uid=$_SESSION['us'];
if(isset($_POST['login'])){
$otp=$_POST['otp'];

// exit();
$query = "SELECT * FROM `usr` WHERE uid = '$uid'";
// echo $query;

$run = mysqli_query($con,$query);
$row = mysqli_fetch_array($run);
// var_dump ($row);
// exit();
// echo $row['type'];


if($row['otpgen']==$otp){
    // echo "done";
    if ($row['type']==1){
    //     echo "1";
    // exit();
    // echo "hello";
    session_start();
    $_SESSION['us']=$row['uid'];
    $status = "UPDATE `usr` SET last_login ='$date' WHERE uid = '$uid' and type = 1 and login_before= 0";
    // echo $status;
    // exit();
    // $status = "UPDATE `usr` SET login_before =1 WHERE uid = '$uid' and type = 1 ";
    $runstatus = mysqli_query($con,$status);
    $sst="UPDATE `usr` SET login_before =1 WHERE uid = '$uid' and type = 1 " ;
    $runstatus = mysqli_query($con,$sst);
    header('location:timer.php');
    // exit();
}
elseif($row['type']==2){
    // echo "2";
    // exit();
    session_start();
    $_SESSION['us']=$row['uid'];
        // $_SESSION['usrtyp']=$row['type']; 
        // exit();
        header('location:jury/index.php');
   }
   elseif($row['type']==3){
    // echo "3";
    // exit();
    session_start();
    $_SESSION['us']=$row['uid'];
    //     $_SESSION['usrtyp']=$row['type']; 
        header('location:admin/index.php');
   }
}
else{
    // echo "wrong";
    // exit();
    $error_print="<span class='text-danger'>Please Enter Correct OTP </span>";
    
}



}


?>








                    <div class=" container pt-5  col-12 row mx-auto">
		<img class="img-fluid col-md-6 pt-5" src="assets/otp.svg"  alt="">
        <div class="login-content pt-5 mt-5 ms-auto col-md-6 ">
<form method="POST">
    <!-- <div class="container col-3 mx-auto form-border">
      <div id="disnone"> -->
				
				<!-- <div class="form-group py-2">
					<label for="exampleInputPassword1">OTP</label>
					<input type="text" autocomplete="off" class="form-control form-control-sm" id="exampleInputPassword1" name="otp" onkeyup="s()" required>
               
                    <?php echo $error_print;  ?>
                </div> -->
                <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>OTP</h5>
           		   		<input type="text" class="input" autocomplete="off" id="exampleInputPassword1" aria-describedby="emailHelp" name="otp" onkeyup="s()" required autofocus>
           		   </div>
           		</div>
				<button type="submit" class="btn btn-cust btn-block mt-3 col-12" id="loginbtn" name="login">Login</button>
        <!-- </div>
       
                </div> -->
			</form>
</div>
</div>

            <!-- Button trigger modal -->


<!-- Modal -->





  
<script>
    const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
  function s() {
    if(document.getElementById("exampleInputPassword1").value==="" 
     ) {
    document.getElementById('loginbtn').disabled = true;
   }
   else{
    document.getElementById('loginbtn').disabled = false;
   }
  }
  
</script>

<script>
  localStorage.removeItem("auto_saved_sql");
</script>
</body>
</html>