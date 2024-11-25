<?php
header ("Content-type: image/jpg");
session_start();
$rand=rand(1111111,9999999);
// $string1="abcdefghijklmnopqrstuvwxyz";
// $string2="1234567890";
// $string=$string1.$string2;
// $rand= str_shuffle($string);
// $rand= substr($rand,0,8); 
$_SESSION['capttchha']=$rand;
$im = @ImageCreate (80,20)
or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 204, 204, 204); // Assign background color
$text_color = ImageColorAllocate ($im, 51, 51, 255);      // text color is given 
ImageString($im,7,5,2,$rand,$text_color); // Text added 
imageline ($im,0,10,500,30,$text_color);
imageline ($im,0,15,500,0,$text_color);
ImageJpeg ($im); // image displayed
imagedestroy($im); // Memory allocation for the image is removed. 
?>



