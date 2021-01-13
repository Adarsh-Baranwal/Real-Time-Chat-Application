<?php
session_start();
if(isset($_SESSION['isauthenticate'])  &&  $_SESSION['isauthenticate'] ==1)
{
include ('db_connect.php');
if(!empty($_POST['roomname']))
$room=$_POST['roomname'];
if(!empty($_POST['password']))
$pass=$_POST['password'];

if(!empty($_POST['submit']) && $_POST['submit'] == 'Claim Room')
{
$qry="INSERT INTO rooms VALUES ('$room','$pass')";
$result=mysqli_query($conn,$qry);
if(!$result){
echo "<center><strong>THIS ROOM ALREADY EXIST............!!</center>";}
else
echo "<center>Please Enter Room Details to Join</center>";
include('claim.php');
}
if(!empty($_POST['submit']) && $_POST['submit'] == 'Join Room')
{
    $qry="SELECT * FROM rooms WHERE roomname='$room' AND password='$pass'";
    $result=mysqli_query($conn,$qry);
    if(mysqli_num_rows($result)==0)
    {
        echo "<center><strong>Room Does'nt Exist....Please Enter Correct Room Details</center><br>";
        include('claim.php');
    }
    else
    {   
        $_SESSION['roomname']=$room;
        $user=$_SESSION['userid'];
        $qry="SELECT name FROM users WHERE user_id='$user'";
        $result=mysqli_query($conn,$qry);
        if(!$result)
        echo "ERR";
        else{
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $name=$row[0];
        }
        $qry="INSERT INTO room_participant VALUES ('$room','$name','$user')";
        mysqli_query($conn,$qry);
        header('location:main.php');
    }
}
}
else
{
    echo "<center><strong>Please Login to Join/Claim Room</center>";
    include "login.php";
}
?>