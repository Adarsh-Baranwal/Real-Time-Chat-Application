<?php
include"db_connect.php";
$user=$_POST['uname'];
$pass=$_POST['psw'];
$qry="SELECT * FROM users WHERE user_id='$user' AND password='$pass'";
$result=mysqli_query($conn,$qry);
if(!$result)
{
    echo "ERROR";
}
else
{
    if(mysqli_num_rows($result)==0)
    {
        echo "<center>USER DOES'NT EXIST..................</center>";
        echo "<br>";
        echo "<center>RE-ENTER UserId And Password</center>";
        include "login.php";
    }
    else
    {
        session_start();
        $_SESSION['userid']=$user;
        $_SESSION['isauthenticate']=1;
        //echo $_SESSION['userid'];
        header('location:claim.php');
    }
}
?>