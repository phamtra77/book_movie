<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&family=Original+Surfer&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
    <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
   
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Change Password</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />



  <script type="text/javascript">
    function valid()
    {
    if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
    {
    alert("New Password and Confirm Password Field do not match  !!");
    document.chngpwd.confirmpassword.focus();
    return false;
    }
    return true;
    }
    </script>
    
</head>
<style>
    
    #wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
#list{
    background-color: #13B2B8; 
    color:black;
}
#list:hover{     
    background-color: #ccccff;               
    }
</style>

<body style="background-color: #ccccff;">
   
<div class="d-flex" id="wrapper">


<div class=" border-right" id="sidebar-wrapper"  style="background-color: #13B2B8;">
  <div class="list-group list-group-flush" style="margin-top: 10vh;">
  <a href="dashboard.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-tachometer-alt"></i>&nbsp Trang chủ</a>
    <a href="movieslist.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-list-ol"></i>&nbsp Quản lý phim</a>
    <a href="eventslist.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-list-ol"></i>&nbsp Quản lý sự kiện</a>
    <a href="theatrelist.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-desktop"></i>&nbsp Quản lý rạp chiếu phim</a>
    <a href="user_bookings.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-users"></i>&nbsp Quản lý đặt vé</a>
    <a href="managequery.php" class="list-group-item list-group-item-action" id="list"><i class="far fa-question-circle"></i>&nbsp Quản lý phản hồi của khách hàng</a>
    <a href="changepassword.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-eye"></i>&nbsp Đổi mật khẩu</a>
    <a href="logout.php" class="list-group-item list-group-item-action" id="list"><i class="fas fa-power-off"></i>&nbsp Đăng xuất</a>
  </div>
</div>

<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light border-bottom" style="background-color: #13B2B8;">

    <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif; font-size: 1.5vw; color: black;"><img src="../images/logo5.png" style="width: 7%;; margin-left:2%;">&nbsp <b>Group 2</b>
        </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
       
      </ul>
    </div>
  </nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title" style="width:80%; padding:0.5%;margin-top:2%; padding-left: 1%; background-color:#336699;border-radius: 10px; box-shadow: 5px 5px #888888;color:#ffffcc;">Đổi mật khẩu</h2>
              <br>  <div class="col-md-10">
					<div class="panel-body"  style="padding: 2%; border-radius: 10px; border: 1px solid #00b3b3;">
						<form method="post" name="chngpwd" onSubmit="return valid();">
							<div class="form-group">
								<label class="col-sm-4 control-label">Mật khẩu cũ</label>
								    <div class="col-sm-8">
										<input type="password" class="form-control" name="password" id="password" required style="background-color:#ffffcc;">
									</div>
							</div>
											
							<div class="form-group">
						        <label class="col-sm-4 control-label">Mật khẩu mới</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="newpassword" id="newpassword" required style="background-color:#ffffcc;">
									</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Xác nhận mật khẩu</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required style="background-color:#ffffcc;">
									</div>
							</div>
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-4">
								    <button class="btn btn-success" name="submit" type="submit" style="transition: background-color .3s,color .15s,box-shadow .3s,opacity .3s;">Lưu</button>
								</div>
              </div>
            
<?php
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}

    if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $username = $_SESSION['login'];
        $query = "select Password from admin where UserName='$username' and Password='$password'";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0){
            $sql = "update admin set Password ='$newpassword' where UserName = '$username'";
            $changepswd = mysqli_query($conn,$sql);
            echo"<b style='color:#00b33c;'>Success:</b><b> Your Password succesfully changed!</b>";
        }else{
            echo "<b style='color:#00b33c;'>Error:</b><b> Your current password is not valid!</b>";
        } 
    }


?>


					    </form>

					</div>
			</div>
							
        </div>
    </div>
</div>

</div>


<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>