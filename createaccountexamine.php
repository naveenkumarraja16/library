  <?php
$database="project";
$name=$_POST['uname'];
$dob=$_POST['dateofbirth'];
$email=$_POST['emailid'];
$mobile=$_POST['mobilenumber'];
$password=$_POST['password'];             
$repassword=$_POST['repassword'];
$captcha=$_POST['captcha'];
                $con=mysqli_connect("localhost","root","") or die("unable to connect host");
                $sql=mysqli_select_db($con,$database)or die("unable to connect to database");
    if($password != $repassword)
    {
        echo "<script>alert('password and re-password are incorrect'); window.location.href='createaccount.HTML'</script>";
        exit;
    }

$lenght=strlen($mobile);
if($lenght!=10)
{
      echo "<script>alert('mobile number is incorrect'); window.location.href='createaccount.HTML'</script>";
    exit;
}
$filename="date.txt";
$tempvar=fopen($filename,"w");
fwrite($tempvar,$dob);
fclose($tempvar);

$datecheck=file_get_contents("date.txt");
$datecheck=preg_split("/\-/",$datecheck);
$month=date("m");
$todaydate=date("d");
if($datecheck[0]==2019)
{
    if($datecheck[1]>$month)
    {
        echo "<script>alert('date is incorrect'); window.location.href='createaccount.HTML'</script>";
    exit;
    }
    else
    {
        if($datecheck[2]>$todaydate)
        {
            echo "<script>alert('date is incorrect'); window.location.href='createaccount.HTML'</script>";
    exit;
        }
    }
}
if($datecheck[0]>2019)
{
    echo "<script>alert('date is incorrect'); window.location.href='createaccount.HTML'</script>";
    exit;
}
$captacha=file_get_contents("captacha.txt");
if($captacha!=$captcha)
{
    echo "<script>alert('captcha is incorrect'); window.location.href='createaccount.HTML'</script>";
    exit;
}
$sql="INSERT INTO createaccount values('$name','$dob','$email','$mobile','$password')";
if(mysqli_query($con,$sql))
   echo "<script>alert('values are accepted'); window.location.href='mainpage.html'</script>";
else
{
   echo "<script>alert('account is already exist'); window.location.href='createaccount.HTML'</script>";
    
}
mysqli_close($con);
?>