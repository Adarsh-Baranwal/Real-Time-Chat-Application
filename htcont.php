<?php
session_start();
include "db_connect.php";
$roomname = $_SESSION['roomname'];
$user=$_SESSION['userid'];
$sql = "SELECT msg, stime, user_id FROM msgs WHERE room = '$roomname' ORDER BY stime";

$res = "";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_array($result))
    {
        if($row['user_id'] != $user)
        {
            $res = $res . '<div class="d-flex justify-content-start mb-4"  align="center"><div class="img_cont_msg"><img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg"></div>';
            $res = $res . '<div class="msg_cotainer">'. $row['msg'];
            $res = $res . '<span class="msg_time">' . $row['stime'];
            $res = $res . '</span></div></div>';
            echo $res;
        }
        else
        {
            $res = $res . '<div class="d-flex justify-content-end mb-4"  align="center"><div class="img_cont_msg"><img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg"></div>';
            $res = $res . '<div class="msg_cotainer_send">'. $row['msg'];
            $res = $res . '<span class="msg_time_send">' . $row['stime'];
            $res = $res . '</span></div></div>';
            echo $res;
        }
        $res='';
    }
    //echo $res;
    
}

?>