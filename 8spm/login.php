<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
if(isset($_SESSION["locked"])){
  $diff=time()-$_SESSION["locked"];
  if($diff > 10){
    unset($_SESSION["locked"]);
    unset($_SESSION["login_attempt"]);
  }
}

// if(http_response_code(403)){
// header("HTTP/1.1 403 Forbidden" );
// exit;
// }
	include 'config.php';
    require_once("function.php");
    require 'PHPMailer-master/PHPMailerAutoload.php';
    date_default_timezone_set('Asia/Kolkata');
$date = date('h:i:s ', time());

// echo $date;
if(isset($_POST['forgot'])) {
		
    $uid1 = mysqli_real_escape_string($con,$_POST['emailadd']);
    // $psno1 = mysqli_real_escape_string($con,$_POST['psnofor']); 
        $queryfor = "SELECT * FROM `usr` WHERE email = '$uid1'";
        $runfor = mysqli_query($con,$queryfor);
        $rowfor = mysqli_fetch_array($runfor);
        // $verify1 = password_verify($psno1, $rowfor['psno']);

        if($rowfor>0){

           
            
            $email =$rowfor['email'];
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
                                              <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$rowfor['name']."<br>Your UID is ".$rowfor['uid']."</b></span></p>
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
                    $subject = "Forgot UID";   
                    $mailSent = send_mail($email, $message, $subject,$file_path_pdf);
                    if ($mailSent) {
                        
                      header('location:index.php');
                        
                    } else {
                              }
            
        }
        else{
            $error_print="<span class='text-danger'>Email or psno is incorrect</span>";
        }
}








// if ($antiflood == "") 
// {
	if(isset($_POST['login'])) {

		$uid = mysqli_real_escape_string($con,$_POST['uid']);
    
		$psno = mysqli_real_escape_string($con,$_POST['psno']); 
		    $query = "SELECT * FROM `usr` WHERE uid = '$uid'";
        
            $acquer = "SELECT * FROM `activate_round` WHERE id = 1 ";
		    
   $run = mysqli_query($con,$query);
   $acrun = mysqli_query($con,$acquer);
   $row = mysqli_fetch_array($run);
   $acrow = mysqli_fetch_array($acrun);
//    echo $acrow['round_id'];
$verify = password_verify($psno, $row['psno']);

  
   
   if($_POST['captcha']==$_SESSION['capttchha']){
    // echo "done";
    //  exit();
   }
   else{
     
    // echo "fia";
    //  exit();
   }
   if($_POST['captcha']==$_SESSION['capttchha']){
    if($verify){
       
    if ($row['type']==1){
       if($row['is_verified']==1){
       if($row['login_before']==0 || $row['login_before']==1){
       
           if($row['round']==$acrow['round_id']){
            $secure = true; // if you only want to receive the cookie over HTTPS
            $httponly = true; // prevent JavaScript access to session cookie
            
    session_start();
    //  
   
    $count = mysqli_num_rows($run);
   $_SESSION['us']=$row['uid'];
   $_SESSION['emailus']=$row['email'];
   $_SESSION['nameus']=$row['name'];
   $ttl=substr($row['uid'],3,3);
            $_SESSION['currnd']=$acrow['round_id'];
            $_SESSION['tool']=$ttl;

            $atool = "SELECT * FROM tools WHERE sname = '$ttl' ";
            $acruntool = mysqli_query($con,$atool);
            // $row = mysqli_fetch_array($run);
            $acrowtool = mysqli_fetch_array($acruntool);
            $_SESSION['toolname']=$acrowtool['name'];

            // echo $_SESSION['currnd'];
            
        if ($row['type']==1){
            $_SESSION['usrtyp']=$row['type']; 

          $otprandgen=rand(111111,999999);
          $status = "UPDATE `usr` SET otpgen ='$otprandgen' WHERE uid = '$uid' and type = 1 ";

          // echo $status;
          // exit();
          // $status = "UPDATE `usr` SET login_before =1 WHERE uid = '$uid' and type = 1 ";
          $runstatus = mysqli_query($con,$status);

            $email =$row['email'];
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
                                              <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$row['name']."<br>Your OTP for Login is ".$otprandgen."</b></span></p>
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
                    $subject = "OTP";   
                    $mailSentds = send_mail($email, $message, $subject,$file_path_pdf);


            // exit();
		// header('location:timer.php');
    if($mailSentds){
    // header('otp.php');
    // echo "sent";
    header('location:otp.php');
    }
   
   }
//    elseif($row['type']==2)
//    {
    session_start();
//     $_SESSION['usrtyp']=$row['type']; 
//     header('location:admin/index.php');
//    }
//    elseif($row['type']==3)
//    {
//     $_SESSION['usrtyp']=$row['type']; 
//     header('location:admin/index.php');
//    }
//    else{}
}
else{
    $error_print="<span class='text-danger'>Sorry You Are Not Selected in This Round Or Wait for Confirmation till the date of Round</span>";
}
      //  }
}
else{
    $error_print="<a href='mailto:niharsoni23@gmail.com' class='btn btn-danger mt-3'><span class='text-white'>Contact Administrator</span></a>";
}
       }
       else{
        $error_print="<span class='text-danger'>Please Verify your email.</span>";
    }
   }
   elseif($row['type']==2){
    session_start();
    $_SESSION['us']=$row['uid'];
        $_SESSION['usrtyp']=$row['type']; 
        $otprandgen=rand(111111,999999);
        $status = "UPDATE `usr` SET otpgen ='$otprandgen' WHERE uid = '$uid' and type = 2 ";
        $runstatus = mysqli_query($con,$status);
        // exit();
        $email =$row['email'];
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
                                              <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$row['name']."<br>Your OTP for Login is ".$otprandgen."</b></span></p>
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
                    $subject = "OTP";   
                    $mailSentds = send_mail($email, $message, $subject,$file_path_pdf);


            // exit();
		// header('location:timer.php');
    if($mailSentds){
    // header('otp.php');
    // echo "sent";
    header('location:otp.php');
    }
        // header('location:otp.php');
   }
   elseif($row['type']==3){
    session_start();
    $_SESSION['us']=$row['uid'];
        $_SESSION['usrtyp']=$row['type']; 
        // header('location:otp.php');
        $otprandgen=rand(111111,999999);
        $status = "UPDATE `usr` SET otpgen ='$otprandgen' WHERE uid = '$uid' and type = 3 ";
        $runstatus = mysqli_query($con,$status);
        $email =$row['email'];
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
                                              <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$row['name']."<br>Your OTP for Login is ".$otprandgen."</b></span></p>
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
                    $subject = "OTP";   
                    $mailSentds = send_mail($email, $message, $subject,$file_path_pdf);


            // exit();
		// header('location:timer.php');
    if($mailSentds){
    // header('otp.php');
    // echo "sent";
    header('location:otp.php');
    }
   }
}

   else{
    session_start();
     $_SESSION["login_attempt"] +=1;
       $error_print="<span class='text-danger'>Username or password is incorrect</span>";
   }
	}
  else{
    $_SESSION["login_attempt"] +=1;
    $error_print="<span class='text-danger'>Captcha  is incorrect</span>";
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
		<img class="img-fluid col-6 pt-5" src="assets/login.svg"  alt="">

		<div class="login-content pt-5 mt-5 ms-auto col-6 ">

<form method="POST" class="col-7 pt-5 ms-auto me-3" onSubmit="document.getElementById('loginbtn').style.display='none';">
<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp" name="uid" onkeyup="s()" required autofocus>
           		   </div>
           		</div>
    <!-- <div class="container pt-5 form-border"> -->
      <!-- <div id="disnone"  class="col-md-3 ms-auto pt-5 cusform"> -->
			
      <!-- <div class="form-group py-2"> -->
					<!-- <label for="exampleInputEmail1">UID</label> -->
					<!-- <input type="text" class="form-control form-control-sm" autocomplete="off" id="exampleInputEmail1" aria-describedby="emailHelp" name="uid" onkeyup="s()" required autofocus> -->
				
                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-decoration-none float-end mt-1">Forgot Your UID?</a> -->
                <!-- </div> -->

                <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" autocomplete="off" id="exampleInputPassword1" name="psno" onkeyup="s()" required>
            	   </div>
            	</div>
				<!-- <div class="form-group py-2"> -->
					<!-- <label for="exampleInputPassword1">Password</label> -->
					<!-- <input type="password" autocomplete="off" class="form-control form-control-sm" id="exampleInputPassword1" name="psno" onkeyup="s()" required> -->
               
                  
                <!-- </div> -->
                <img src="captcha.php" class="img-fluid w-50 mt-3">
                <div class="input-div one row">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Captcha</h5>
                      
           		   		<input type="text" class="input" autocomplete="off"  id="captacha"  name="captcha" onkeyup="s()"  required>
           		   </div>
                  <!-- <br> -->
                  
                  
           		</div>
                <!-- <div class="form-group py-2"> -->
					<!-- <label for="exampleInputPassword1">Captcha</label> -->
          <!-- <br> -->
          <!-- <img src="captcha.php" class="img-fluid my-2"> -->
					<!-- <input type="text" autocomplete="off" class="form-control form-control-sm" id="captacha"  name="captcha" onkeyup="s()"  required> -->
               
                    
                <!-- </div> -->
  <?php if ($_SESSION["login_attempt"] > 2){
    $_SESSION["locked"]=time();
    echo "<p>Please wait for 10 seconds </p>";
  } 
  else {
    
    ?>
      <?php echo $error_print;  ?>
				<button type="submit" class="btn btn-cust btn-block mt-3 col-12" id="loginbtn"  disabled name="login">Login</button>
<?php }  ?>
        </div>
       
                </div>
			</form>


            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot UID</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Forgot Your UID Don't worry just enter your email you will recieve mail on your registered email address.</p>

        <form method="POST" onSubmit="document.getElementById('btnforgot').style.display='none';">
    <div class="container mx-auto form-border">
				<div class="form-group py-2">
					<label for="exampleInputEmail1">EMAIL ADDRESS</label>
					<input type="text" autocomplete="off" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailadd" required autofocus>
				
                
                </div>
				

             
				<button type="submit" class="btn btn-cust btn-block mt-3 col-12" id="btnforgot" name="forgot">GET UID</button>
                </div>
			</form>

      </div>
    
    </div>
  </div>
</div>





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
    if(document.getElementById("exampleInputEmail1").value==="" || document.getElementById("exampleInputPassword1").value==="" || document.getElementById("captacha").value==="") {
    document.getElementById('loginbtn').disabled = true;
   }
   else{
    document.getElementById('loginbtn').disabled = false;
    if(document.getElementById('button').clicked == true)
{
   alert("button was clicked");
}

   }
  }
  
  localStorage.removeItem("auto_saved_sql");
  // document.cookie = " path=cadfest/";
</script>

<script>
//   function myFunction() {
//   document.getElementById("loginbtn").disabled = true;
// }
</script>
</body>
</html>