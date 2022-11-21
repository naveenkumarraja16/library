<?php
//$=to create any variable
//microtime() is a function is to show the microtime
//md5 is used to encrypt
$change_time=md5(microtime());
//substr() is a function is used to decrease the lenght 1st paramenter is the variable and 2nd and 3rd  is the lenght required between
$get_value=substr($change_time,0,6);

//create image width and height
$filename="captacha.txt";
$tempvar=fopen($filename,"w");
fwrite($tempvar,$get_value);
fclose($tempvar);
$create_image=imagecreate(100,30);
//imagecolorallocate() this functio is used to allocate the color to the image
// and the numbers are to mention the color in rgb
imagecolorallocate($create_image,151,112,183);
//for text color in rgb
$text_color=imagecolorallocate($create_image,255,255,255);
//imagestring function is used to merge the strings
//the 5 is the size of the text and 15 and 7 is the top and left
imagestring($create_image,5,25,7,$get_value,$text_color);
//output
// to get the output in the jpeg format
header("Content-type:image/jpeg");
imagejpeg($create_image);
//this below function is used to destroy
imagedestroy($create_image);
?>