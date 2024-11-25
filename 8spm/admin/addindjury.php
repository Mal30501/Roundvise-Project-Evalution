<?php
use Phppot\datasource;
require_once 'datasource.php';
$db = new DataSource();
$conn = $db->getConnection();
if (isset($_POST["submit"])) {
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $uid = "";
            if (isset($column[0])) {
                $uid = mysqli_real_escape_string($conn, $column[0]);
            }
            $psno = "";
            if (isset($column[1])) {
                $psno = mysqli_real_escape_string($conn, $column[1]);
                $psno=password_hash($psno, PASSWORD_DEFAULT);
            }
            $nme = "";
            if (isset($column[2])) {
                $nme = mysqli_real_escape_string($conn, $column[2]);
            }
            $email = "";
            if (isset($column[3])) {
                $email = mysqli_real_escape_string($conn, $column[3]);
            }
            $tool = "";
            if (isset($column[4])) {
                $tool = mysqli_real_escape_string($conn, $column[4]);
            }
        //   $round=$_POST['actround'];
          $ty=2;
            $sqlInsert = "INSERT INTO `usr`( `uid`, `psno`,  `type`,`name`,`email`,`mst_tool`) VALUES (?,?,?,?,?,?)";
            $paramType = "ssssss";
            $paramArray = array(
                $uid,
                $psno,
                $ty,
                $nme,
                $email,
                $tool  
            );
            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            if (! empty($insertId)) {
                header("Location: addjury.php");
            } else {
              header("Location: adduserf.php");
            }
        }
    }
}

?>