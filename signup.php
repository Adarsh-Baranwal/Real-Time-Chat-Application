<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Chat</title>
    <style>
    * {box-sizing: border-box}

.text-block {
  position: absolute;
  bottom: 120px;
  right: 480px;
  background-color: rgb(235,245,434);
  color: black;
  padding-top: 20px;
  padding-bottom: 18px;
  padding-left: 40px;
  padding-right: 10px;
  margin-left: 350px;
  border-radius: 20px;
}
    </style>
</head>
<body>

<div class="fixed">
  <img class="mySlides" src="img/chatbg1.png" width="1300px" height="570px">
</div>
<div class="text-block">
<div class="container">
  <form class="col-lg-10" method="post" action="userinsert.php">
  <h3>Sign Up :-</h3>
     <input type="text" name="userid" placeholder="UserId" class="form-control"><br>
     <input type="phone" name="name" placeholder="Name" class="form-control"><br>
     <input type="password" name="psw" placeholder="Password" class="form-control"><br>
     <input type="submit" name="register"  value="Resister" class="btn btn-lg btn-primary btn-block">
    </form>

  <hr>
   <div class="separator">
       <p class="change_link">Already have account?
           <a href="login.php" style="text-decoration: underline;"> <b>Sign in</b> </a>
       </p>
   </div>
</div>
</div>

</body>
</html>