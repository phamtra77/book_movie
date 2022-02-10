<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0){
    header('Location: index.php');
}

                  
          $movie_id=$_GET['movie_id'];
          // $movie_id = $_POST['movie_id'];
          $query = "select * from movies where movie_id='$movie_id'";
          $run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($run)){

            $movie_id=$row['movie_id'];
            $movie_name=$row['movie_name'];
            $movie_type=$row['movie_type'];
            $language=$row['language'];
            $duration=$row['duration'];
            $movie_cast=$row['movie_cast'];
            $director=$row['director'];
            $date=$row['release_date'];
            $rating=$row['rating'];
            $link=$row['link'];
          }
          
          if(isset($_POST['update']))
          {         
    
             $movie_name=$_POST['movie_name'];
             $movie_type=$_POST['movie_type'];
             $language=$_POST['language'];
             $duration=$_POST['duration'];
             $movie_cast=$_POST['movie_cast'];
             $director=$_POST['director'];
             $date=$_POST['date'];
             $rating=$_POST['rating'];
             $link=$_POST['link'];

             $update = "update movies set movie_name='$movie_name', movie_type='$movie_type', language='$language', duration='$duration',  movie_cast='$movie_cast', director='$director',  release_date='$date',  rating='$rating', link='$link' where movie_id='$movie_id'";
             if (mysqli_query($conn, $update)) {
                echo"<script>alert('Record Updated successfully!');window.location.href = 'movieslist.php'</script>";
               
              } else {
                 echo "<b style='color:red;'>Error:</b> <b>Something is wrong!</b>";
              }
             }

?>



<html>
    <head>
        
    <!-- Required meta tags -->
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
   
    <title>Update Movie Details</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />      

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 
  <meta name="description" content="">
  <meta name="author" content="">
        <style></style>
        <script>
      
        </script>
    </head>
    <body style="background-color: #13B2B8;">


    <div class="container">
        <h1 class="mt-4 mb-3">Cập nhật thông tin</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="movieslist.php">Quay lại</a>
            </li>
            <li class="breadcrumb-item active">Thông tin chi tiết phim</li>
        </ol>
        <div style="background-color: #ccccff;  padding: 2%; border-radius: 5px;">
                <form method="post" enctype="multipart/form-data">                          
                    <div class="row">
                        <div class="col-lg-6 mb-6"> 
                                <input type="hidden" name="movie_id" value="<?php echo $movie_id;?>">
                                <label class="control-label">Tên phim:</label>
                                <input type="text" class="form-control" name="movie_name" value="<?php echo $movie_name;?>">
                            </div>

                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Thể loại:</label>                   
                            <select  class="form-control" name="movie_type" value="<?php echo $movie_type;?>">
                              <option value=""></option>
                              <option value="Phim hành động"
                              <?php if($movie_type == 'Phim hành động')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim hành động</option>
                              
                              <option value="Phim hoạt hình"
                              <?php if($movie_type == 'Phim hoạt hình')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim hoạt hình</option>
                              <option value="Phim hài"
                              <?php if($movie_type == 'Phim hài')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim hài</option>
                              <option value="Phim kinh dị"
                              <?php if($movie_type == 'Phim kinh dị')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim kinh dị</option>
                              <option value="Phim tình cảm"
                              <?php if($movie_type == 'Phim tình cảm')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim tình cảm</option>
                               <option value="Phim viễn tưởng"
                              <?php if($movie_type == 'Phim viễn tưởng')
                              {
                                  echo ("selected");
                              }
                              ?>>Phim viễn tưởng</option>
                            </select>
                        </div> 
                    </div> 
                                

                    <div class="row">   
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Ngôn ngữ:</label>
                            <select name="language"  class="form-control" value="<?php echo $language;?>">
                              <option value=""></option>
                              <option value="English"
                              <?php if($language == 'English')
                              {
                                  echo ("selected");
                              }
                              ?>>English</option>
                              <option value="Tiếng Việt"
                              <?php if($language  == 'Tiếng Việt')
                              {
                                  echo ("selected");
                              }
                              ?>>Tiếng Việt</option>
                              <option value="VietSub"
                              <?php if($language  == 'VietSub')
                              {
                                  echo ("selected");
                              }
                              ?>>VietSub</option>
                            </select>
                        </div> 
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Thời gian:</label>
                            <input type="text" name="duration" required="" class="form-control "  value="<?php echo $duration;?>">
		                       
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Diễn viên:</label>
                            <input type="text" class="form-control" name="movie_cast"  value="<?php echo $movie_cast;?>">
                        </div>  
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Đạo diễn:</label>
                            <input type="text" class="form-control" name="director" value="<?php echo $director;?>">                       
                        </div>  
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Ngày phát hành:</label>
                            <input type="date" class="form-control" name="date"  value="<?php echo $date;?>">
                        </div>
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Đánh giá:</label>
                            <input type="floatval" class="form-control" name="rating"  value="<?php echo $rating;?>">
                        </div> 
                    </div>
                    
                    <div class="row"> 
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Link:</label>
                            <input type="text" class="form-control" name="link"  value="<?php echo $link;?>">
                        </div> 
                        
                    </div>                        
                        <div class="modal-footer">
                            <a href="movieslist.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                            <button type="submit" class="btn btn-primary" name="update" >Update</button>
                        </div>
                      </form>
    </div>
    </div>     
    </body>
</html>