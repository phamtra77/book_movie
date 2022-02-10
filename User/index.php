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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="footer/footer.css">

  <script src="ie-emulation-modes-warning.js"></script>

  
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    
    
    <title>Homepage</title>
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
    .main{
        text-align: center;
        font-size: 220%;
        font-weight: bold;
        font-family:'Poppins', sans-serif;
        margin-top: 3%;
    }
    .category{
        
        font-size: 200%;
        font-weight: bold;
        font-family:'Poppins', sans-serif;
        margin-top: 3%;
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
                    <a class="nav-link" href="index.php" style="margin-right: 20px; font-weight: bold;color: white; ">Phim / Sự kiện </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="review_rating.php" style="margin-right: 20px; font-weight: bold;color: white; ">Đánh giá & Xếp hạng </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php" style="margin-right: 20px; font-weight: bold;color: white;">Liên hệ với chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="margin-right: 67px; font-weight: bold;color: white;">
                 Tài khoản
                 </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">User</a>
                <a class="dropdown-item" href="../Admin/index.php">Admin</a>
                </div>
                </li>
            </ul>
        </div>
    </nav>

  
    
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="../images/carousel1.png" class="d-block w-100">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="../images/carousel2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="../images/carousel3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="../images/carousel4.png" class="d-block w-100" alt="...">
            </div>
        </div>

        <div class="container">
        <p class="main">Đặt trước tại đây</p>
        
        <hr>
        <p class="category">Phim đang chiếu</p>


          <div class="row">
              <?php 
              $count=0;
              $res=$conn->query("select * from movies order by rand() limit 8;");
              while ($row=$res->fetch_object()) {

            echo " 
            <div class='col-md-4  col-lg-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                    
                      <img  src='".$row->image."'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'>".$row->movie_name ."</h3>

                        <p><b style='color: blue'>IMDB: </b>".$row->rating."⭐</p>

                        <p class='profession'><b style='color: blue'>Thể loại: </b>".$row->movie_type ."</p>

                      
                      </div>
                    </div>
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center' style='color: red'>".$row->movie_name ."</h4>
                        <p class='profession'><b style='color: blue'>Ngày phát hành: </b>".$row->release_date ."</p>
                        <p class='text-center'><b style='color: blue'>Diễn viên: </b>".$row->movie_cast ." </p>
                        <p class='text-center'><b style='color: blue'>Đạo diễn: </b>".$row->director ." </p>
                      </div>
                      <div style='margin-top: 10vw;' class='buy_ticket'>

                       <form action='login.php' method='post' >
                        <input type='hidden' name='movieId' value='".$row->movie_id."' >
                        <input type='submit'  class='btn btn-info btn-xs btn-block' type='submit' value='Read More' name='submit'>
                      </form>

                    </div>
                  </div>
                </div> <!-- end card -->
              </div> <!-- end card-container -->
            </div>
          </div>";

          $count++;
        } ?>
        </div>
 
        <hr>
        <p class="category">Sự kiện sắp diễn ra</p>
           <div class="row">
              <?php 
              $count=0;
              $res=$conn->query("select * from events order by rand() limit 8;");
              while ($row=$res->fetch_object()) {


            echo " 
            <div class='col-md-4 col-lg-3 col-sm-12'>
              <div class='card-container'>
                <div class='card'>
                  <div class='front'>
                    <div class='cover'>
                    
                      <img  src='".$row->image."'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h3 class='name'>".$row->event_name ."</h3>

                        <p class='profession'><b style='color: blue'>Thể loại: </b>".$row->event_type ."</p>
                        <p class='profession'><b style='color: blue'>Ngày phát hành: </b>".$row->event_date ."</p>
                        
                      </div>
                    </div>
                  </div>
                  <!-- end front panel -->
                  <div class='back'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center' style='color: red'>".$row->event_name ."</h4>
                        <p class='text-center'><b style='color: blue'>Giới thiệu: </b>".$row->description ." </p>
                      </div>
                      <div style='margin-top: 10vw;' class='buy_ticket'>

                       <form action='login.php' method='post' >
                        <input type='hidden' name='movieId' value='".$row->event_id."' >
                        <input type='submit'  class='btn btn-info btn-xs btn-block' type='submit' value='Read More' name='submit'>
                      </form>

                    </div>
                  </div>
                </div> <!-- end card -->
              </div> <!-- end card-container -->
            </div>
          </div>";

          $count++;
        } ?>
        </div>

</div>

<br>
<br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
    <?php
    include('footer/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
  </body>
</html>
