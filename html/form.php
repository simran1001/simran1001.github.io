<?php
$u_name=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pwd=$_POST['password'];
$server="localhost";
$username="root";
$password=" ";
$db="mydb";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
die(mysqli_connect_errno());
else
echo"Connected successfully.....!";
$sql="insert into login2
values('$u_name','$email','$mobile','$pwd')";
if(mysqli_query($conn,$sql))
echo"welcome to our website to learn new things";
else
echo"error in filling information";
mysqli_close($conn);
?>