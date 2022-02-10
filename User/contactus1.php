<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0){
    header('Location: login.php');
}
?>
<?php
$email = $_SESSION['login'];
$account_query = "select * from users where email='$email'";
 $account_view = $conn ->query($account_query);
 while ($row = $account_view->fetch_assoc()){
   $name=$row['name'];
 }
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer/footer.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

    <title>Contact Us</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />
</head>

<style>
    .nav-link:hover {
        background-color: #006666;
        border-radius: 5px;
    }
    
    body {
        background-color: #ccccff;
    }
    
    </style>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #13B2B8; padding-left:25px; width: 100%;">
        <a class="navbar-brand" href="index1.php" style="font-family: 'Poppins', sans-serif; font-size: 1.5vw; color: black;"><img src="../images/logo5.png" style="width: 7%;">&nbsp <b>Group 2</b><br>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="index1.php" style="margin-right: 20px; font-weight: bold;color: white; ">Phim / Sự kiện </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_review_rating.php" style="margin-right: 20px; font-weight: bold;color: white;">Đánh giá & Xếp hạng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus1.php" style="margin-right: 20px; font-weight: bold;color: white;">Liên hệ với chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-right: 67px; font-weight: bold;color: white;font-family: 'Macondo', cursive;">
                <?php echo "$name"?>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="updateprofile.php">Cập nhật user</a>
                <a class="dropdown-item" href="booking_details.php">Lịch sử đặt vé</a>
                <a class="dropdown-item" href="review_rating1.php">Đánh giá phim</a>
                <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                </div>
                </li>

            </ul>
        </div>
    </nav>


    <br> 
    
    <div class="container">
        <h1 class="mt-4 mb-3" style="font-family: 'Poppins', sans-serif;">Liên hệ với chúng tôi</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index1.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active">Liên hệ với chúng tôi</li>
        </ol>
        <form method="post">
            <div style="background-color: #ffbb99;  padding: 2%; border-radius: 5px;">
                <div class="column">
                    <h3 style="font-family: 'Poppins', sans-serif;">Gửi tin nhắn cho chúng tôi</h3>
                    <br>

                    <div class="col-lg-6 mb-4">
                        <div>Họ tên<span style="color:red">*</span></div>
                        <input name="fullname" class="form-control" type="text"  required>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div>Điện thoại<span style="color:red">*</span></div>
                        <input name="mobileno" class="form-control" type="number"  required>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div>Email<span style="color:red">*</span></div>
                        <input name="emailid" class="form-control" type="email"  required><br><br>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div>Nội dung<span style="color:red">*</span></div>
                        <textarea name="message" class="form-control" required></textarea>
                    </div>
  
                    <div class="col-lg-4 mb-4 ">
                        <div><input type="submit" name="submit" class="btn btn-info" value="Gửi"></div>
                    </div>
                    <?php
                     $conn = new mysqli("localhost","root","","interim");
         
                     if($conn->connect_error){
                         die("connection failed");
                       }
                       if(isset($_POST['submit']))
                          {
                             $fullname=$_POST['fullname'];
                             $mobile=$_POST['mobileno'];
                             $email=$_POST['emailid'];
                             $message=$_POST['message'];
                             $sql="insert into contactusquery(Name,ContactNumber,EmailId,Message) values('$fullname','$mobile','$email','$message')";
                    if (mysqli_query($conn, $sql)) {
                        echo "<b style='color:#00b33c;'>Gửi thành công:</b> <b>Chúng tôi sẽ sớm liên lạc với bạn!</b>";
                      
                     } else {
                        echo "<b style='color:#00b33c;'>Error:</b> <b>Gửi tin nhắn thất bại!</b>";
                     }
                     mysqli_close($conn);
                }
                    
                    ?>
                
                </div>
                
            </div>
        </form>
    </div>

    <br>
    <br>
    <br>

    <?php
        include('footer/footer.php');      
    ?>
<script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
 
</body>
</html>