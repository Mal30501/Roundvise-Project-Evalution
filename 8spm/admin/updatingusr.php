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
          $round=$_POST['actround'];
          $ty=0;
            $sqlInsert = "UPDATE `usr` SET round=? and login_before=? where uid=?";
            $paramType = "sss";
            $paramArray = array(
                $round,
                $ty,
                $uid
                
                 
            );
            $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
            if (! empty($insertId)) {
                header("Location: updateusr.php");
            } else {
              header("Location: updateusr.php");
            }
        }
    }
}

?>