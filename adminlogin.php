<?php
$database="project";
$id=$_POST['loginid'];
$password=$_POST['loginpassword'];
 $con=mysqli_connect("localhost","root","") or die("unable to connect host");
                $sql=mysqli_select_db($con,$database)or die("unable to connect to database");
 $sql="SELECT email,password FROM admin where email='$id'";
$sql=mysqli_query($con,$sql);
$n=mysqli_fetch_array($sql);
if($n['email']==$id && $n['password']==$password)
    {
       echo "<script>window.location.href='insert.html'</script>";
    mysqli_close($con);
    exit;
    }
if($n['email']==$id && $n['password']!=$password)
    {
        echo "<script>alert('passsword incorrect'); window.location.href='adminlogin.html'</script>"; 
    mysqli_close($con);
    exit;
    }    
if($n['email']!=$id)
    {
        echo "<script>alert('account does exist'); window.location.href='adminlogin.html'</script>";
    mysqli_close($con);
    exit;
    }    
?>