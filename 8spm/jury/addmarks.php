<?php
include 'header.php';



include '../config.php';
if(isset($_POST['See']))
{
    $student=$_POST['student'];
    $roundid = mysqli_query($con, "SELECT * FROM activate_round where id=1 ")or die(mysqli_error());
    $rowround = mysqli_fetch_assoc($roundid);
    $query="select * from submission where roundid=$rowround[round_id] and userid='$student' ";
    $roundround = mysqli_query($con, "SELECT * FROM round where id=$rowround[round_id] ")or die(mysqli_error());
    $rowroundwow = mysqli_fetch_assoc($roundround);
    $_SESSION['activeroundid']=$rowround['round_id'];
    // var_dump($rowroundwow);
    // $criunm="r1";
    if($rowroundwow['no_criteria']=="8"){
        
        $criunm="r1";
        
        // exit();
        
    }
    elseif($rowroundwow['no_criteria']=="11"){
        
        $criunm="r2";
        
        // exit();
        
    }
    elseif($rowroundwow['no_criteria']=="12"){
        
        $criunm="r3";
        
        // exit();
        
    }
   
    
    // echo $query;
    // echo "SELECT * FROM activate_round where id=1";
    // exit();

    $run = mysqli_query($con,$query);
    $qr = mysqli_fetch_assoc($run);
    $_SESSION['tempuid']=$qr['userid'];
    $_SESSION['tempid']=$qr['id'];
    $_SESSION['flieloc']=$qr['filename'];
    $_SESSION['problemsts']=$qr['qid'];
    // header("Location: addmarks.php");
} 

// $ar=$qr;
if(isset($_POST['submit']))
{
    $m1=0;
    $m2=0;
    $m3=0;
    $m4=0;
    $m5=0;
    $m6=0;
    $m7=0;
    $m8=0;
    $m9=0;
    $m10=0;
    $m11=0;
    $m12=0;
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
    $m3=$_POST['m3'];
    $m4=$_POST['m4'];
    $m5=$_POST['m5'];
    $m6=$_POST['m6'];
    $m7=$_POST['m7'];
    $m8=$_POST['m8'];
    $m9=$_POST['m9'];
    $m10=$_POST['m10'];
    $m11=$_POST['m11'];
    $m12=$_POST['m12'];
    for ($i=1;$i<=12;$i++){
        ${'m' . $i};
        if(isset(${'m' . $i})){
            // echo "------".$x;
        }
        else{
            ${'m' . $i}=0;
            // echo "    ->"."$i";
        }
        // echo "   ------>".${'m' . $i};
    }
    // echo "_____________"."$m9"."                                        ";
    $marks=$m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10+$m11+$m12;
    // echo $qr['userid'];
    // exit();
    // echo "insert into marks ( `usrid`, `submission_id`, `juryid`,`m1`,`m2`,`m3`,`m4`,`m5`,`m6`,`m7`,`m8`,`m9`,`m10`,`m11`,`m12`,`total`,`roundmarks`) values('$_SESSION[tempuid]','$_SESSION[tempid]','$_SESSION[us]','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$m11','$m12','$marks','$_SESSION[activeroundid]')";
    // exit();
    $mid = mysqli_query($con, "insert into marks ( `usrid`, `submission_id`, `juryid`,`m1`,`m2`,`m3`,`m4`,`m5`,`m6`,`m7`,`m8`,`m9`,`m10`,`m11`,`m12`,`total`,`roundmarks`) values('$_SESSION[tempuid]','$_SESSION[tempid]','$_SESSION[us]','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$m11','$m12','$marks','$_SESSION[activeroundid]')")or die(mysqli_error());
    $rowm = mysqli_fetch_assoc($mid);
    // $query="select * from submission where roundid=$rowround[id] and userid='$student' ";
    
    // echo $query;
    // echo "SELECT * FROM activate_round where id=1";
    // exit();

    // $run = mysqli_query($con,$query);
    header("Location: addmarks.php");
} 
?>



<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            
            <li class="breadcrumb-item active">Add Questions</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Question Detail</h2>
            </div>
            <form method="post" enctype="multipart/form-data" >
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                        
                            <label>Select Round</label>
                            <select class="form-control" name="student">
                            <?php
                            $a="SELECT userid FROM submission where userid not in (select usrid from marks) and juryid='$_SESSION[us]' ";
                  $selrnd = mysqli_query($con, $a)or die(mysqli_error());
                  while ($single = mysqli_fetch_assoc($selrnd)) {
                      
                      ?>        
                            <option value="<?php echo $single['userid'];  ?>"><?php echo $single['userid'];  ?></option>
                           <?php } ?> 
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <input type="submit" name="See" class="btn btn-primary mt-4">
                        </div>
                    </div>
                </div>
                  </form>


                  <?php if(isset($_POST['See']))
{  ?>
                  <hr>




                  <form method="post" enctype="multipart/form-data" >
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Click Below Link TO Download ZIp file</label>

                            <br>
                            <label>Selected Problem Statement is <?php echo $_SESSION['problemsts'];  ?></label>
                            <a href="../<?php echo $_SESSION['flieloc'];  ?>" download>Click Here to Download Project</a>
                        </div>
                    </div>
                </div>
                  <?php 
                  
                  $criteria=mysqli_query($con,"select * from criteria limit $rowroundwow[no_criteria]");
                  $i=1;
                  while ($crrti = mysqli_fetch_assoc($criteria)) {

                  ?>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label><?php echo $crrti['criteria_name']." (Enter Marks Out of ".$crrti[$criunm].")";  ?></label>
                            <input class="form-control" type="text" name="<?php echo "m".$i;  ?>" placeholder="Enter Marks"  required>
                        </div>
                    </div>

                  

                </div>
               <?php
                $i=$i+1;
            }  ?>
              
              
                    
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
            <?php  } ?>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      
        </div>
  </div>
<?php include 'footer.php'; ?>