<?php
$database="project";
$loginid=POST_['loginid'];
$loginpassword_['loginpassword'];

 $con=mysqli_connect("localhost","root","") or die("unable to connect host");
   $sql=mysqli_select_db($con,$database)or die("unable to connect to database");
if(mysqli_query($con,$sql))
{
    $checkid=.$email.;
    $checkpassword=.$password;
}
if($loginid==$checkid && $loginpassword==$checkpassword)
{
echo "all re correct";
    
}

?>