<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
    <style>
    * {box-sizing: border-box}

.text-block {
  position: absolute;
  bottom: 140px;
  right: 20px;
  background-color: rgb(235,245,434);
  color: black;
  padding-top: 20px;
  padding-bottom: 20px;
  padding-left: 40px;
  padding-right: 40px;
  margin-left: 350px;
  border-radius: 20px;
}
    </style>
</head>
<body>

<div class="w3-content w3-section">
  <img class="mySlides" src="img/Train carriage in Astoria OR.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/Sunset Paris France.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/Sunset during a storm over Lake Champlain VT.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/When the graffiti titles the picture for you.jpg" width="1300px" height="570px">
</div>
<div class="text-block">
<div class="container">
  <form action="room.php" method="POST">
      <h2 align="center">Join/Claim A ChatRoom :</h2>
        <input type="text" class="form-control" name="roomname" placeholder="RoomName" required><br>
        <input type="password" class="form-control" name="password" placeholder="Password" required><br>
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Join Room">Join Room</button>
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Claim Room">Claim Room</button>
  </form>
</div>
</div>

<script>

  // for image slider
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image in every 5 seconds
}
</script>
</body>
</html>