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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- footer part -->
    <link rel="stylesheet" type="text/css" href="footer/footer.css">
    
    
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />

    <style>
        body{
            /* background: -webkit-linear-gradient(left, #13B2B8,#cc99ff,#13B2B8); */
            background-image: url(../images/login3.png);
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-position: center; 
                        
            

           
        }
        
    .nav-link:hover {
        /* text-decoration: underline; */
        background-color: #006666;       
        border-radius: 5px;
    }
    
   
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

::selection{
  background: #fa4299;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 400px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  margin-top: 3%;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  
  
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;
}
.slide-controls label.signup{
  color: #000;
}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #a445b2, #fa4299);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #fc83bb;
  /* box-shadow: inset 0 0 3px #fb6aae; */
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #fa4299;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #a445b2, #fa4299, #a445b2, #fa4299);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 1;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}

    </style>
  </head>
  <body>
    
   <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13B2B8; padding-left:25px; width: 100%;">
        <a class="navbar-brand" href="index.php" style="font-family: 'Poppins', sans-serif; font-size: 1.5vw; color: black;"><img src="../images/logo5.png" style="width: 7%;">&nbsp <b>Group 2</b><br>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="" style="margin-right: 20px; font-weight: bold;color: white; ">Phim / S??? ki???n </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review_rating.php" style="margin-right: 20px; font-weight: bold;color: white; ">????nh gi?? & X???p h???ng </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" style="margin-right: 20px; font-weight: bold;color: white;">Li??n h??? v???i ch??ng t??i</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-right: 67px; font-weight: bold;color: white;">
                T??i kho???n
                 </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">User </a>
                <a class="dropdown-item" href="../Admin/index.php">Admin</a>
                </div>
                </li>
            </ul>
        </div>
    </nav> 

 


<center>
<div class="wrapper">
  <div class="title-text">
    <div class="title login">
      ????ng nh???p</div>
    <div class="title signup">
      ????ng k??</div>
  </div>

<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">????ng nh???p</label>
          <label for="signup" class="slide signup">????ng k??</label>
          <div class="slider-tab">
          </div>
        </div>

<div class="form-inner">
          <form method="POST" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Email" required>
            </div>

            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
<div class="pass-link">
    <a href="#">Qu??n m???t kh???u</a></div>
    <div class="field btn">
              <div class="btn-layer">
              </div>
              <input name="submitlogin" type="submit" value="????ng nh???p">
    </div>
    <div class="signup-link">
        B???n ch??a c?? t??i kho???n ? <a href="">????ng k?? ngay</a></div>
</form>


<form method="POST" class="signup">
            <div class="field">
              <input type="text" name="name" placeholder="H??? t??n" required>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="field">
              <input type="number" name="number" placeholder="??i???n tho???i" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="M???t kh???u"required >
            </div>
            
              <div class="field btn">
              <div class="btn-layer">
</div>
  <input name="submitsignup" type="submit" value="????ng k??">
</div>
</form>
</div>
</div>
</div>



<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

</center>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <br>
    <br>
    
    <!-- <?php
    include('footer/footer.php');
    ?> -->
    <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
  </body>
</html>


<!-- FOR LOGIN -->
<?php
if(isset($_POST['submitlogin'])){
$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from users where email='$email' and password='$password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
  // // $_SESSION['username'] = $_POST['username'];
  // echo '<script>alert("????ng nh???p th??nh c??ng!"); window.location.href = "print.php"</script>';
  $_SESSION['login']=$_POST['email'];
  echo "<script> document.location = 'index1.php'; </script>";
}else{
  echo '<script>alert("Sai email ho???c m???t kh???u!");</script>';;
}
}
?> 

<!-- FOR SIGNUP -->
<?php
if(isset($_POST['submitsignup'])){
  $name =$_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["number"];
  $password = $_POST["password"];
  
  $query1 = "insert into users(name, email, contact_no, password) values('$name','$email', '$contact', '$password');";
  if(mysqli_query($conn,$query1)){
    echo '<script>alert("????ng k?? th??nh c??ng!");</script>';
    
  }else{
    echo '<script>alert("Email ???? ???????c s??? d???ng!");</script>';
  }
  mysqli_close($conn);
}
?>