<?php
$roomname = $_SESSION['roomname'];
$sql = "SELECT name,user_id FROM room_participant WHERE roomname = '$roomname' ORDER BY name";

$res = mysqli_query($conn, $sql);
if(!$conn)
{
    echo "error";
}

    while($row = mysqli_fetch_array($res))
    {
        echo "<li>";
        echo "<div class='d-flex bd-highlight'>";
        echo "<div class='img_cont'>";
        echo "<img src='https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg' class='rounded-circle user_img'>";
        echo "<span class='online_icon'></span>";
        echo "</div>";
        echo "<div class='user_info'>";
        echo "<span>"; echo $row["name"]; echo "</span>";
        echo "<p>"; echo $row["user_id"]; echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "</li>";  
    }

?>
