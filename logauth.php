
<?php

SESSION_START();

$em=$_POST['email'];
$pass=$_POST['password'];
$conn=mysqli_connect("localhost","root","","svcloud");
$q="select * from user where email='$em' and password='$pass'";
$r=mysqli_query($conn,$q);

if(!$r)
{ header("location:login.php");}
else
{
 $_SESSION['ema']=$em;
 header("location:base.php");

}



?>