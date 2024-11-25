<?php 
include '../config.php';
$id = $_GET['id'];
$table = $_GET['table'];
$file = $_GET['file'];
$image = $_GET['image'];
if(!is_null($image)){
    unlink("../assets/$image");
    // echo "../assets/images/$image";
    // exit();
}
else{
    // echo "world";
    // exit();
}
// echo $id."__".$table."__".$file;
$sql = "delete from $table where id='$id'";
echo $sql;
// exit();
mysqli_query($con, $sql);
header("location:$file");

?>