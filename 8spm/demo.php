<?php
header("Content-Security-Policy: frame-ancestors 'none'");
	include 'config.php';
	
        session_start();
        // session_regenerate_id(true);
// echo "1";



        error_reporting(E_ERROR | E_PARSE);
        if(isset($_SESSION['us']))
        {
            $name = $_SESSION['us']; 
        }
            else
                header("location:../404.html");


        $rndrnd = mysqli_query($con, "SELECT * FROM round where id= $_SESSION[currnd]")or die(mysqli_error());
        $time=mysqli_query($con,  "SELECT * FROM usr where uid='$_SESSION[us]'"); 
        $sglrnd = mysqli_fetch_assoc($rndrnd);
        $_SESSION['rndname']=$sglrnd['name'];
        $timernd = mysqli_fetch_assoc($time);
        $dt = DateTime::createFromFormat("H:i:s", "$timernd[last_login]");
        $hours = $dt->format('H');
        $mins = $dt->format('i');
        $seconds = $dt->format('s');
        date_default_timezone_set('Asia/Kolkata');
        $date = date('h:i:s ', time());
        $ddt=DateTime::createFromFormat('h:i:s ', $date);
        $dhours = $ddt->format('H');
        // echo $dhours;
        $dmins = $ddt->format('i');
        $dseconds = $ddt->format('s');
    $cookie_value=($hours*60*60)+($mins*60)+$seconds;
    

//     if(!isset($_COOKIE['timeleft'])){
//         setcookie("timeleft", $cookie_value, time() + (86400 * 30), "/");
//         echo "delo";
        
//     }
//     else{
//         echo  "lol";
//     }
// while(true)
// {
//     echo  "lol";
//     $sleep = 30;
//     sleep($sleep);
//     $date = date('h:i:s ', time());
//     $ddt=DateTime::createFromFormat('h:i:s ', $date);
//     $dhours = $ddt->format('H');
//     // echo $dhours;
//     $dmins = $ddt->format('i');
//     $dseconds = $ddt->format('s');
//     $cookie_valued=($dhours*60*60)+($dmins*60)+$dseconds;
//     setcookie("timeleft", $cookie_valued, time() + (86400 * 30), "/");
    
// }

    
    
if(isset($_POST['submit']))
{
    $sts=mysqli_query($con,"update `usr` set login_before='2' where uid='$_SESSION[us]'");
    
      // $cat=(int)$_POST['cat'];
    // $id_event="select id from team order by id desc";
    // $run_id = mysqli_query($con, $id_event);
    // $arr_id=mysqli_fetch_array($run_id);
    // $ids=$arr_id['id']+1;

   
    $file=$_FILES['files'];
    $fileName=$_FILES['files']['name'];
    $exten=pathinfo($fileName, PATHINFO_EXTENSION);
    $fileTmpName=$_FILES['files']['tmp_name'];
    $fileSize=$_FILES['files']['size'];
    $fileError=$_FILES['files']['error'];
    $fileType=$_FILES['files']['type'];
    $fileExt=explode('.', $fileName);
    $fileActualExt=strtolower(end($fileExt));
  $userid=$_SESSION['us'];
  $rndid=$_SESSION['currnd'];
    $newname= $_SESSION['us'].".".$exten;
    $newname = str_replace("'", "_", $newname);
    $allowed=array('zip','rar'); 
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize<300000000) {
                $fileDestination="submission/".$sglrnd['name'].'/'.$newname;
                move_uploaded_file($fileTmpName, $fileDestination);
                // $name = str_replace("'", "\'", $name);
                // $position = str_replace("'", "\'", $position);
                $query="update `submission` set filename='$fileDestination' where userid='$userid' and roundid='$rndid'";
                // echo $query;
    // exit();
                // $query="INSERT INTO `faculty`( `name`, `exp`, `photo`, `about`, `linkedin`, `email`, `research`, `designtion`, `department`, `orchid`, `google`, `vidhwan`, `education`) VALUES ('$name','$exp','$newname','$about','$linkedin','$email','$interest','$position','$dept','$orchid','$scholar','$vidwan','$education')";
                // echo $query;
                // exit();
                $run = mysqli_query($con, $query);
                header("Location: Thankyou.php");
            } else {
           
                echo "size  extended";
            }
        }
        else{
            // echo "lol";
            // exit();      
          }
    } else {
    //     echo "1";
    // exit();
    header("Location: Thankyou.php");
        echo $fileActualExt;
        
        echo "extension is no valid";
    }
}

    
    
   

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
   <script>
        function timeout(){
            
            var hours=Math.floor(timeLeft/3600);
            var hr=checktime(hours);
            var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
            var min=checktime(minute);
            var second=timeLeft%60;
            var sec=checktime(second);
            if(timeLeft<=0){
                // document.getElementById("submissionform").submit();
                // var form = document.getElementById('submissionform');
                
                setTimeout('document.wrksub.submit.click()',3000);
                
                return;


    //             clearTimeout(tm);
    //             window.onload=function(){ 
    // window.setTimeout(function() { document.nextbtn.click(); }, 5000);
// };
                // tm = null;
                // setTimeout(function(){redirect()},7000);
                
                // document.getElementById("acceptbtn").click();
//                 $('#acceptbtn').one('click', function() {
//     $(this).disable();
// });
                
                
                console.log("hello"); 
                // timeLeft=0;
            }
            else{
                if(minute<10){
                    minute="0"+minute;
                }
                document.getElementById("demo").innerHTML=hr+":"+min+":"+sec;
            }
            timeLeft--;
            // console.log("gelo");
            var tm=setTimeout(function(){timeout()},1000);
        }
        function checktime(msg){
            if(msg<10){
                msg="0"+msg;
            }
            return msg;
        }
        function  redirect(){
            document.getElementById("acceptbtn").click();
        }
        
    </script>
</head>
<body onload="timeout()" style="height:100vh; position:relative;">


        <div class="container col-12" style="top: 50%; position: absolute; left: 50%; transform: translate(-50%, -50%);">

    <h1 class="playtext"> Your Defination is  <b><span class="yellow-text"><?php echo htmlspecialchars($_SESSION['def']);  ?></span></b></h1>
    <h3 class="playtext"> Current round is <?php echo $sglrnd['name']; ?></h3>
    <script>
        
        var timeLeft1=<?php echo $sglrnd['hours'];  ?>*60*60;
        var mhr=<?php echo $hours;  ?>*60*60;
        var mmin=<?php echo $mins;  ?>*60;
        var msec=<?php echo $seconds;  ?>;
        var dmhr=<?php echo $dhours;  ?>*60*60;
        var dmmin=<?php echo $dmins;  ?>*60;
        var dmsec=<?php echo $dseconds; ?>;
        var atime=mhr+mmin+msec;
        var datime=dmhr+dmmin+dmsec;
        var timeLeft2=timeLeft1+atime;
        var timeLeft=timeLeft2-datime;


    </script>
    <h2 class="d-inline-block"> Time Left <span id="demo"></span></h2><h2 class="timershake d-inline-block">⏲️</h2>

<form method="post" class="col-12" name="wrksub" id="submissionform" enctype="multipart/form-data">


<!-- <input type="checkbox" id="f_agree" value="1" onchange="checkedFunc('f_agree', 'f_agree2')"/> -->
<label class="form-control-label">Select File (NOTE: Upload PDF file Only)</label> <br>
          <input type="file" class="my-3" name="files" accept=".zip,.rar"  
            autofocus>

<input type="submit" class="btn my-3 btn-cust btn-block mt-3 w-50 mx-auto"  value="Submit" name="submit"  />

</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>





var ctrlKeyDown = false;

$(document).ready(function(){    
    $(document).on("keydown", keydown);
    $(document).on("keyup", keyup);
});

function keydown(e) { 

    if ((e.which || e.keyCode) == 116 || ((e.which || e.keyCode) == 82 && ctrlKeyDown)) {
        
        e.preventDefault();
    } else if ((e.which || e.keyCode) == 17) {
        
        ctrlKeyDown = true;
    }
};

function keyup(e){
    
    if ((e.which || e.keyCode) == 17) 
        ctrlKeyDown = false;
};
</script>
<script>
  localStorage.removeItem("auto_saved_sql");
</script>   
</body>
</html>