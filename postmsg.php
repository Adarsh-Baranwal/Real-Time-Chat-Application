<?php
session_start();
include 'db_connect.php';
$msg = $_POST['text'];
$room = $_SESSION['roomname'];
$ip = $_POST['ip'];
$user=$_SESSION['userid'];
$sql = "INSERT INTO `msgs` (`msg`, `room`, `ip`, `stime`,`user_id`) VALUES ( '$msg', '$room', '$ip', current_timestamp(),'$user'); ";
$r=mysqli_query($conn, $sql);
if(!$r)
echo 'error';
mysqli_close($conn);

?>