
<?php

SESSION_START();
$name=$_POST['name'];
$em=$_POST['email'];
$pass=$_POST['password'];
$conn=mysqli_connect("localhost","root","","svcloud");
$q="insert into user values ('$name','$em','$pass')";
$r=mysqli_query($conn,$q);
if($r)
{ header("location:login.php");}
else
    header("location:signup.php");


?>



