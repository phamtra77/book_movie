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
   $user_id=$row['user_id'];
   $name=$row['name'];
   $password=$row['password'];
   $contact_no=$row['contact_no'];
 }
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="footer/footer.css">
    
    
    <title>Update Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />

    <style>
        body{
            background-color: #ccccff;
        }
    .nav-link:hover {
        background-color: #006666;       
        border-radius: 5px;
    }
    .carousel-item {
        width: 100%;
        background-size: cover;
    }

    </style>
  </head>
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
                    <a class="nav-link" href="view_review&rating.php" style="margin-right: 20px; font-weight: bold;color: white;">Đánh giá & Xếp hạng</a>
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
        <h1 class="mt-4 mb-3" style="font-family: 'Poppins', sans-serif;">Chỉnh sửa thông tin khách hàng</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index1.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active">Chỉnh sửa thông tin</li>
        </ol>
          <form method="post">
            <div style="background-color: #17cbcf;  padding: 2%; border-radius: 5px;">
                <div class="column">
                    <h3 style="font-family: 'Poppins', sans-serif;">Thông tin khách hàng</h3>
                    <br>

                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>">

                    <div class="col-lg-6 mb-4">
                        <div>Họ tên<span style="color:red">*</span></div>
                        <input name="name" class="form-control" type="text" placeholder="Enter Name" value="<?php echo $name;?>" required>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div>Điện thoại<span style="color:red">*</span></div>
                        <input name="contact_no" class="form-control" type="number" placeholder="Enter Mobile Number"value="<?php echo $contact_no;?>" required>
                    </div>
                    
                    <div class="col-lg-6 mb-4">
                        <div>Mật khẩu<span style="color:red">*</span></div>
                        <input name="password" class="form-control" type="text" placeholder="Enter Password" value="<?php echo $password;?>" required>
                    </div>
            
  
                    <div class="col-lg-4 mb-4 ">
                        <div><input type="submit" name="Update" class="btn btn-dark" value="Cập nhật"></div>
                    </div>
                     <?php
                     
                       if(isset($_POST['Update']))
                          {
                             $user_id=$_POST['user_id'];
                             $name=$_POST['name'];
                             $contact_no=$_POST['contact_no'];
                             $password=$_POST['password'];
                             $sql=" update users set name='$name',contact_no='$contact_no',password='$password' where user_id=$user_id";
                    if (mysqli_query($conn, $sql)) {
                        echo "<script> alert('Your information updated successfully!');window.location.href = 'index1.php?email=$email';</script>";
                      
                     } else {
                        echo "<script> alert('Update Failed!')</script>";
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <br>
    <br>
    
    <?php
    include('footer/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
  </body>
</html>