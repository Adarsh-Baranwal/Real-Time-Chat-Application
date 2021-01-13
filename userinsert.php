<?php
$pass=$_POST['psw'];
$name=$_POST['name'];
$userid=$_POST['userid'];
include('db_connect.php');
$qry="INSERT INTO users VALUES ('$userid','$name','$pass')";
$result=mysqli_query($conn,$qry);
if(!$result)
echo "<strong>THIS USER ALREADY EXIST............";
else
{
echo "<center><strong>Your Account Has Been Created!!<center>";
include('login.php');}
//header('location:login.php');

?>