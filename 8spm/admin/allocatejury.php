<?php
include 'header.php';
include '../config.php';



#$array = select jury members
#$arraysub = seelct partcipants id

#-------------------------------------------------
if(isset($_POST['submit'])){
$tooltable=mysqli_query($con, "select * from tools");

while($rowtools = mysqli_fetch_assoc($tooltable)){

$query = mysqli_query($con, "SELECT * FROM usr where type=2 and mst_tool='$rowtools[sname]'")or die(mysqli_error());
$roundid = mysqli_query($con, "SELECT * FROM activate_round where id=1 ")or die(mysqli_error());
$rowround = mysqli_fetch_assoc($roundid);
// $query =mysqli_query($con, "SELECT * FROM usr where type=2");
// $run = mysqli_query($con,$query);
$c=0;
// set array
$array = array();

// look through query
while($row = mysqli_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row['uid'];
  $c++;
}
$subm = mysqli_query($con, "SELECT * FROM submission where roundid=$rowround[round_id] and tool_id='$rowtools[sname]'")or die(mysqli_error());
// $query =mysqli_query($con, "SELECT * FROM usr where type=2");
// $run = mysqli_query($con,$query);
$cd=0;
// set array
$arraysub = array();

// look through query
while($rowsubm = mysqli_fetch_assoc($subm)){

  // add each row returned into an array
  $arraysub[] = $rowsubm['userid'];
  $cd++;
}

// for($i=0;$i=$c;$i++)
// {
// if($array[i]['username']==$mysearch)
// {
// // name found
// }
// }

$arr1 = ['a', 'b', 'c', 'd', 'e'];
// print_r($array);
// echo $query;
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$arrRes = [];

foreach($array as $key){

    $arrRes[$key] = [];
}
$maxLength = intval(count($arraysub) / count($array)) + 1;
for($i = 0; $i < count($array); ++$i) {
    for($j = 0; $j < $maxLength; ++$j) {
        $pos = $j * count($array) + $i;
        if($pos >= count($arraysub)) {
            break;
        }
        $arrRes[$array[$i]][] = $arraysub[$pos];
    }
}
// print_r($arrRes);
// print("-------------------------------");
#----------------------------
/*
id
jury id 
participant id
marks
round
*/

$sizeOfRes = count($arrRes);
// echo "$sizeOfRes";
$i=0;
while($i<$sizeOfRes){
	$sizeOfResofI = count($arrRes[$array[$i]]);
    $j = 0;
    while($j < $sizeOfResofI) {
    	// echo "just - " . $array[$i] . " participant - " . $arrRes[$array[$i]][$j] . "<br>";
    	// echo "insert into table (jury_id, participant_id) values (".$array[$i].",". $arrRes[$array[$i]][$j].")";
        // echo "update submission set juryid='".$array[$i]."' where userid='". $arrRes[$array[$i]][$j]."' and round_id=$rowround[round_id]";
        $upjury= mysqli_query($con,"update submission set juryid='".$array[$i]."' where userid='". $arrRes[$array[$i]][$j]."' and roundid=$rowround[round_id]");

        // echo "insert into table (jury_id, participant_id) values (".$arr1[$i].",". $arrRes[$arr1[$i]][$j].")";
        $j += 1;
    }
	$i += 1;
}


}
header("Location: adminmail.php");
}

?>



<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add  User</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Add User</h2>
            </div>
            <form method="post" enctype="multipart/form-data" >
                
               <div class="col-md-6">
                   <div class="form-group">
                   <label class="control-label">click On Button To allocate Jury</label>
                   <input type="submit" name="submit" class="btn btn-primary">
                   </div>
               </div>
                </div>
                
                
               
            </form>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      
        </div>
  </div>
<?php include 'footer.php'; ?>