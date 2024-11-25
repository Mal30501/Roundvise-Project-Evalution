<?php
header("Content-Security-Policy: frame-ancestors 'none'");
	include 'config.php';
    session_start();
    // session_regenerate_id(true);
    // error_reporting(E_ERROR | E_PARSE);
    // echo $_SESSION['us'];
    // exit();
if(isset($_SESSION['us']))
{
    $name = $_SESSION['us']; 
    // echo "set";
    // exit();
}
    else{
        // echo "notset";
    // exit();
        header("location:../404.html");
    }
    $check=mysqli_query($con, "select * from submission where userid='$_SESSION[us]' and roundid=$_SESSION[currnd]");
    $checkarray=mysqli_fetch_assoc($check);
    $getrow=mysqli_num_rows($check);
    // echo $getrow;
    // exit();
if($getrow==0){
}
else{
    // echo $getrow;
    // echo "else";
    // exit();
    $_SESSION['def']=$checkarray['qid'];
    header('location:demo.php');
}
    // echo $getrow;
    // echo "if";
    // exit();
    if(isset($_POST['next'])) {
    //    echo "hello";
      
		$def=$_POST['defination'];
        $_SESSION['def']=$def;
        $userid=$_SESSION['us'];
        $rndid=$_SESSION['currnd'];
        $a="INSERT INTO `submission` (`userid`, `roundid`,`qid`,`tool_id`) VALUES ('$userid','$rndid','$def', '$_SESSION[tool]')";
        // echo $a;
        // exit();
        $run = mysqli_query($con, $a);
        if($run){
            header('location:demo.php');
        }
        else{
            echo "deo";
        }
       


   

	
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet" >
</head>
<body>
<div class="col-6 mx-auto py-5">
    
<h1 class="pt-3 ">Welcome <span class="yellow-text"><?php echo $_SESSION['nameus'];  ?></span> <br></h1>
<p>Please follow below given Instructions 👇</p>
</div>
<div class="col-6 mx-auto text-center">
    <div class="row">
        <div class="col-md-6 dos">
        <h2>Do's</h2>
<ul class="checkmark">

    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
</ul>
        </div>
        <div class="col-md-6">
        <h2>Dont's</h2>
<ul class="crossmark">

    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
    <li> demo</li>
</ul>
        </div>
    </div>



<form method="post" class="mb-5">
<select class="form-select form-select-lg mb-3" name="defination" aria-label=".form-select-lg example" id="f_agree" onchange="checkedFunc('f_agree', 'f_agree2')"  >
<option value="" disabled selected><?php echo htmlspecialchars("--Select Any One Defination--")  ?></option>  
<?php 
 $toolss = mysqli_query($con, "SELECT * FROM tools where sname= '$_SESSION[tool]' ")or die(mysqli_error());
 $ttl = mysqli_fetch_assoc($toolss);
//  echo "SELECT * FROM tools where sname= $_SESSION[tool]";
$selrnd = mysqli_query($con, "SELECT * FROM question where round_id= $_SESSION[currnd] and tool_id= $ttl[id] ")or die(mysqli_error());
while ($single = mysqli_fetch_assoc($selrnd)) {
    $rndrnd = mysqli_query($con, "SELECT * FROM round where id= $_SESSION[currnd] ")or die(mysqli_error());
    $sglrnd = mysqli_fetch_assoc($rndrnd);
    $input = array("1", "2", "3", "4", "5");
$rand_keys = array_rand($input,  $sglrnd['question']);
$i=0;
while($i<$sglrnd['question']){
    $s = "full_question" . $input[$rand_keys[$i]];
    ?>
    <option value="<?php echo $single[$s] ?>" ><?php echo htmlspecialchars($single[$s]) ?></option>  
<?php 
$i+=1;
}
} 

?>
</select>

<!-- <input type="checkbox" id="f_agree" value="1" onchange="checkedFunc('f_agree', 'f_agree2')"/> -->
<input type="checkbox" id="f_agree2" value="1" onchange="checkedFunc('f_agree','f_agree2')"/> I accept To terms and condition
<br>
<input type="submit" value="Next" id="acceptbtn" name="next" class="btn btn-cust btn-block mt-3 col-3 mx-auto text-center" disabled/>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    function checkedFunc(element1Id, element2Id) {
  
  var myLayer = document.getElementById('acceptbtn');
  var element1 = document.getElementById(element1Id);
  var element2 = document.getElementById(element2Id);
  var ddsel;
  if(element1.value){
      
      ddsel=true;
  }
  else{
    
  }
 if (ddsel == true && element2.checked == true) {
      myLayer.class = "submit";
      myLayer.removeAttribute("disabled");
 } else {
      myLayer.class = "button:disabled";
      myLayer.setAttribute("disabled","disabled");
 };
}
</script>
<script>
  localStorage.removeItem("auto_saved_sql");
</script>
</body>
</html>