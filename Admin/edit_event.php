<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0){
    header('Location: index.php');
}

                  
          $event_id=$_GET['event_id'];
          // $movie_id = $_POST['movie_id'];
          $query = "select * from events where event_id='$event_id'";
          $run = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($run)){

            $event_id=$row['event_id'];
            $event_name=$row['event_name'];
            $event_type=$row['event_type'];
            $description =$row['description'];
            $event_date=$row['event_date'];
            $time =$row['time'];
            $cost =$row['cost'];
            $location =$row['location'];
            
          }
          
          if(isset($_POST['update']))
          {         
            $event_name=$_POST['event_name'];
            $event_type=$_POST['event_type'];
            $description=$_POST['description'];
            $event_date=$_POST['event_date'];
            $time =$_POST['time'];
            $cost =$_POST['cost'];
            $location =$_POST['location'];
           

             $update = "update events set event_name='$event_name', event_type='$event_type', description='$description', event_date='$event_date',time='$time', location='$location' , cost='$cost' where event_id='$event_id'";
             if (mysqli_query($conn, $update)) {
                echo"<script>alert('Record Updated successfully!');window.location.href = 'eventslist.php'</script>";
               
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
   
    <title>Update Event Details</title>
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
        <h1 class="mt-4 mb-3">Cập nhật thông tin sự kiện</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="eventslist.php">Quay lại</a>
            </li>
            <li class="breadcrumb-item active">Thông tin sự kiện</li>
        </ol>
        <div style="background-color: #ccccff;  padding: 2%; border-radius: 5px;">
                <form method="post" enctype="multipart/form-data">                          
                    <div class="row">
                        <div class="col-lg-6 mb-6"> 
                                <input type="hidden" name="event_id" value="<?php echo $event_id;?>">
                                <label class="control-label">Tên sự kiện:</label>
                                <input type="text" class="form-control" name="event_name" value="<?php echo $event_name;?>">
                            </div>

                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Thể loại:</label>                   
                            <select  class="form-control" name="event_type" value="<?php echo $event_type;?>">
                              <option value=""></option>
                              <option value="Giáo dục"
                              <?php if($event_type == 'Giáo dục')
                              {
                                  echo ("selected");
                              }
                              ?>>Giáo dục</option>
                              
                              <option value="Truyền cảm hứng"
                              <?php if($event_type == 'Truyền cảm hứng')
                              {
                                  echo ("selected");
                              }
                              ?>>Truyền cảm hứng</option>
                              <option value="Hội thảo"
                              <?php if($event_type == 'Hội thảo')
                              {
                                  echo ("selected");
                              }
                              ?>>Hội thảo</option>
                              <option value="Talk Show"
                              <?php if($event_type == 'Talk Show')
                              {
                                  echo ("selected");
                              }
                              ?>>Talk Show</option>
                              <option value="Khác"
                              <?php if($event_type == 'Khác')
                              {
                                  echo ("selected");
                              }
                              ?>>Khác</option>
                            </select>
                        </div> 
                    </div> 
                                

                    <div class="row">
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Thông tin giới thiệu:</label>
                            <input type="text" class="form-control" name="description"  value="<?php echo $description;?>">
                        </div>  
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Ngày phát hành:</label>
                            <input type="date" class="form-control" name="event_date" value="<?php echo $event_date;?>">                       
                        </div>  
                    </div>

                    <div class="row">
                    
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Thời gian:</label>
                            <input type="text" class="form-control" name="time"  value="<?php echo $time;?>">
                        </div> 
                        <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Cost:</label>
                            <input type="text" class="form-control" name="cost"  value="<?php echo $cost;?>">
                        </div> 
                    </div>
                    <div class="row">
                    <div class="col-lg-6 mb-6"> 
                            <label class="control-label">Địa điểm:</label>
                            <input type="text" class="form-control" name="location"  value="<?php echo $location;?>">
                        </div> 
                    </div>
                    
                                           
                        <div class="modal-footer">
                            <a href="eventslist.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                            <button type="submit" class="btn btn-primary" name="update" >Update</button>
                        </div>
                      </form>
    </div>
    </div>     
    </body>
</html>