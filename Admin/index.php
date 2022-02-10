<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");
if($conn->connect_error){
    die("connection error");
}
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@500&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Original+Surfer&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

    <title>Đăng nhập Admin</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />
  </head>
  <style>
    .nav-link:hover {
        background-color: #006666;       
        border-radius: 5px;
    }
 
  body{
    margin: 0;
    padding: 0;
    height: 90.4vh;
  }
  #particles-js{
    height: 100%;
    background-image:url(../images/back1.jpg);
    background-size: cover;
    
      
  }
  .panel {
    font-family: 'Source Sans Pro';
    font-size: 1.3em;
    position: absolute;
    z-index: 10;
    width: 200px;
    height: 220px;
    background: #eee;
    top: 50%;
    left: 50%;
    margin: -110px 0 0 -100px;
    padding: 20px;
    border-radius: 4px;
    box-sizing: border-box;
    z-index: 100;
    background-color:#13B2B8;
    opacity:0.9;
}

.panel p {
    font-size: 1.2em;
    font-weight: 700;
    text-align: center;
    color: #222;
    margin-top: -4px;
}
input:hover{
  background-color: #99ceff;
}

  </style>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13B2B8; padding-left:25px; width: 100%;">
        <a class="navbar-brand" href="/INTERIM/User/index.php" style="font-family: 'Lemonada', cursive;
            font-family: 'Poppins', sans-serif; font-size: 1.5vw; color: 006666;"><img src="../images/logo5.png" style="width: 7%;">&nbsp <b>Group 2</b><br>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="../User/index.php" style="margin-right: 20px; font-weight: bold;color: white; ">Phim / Sự kiện </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../User/contactus.php" style="margin-right: 20px; font-weight: bold;color: white;">Liên hệ với chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-right: 48px; font-weight: bold;color: white;">
                 Tài khoản
                 </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="../User/login.php">User</a>
                <a class="dropdown-item" href="index.php">Admin</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>


<div id="particles-js">
    <div class="panel" style="display: block;">
      <p style="color: white;"><b>Đăng nhập Admin</b></p>
      
      <form action="" method="post">
      <input type="text" name="username" class="form-control" placeholder="Tên tài khoản" style="text-align: center; border-radius: 10px;" required>
      <input type="password" name="password" class="form-control" placeholder="Mật khẩu" style="margin-top: 5%;text-align: center; color:black; border-radius: 10px;" required>
      <input type="submit" name="submit" class="btn btn-danger" value="Đăng nhập" style="margin-left: 20%; margin-top: 8%; border-radius: 10px;">
      </form>
    </div>
</div>
<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>


</body>
</html>


<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from admin where UserName='$username' and Password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
  // // $_SESSION['username'] = $_POST['username'];
  // echo '<script>alert("Đăng nhập thành công!"); window.location.href = "print.php"</script>';
  $_SESSION['login']=$_POST['username'];
  echo "<script> document.location = 'dashboard.php'; </script>";
}else{
  echo '<script>alert("Đăng nhập sai tài khoản hoặc mật khẩu!");</script>';;
}
}
?> 

