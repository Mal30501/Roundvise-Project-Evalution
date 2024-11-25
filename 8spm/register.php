<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
<?php
header("Content-Security-Policy: frame-ancestors 'none'");

session_start();



	include 'config.php';

    require_once("function.php");
    require 'PHPMailer-master/PHPMailerAutoload.php';
    date_default_timezone_set('Asia/Kolkata');
$date = date('h:i:s ', time());




if(isset($_POST['regstr'])) {

  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $tool=$_POST['tool'];
  $pswd=$_POST['pswd'];
  $pswd=password_hash($pswd, PASSWORD_DEFAULT);
  $citytool=$city.$tool;
  // $email=$_POST['email'];
// echo($name."<br>");
// echo($lname."<br>");
// echo($email."<br>");
// echo($city."<br>");
// echo($tool."<br>");
// echo($pswd."<br>");
// echo($citytool);
 $slquery = "SELECT * FROM `usr` WHERE email = '$email' and type='1' ";
	$selectresult = mysqli_query($con,$slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'Email already exists';
    }
  else{    

$likequery="SELECT * FROM `usr` WHERE uid LIKE '$citytool%'";
// echo ($likequery."<br>");
$likerun = mysqli_query($con,$likequery);
$count=mysqli_num_rows($likerun);
// echo ($count."<br>");
$baseround="SELECT * FROM `activate_round` WHERE id=2";
$baseroundrun = mysqli_query($con,$baseround);
$bsrnd=mysqli_fetch_array($baseroundrun);
// echo ($likequery."<br>");
$count=$count+1;
$uidcount=sprintf("%03d", $count);

// sprintf("%02d", $count);
$seccode=strstr($email,'@',true); 
$seccode=password_hash($seccode, PASSWORD_DEFAULT);
  $sqlInsert = "INSERT INTO `usr`( `uid`, `psno`, `round`, `type`,`name`,`email`) VALUES ('$citytool$uidcount','$pswd',$bsrnd[round_id],'1','$name $lname','$email')";
  // echo $sqlInsert;
  // echo $a;
  // exit();
  $run = mysqli_query($con, $sqlInsert);
  if($run){
    // $email =$row['email'];
    // $message="lol";
            $message = "<style>
            @font-face {
              font-family: 'Dancing Script';
              font-style: normal;
              font-weight: 700;
              font-display: swap;
              src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Rep8ltA.woff2) format('woff2');
              unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
              }
              @font-face {
              font-family: 'Dancing Script';
              font-style: normal;
              font-weight: 700;
              font-display: swap;
              src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03ROp8ltA.woff2) format('woff2');
              unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
              }
              @font-face {
              font-family: 'Dancing Script';
              font-style: normal;
              font-weight: 700;
              font-display: swap;
              src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Sup8.woff2) format('woff2');
              unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
              }
            </style>
            <table
              style=\"table-layout:fixed;vertical-align:top;min-width:320px;margin:0 auto;border-spacing:0;border-collapse:collapse;background-color:#ffffff;width:100%;line-height:inherit\"
              valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
              <tbody style=\"line-height:inherit\">
                <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\" valign=\"top\">
                  <td style=\"word-break:break-word;vertical-align:top;line-height:inherit;border-collapse:collapse;background-image:url('');background-size:contain\"
                    valign=\"top\">
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:30px;padding-bottom:30px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div style=\"padding-right:0px;padding-left:0px;line-height:inherit\"
                                  align=\"center\"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;background-image:url('');background-position:top center;background-repeat:no-repeat;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div style=\"line-height:inherit\"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:20px;padding-bottom:15px;padding-right:0px;padding-left:0px;line-height:inherit;\">
                                <div style=\"padding-right:0px;padding-left:0px;line-height:inherit;display: inline-block;\"
                                  align=\"center\">
                                  <h1>Welcome To Round Wise Project Evalution</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div
                                  style=\"color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px\">
                                  <div
                                    style=\"line-height:1.2;font-size:12px;color:#000000;font-family:'Dancing Script','Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif\">
                                    <p
                                      style=\"line-height:1.2;word-break:break-word;font-size:20px;margin:0;text-align:center;\">
                                      <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$name."<br>Please Click the Below Link to  Verify your email "."</b></span></p>
                                      <br>
                                      <a
                                      style=\" background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none; font-size: 16px; margin: 4px 2px; cursor: pointer; \" href=\"localhost/8spm/verify.php?email=".$email."&vcode=".$seccode."   \"> Demo
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:15px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div
                                  style=\"font-family:Montserrat,&quot;Trebuchet MS&quot;,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,&quot;Lucida Sans&quot;,Tahoma,sans-serif;line-height:1.2;padding:10px\">
                                  <div
                                    style=\"line-height:1.2;font-family:'Dancing Script',Montserrat,&quot;Trebuchet MS&quot;,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,&quot;Lucida Sans&quot;,Tahoma,sans-serif\">
                                    
                                    <p
                                      style=\"color:rgb(0,0,0);font-size:18px;line-height:1.2;word-break:break-word;margin:0px\">
                                    </p>
                                    <p
                                      style=\"color:rgb(0,0,0);font-size:18px;line-height:1.2;word-break:break-word;margin:0px\">
                                    </p>
                                    <ul style=\"color:rgb(0,0,0)\"></ul>
                                    <div style=\"color:rgb(0,0,0);font-size:12px;text-align:center\">
                                      <div dir=\"ltr\" style=\"text-align:center\">
                                       
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div
                                  style=\"color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px\">
                                  <div
                                    style=\"line-height:1.2;font-size:12px;color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif\">
                                    <p
                                      style=\"line-height:1.2;word-break:break-word;text-align:center;font-size:14px;margin:0\">
                                      <span style=\"font-size:16px;line-height:inherit\"><i
                                          style=\"line-height:inherit\">Thank You,</i>
                                        <b style=\"line-height:inherit\"><i
                                            style=\"line-height:inherit\"><span class=\"il\">PRJ2021DCS026</span>
                                            <span class=\"il\">Team</span></i></b></span></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:5px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <table
                                  style=\"table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%;line-height:inherit\"
                                  valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                                  <tbody style=\"line-height:inherit\">
                                    <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                      valign=\"top\">
                                      <td style=\"word-break:break-word;vertical-align:top;min-width:100%;padding-top:15px;padding-right:10px;padding-bottom:10px;padding-left:10px;line-height:inherit;border-collapse:collapse\"
                                        valign=\"top\">
                                        <table
                                          style=\"table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;border-top:2px solid #e8d7c5;width:100%;line-height:inherit\"
                                          valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
                                          border=\"0\" align=\"center\">
                                          <tbody style=\"line-height:inherit\">
                                            <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                              valign=\"top\">
                                              <td style=\"word-break:break-word;vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                                valign=\"top\"><span
                                                  style=\"line-height:inherit\"></span></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style=\"background-color:transparent;line-height:inherit\">
                      <div
                        style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                        <div
                          style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                          <div
                            style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                            <div style=\"width:100%!important;line-height:inherit\">
                              <div
                                style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:60px;padding-bottom:5px;padding-right:0px;padding-left:0px;line-height:inherit\">
                                <div style=\"line-height:inherit\"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            ";
            $subject = "Email Verification";   
            $mailSentds = send_mail($email, $message, $subject,$file_path_pdf);


    // exit();
// header('location:timer.php');
if($mailSentds){
// header('otp.php');
// echo "sent";
// header('location:login.php');
}    
  }
  else{
      // echo "deo";
  }
}
}



?>






<header class="navigation nav-bg">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>
</header>



<div class=" container pt-5  col-12 row mx-auto">
		<img class="img-fluid col-6 pt-5" src="assets/register.svg"  alt="">

		<div class="login-content  mt-5 ms-auto col-6 ">
<form method="POST" class="col-7 pt-5 ms-auto me-3" onSubmit="document.getElementById('registerbtn').style.display='none';">
    <!-- <div class="container col-3 mx-auto form-border">
      <div id="disnone"> -->
      <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>First Name</h5>
           		   		<input type="text" class="input" autocomplete="off" id="name" aria-describedby="Name" name="name" onkeyup="s()" required >
           		   </div>
           		</div>
				<!-- <div class="form-group py-2">
					<label for="Name">First Name</label>
					<input type="text"  onkeyup="s()" class="form-control form-control-sm" autocomplete="off" id="name" aria-describedby="Name" name="name"  required autofocus>
         </div> -->
         <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Last Name</h5>
           		   		<input type="text" class="input" autocomplete="off" id="lname" aria-describedby="lname" name="lname" onkeyup="s()" required >
           		   </div>
           		</div>
         <!-- <div class="form-group py-2">
					<label for="lname">Last Name</label>
					<input type="text"  onkeyup="s()" class="form-control form-control-sm" autocomplete="off" id="lname" aria-describedby="lname" name="lname"  required autofocus>
         </div> -->
         <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>E-Mail</h5>
           		   		<input type="email" class="input" autocomplete="off" id="email" aria-describedby="email" name="email" onkeyup="s()" required >
           		   </div>
           		</div>
         <!-- <div class="form-group py-2">
					<label for="email">E-Mail</label>
					<input type="email"  onkeyup="s()" class="form-control form-control-sm" autocomplete="off" id="email" aria-describedby="email" name="email"  required autofocus>
         </div> -->
         <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<!-- <h5>Select City</h5> -->
                      <select name="city" class="form-control" id="city" required="required">
                      <option value="" selected="true"  disabled="true">Select City</option>
<?php
 $selcity = mysqli_query($con, "SELECT * FROM city  ORDER BY city.name ASC ")or die(mysqli_error());
//  $arrcity = mysqli_fetch_assoc($rndrnd);
 while ($arrcity = mysqli_fetch_assoc($selcity)) {
?>
          <option value="<?php echo $arrcity['sname']  ?>" ><?php echo $arrcity['name']  ?></option>
          <?php }  ?>
        </select>
           		   		<!-- <input type="email" class="input" autocomplete="off" id="email" aria-describedby="email" name="email" onkeyup="s()" required > -->
           		   </div>
           		</div>
         <!-- <div class="form-group py-2">
					<label for="selcity">Select City</label>
        <select name="city" class="form-control" id="city" required="required">
          <option value="" selected="true"  disabled="true">Select</option>
<?php
 $selcity = mysqli_query($con, "SELECT * FROM city  ORDER BY city.name ASC ")or die(mysqli_error());
//  $arrcity = mysqli_fetch_assoc($rndrnd);
 while ($arrcity = mysqli_fetch_assoc($selcity)) {
?>
          <option value="<?php echo $arrcity['sname']  ?>" ><?php echo $arrcity['name']  ?></option>
          <?php }  ?>
        </select>
        
         </div> -->




         <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<!-- <h5>Select City</h5> -->
                      <select name="tool" class="form-control" id="tool" required="required">
          <option value="" selected="true"  disabled="true">Select Tool</option>
<?php
 $seltool = mysqli_query($con, "SELECT * FROM tools  ORDER BY tools.name ASC ")or die(mysqli_error());
//  $arrcity = mysqli_fetch_assoc($rndrnd);
 while ($arrtool = mysqli_fetch_assoc($seltool)) {
?>
          <option value="<?php echo $arrtool['sname']  ?>" ><?php echo $arrtool['name']  ?></option>
          <?php }  ?>
        </select>
           		   		<!-- <input type="email" class="input" autocomplete="off" id="email" aria-describedby="email" name="email" onkeyup="s()" required > -->
           		   </div>
           		</div>



         <!-- <div class="form-group py-2">
					<label for="seltool">Select tool</label>
        <select name="tool" class="form-control" id="tool" required="required">
          <option value="" selected="true"  disabled="true">Select</option>
<?php
 $seltool = mysqli_query($con, "SELECT * FROM tools  ORDER BY tools.name ASC ")or die(mysqli_error());
//  $arrcity = mysqli_fetch_assoc($rndrnd);
 while ($arrtool = mysqli_fetch_assoc($seltool)) {
?>
          <option value="<?php echo $arrtool['sname']  ?>" ><?php echo $arrtool['name']  ?></option>
          <?php }  ?>
        </select>
        
         </div> -->




         <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Password</h5>
           		   		<input type="password" class="input" autocomplete="off" id="pswd"  name="pswd" onkeyup="s()" required >
           		   </div>
           		</div>

				<!-- <div class="form-group py-2">
					<label for="exampleInputPassword1">Password</label>
					<input type="password"  onkeyup="s()" autocomplete="off" class="form-control form-control-sm" id="pswd" name="pswd"  required>
               
                  
                </div> -->
                <!-- <div class="form-group py-2">
					<label for="exampleInputPassword1">Captcha</label>
          <br>
          <img src="captcha.php" class="img-fluid my-2">
					<input type="text" autocomplete="off" class="form-control form-control-sm" id="captacha"  name="captcha" required>
               
                    
                </div> -->

				<button type="submit" class="btn btn-cust btn-block mt-3 col-12" id="registerbtn"  disabled name="regstr">Login</button>


        <p class="mt-4" style="color:red;"><?php if(isset($msg)){ echo $msg;} ?></p>
        </div>
       
                </div>
			</form>








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

  function s(){
    if(document.getElementById("name").value==="" || document.getElementById("lname").value==="" || document.getElementById("email").value==="" || document.getElementById("city").value==="" || document.getElementById("tool").value==="" || document.getElementById("pswd").value==="" ){
    document.getElementById('registerbtn').disabled = true;
   }
   else{
    document.getElementById('registerbtn').disabled = false;


   }
  }
  
  localStorage.removeItem("auto_saved_sql");
  // document.cookie = " path=cadfest/";
</script>

<script>
//   function myFunction() {
//   document.getElementById("registerbtn").disabled = true;
// }
</script>
</body>
</html>