<?php
include('config.php');
session_start();

if(!isset($_SESSION['login']))
{
	header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="footer/footer.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <title>Movie details</title>
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

<ol class="breadcrumb" style="background-color: #13B2B8;">
    <li class="breadcrumb-item">
        <a href="index1.php" style="color: black;font-family: 'Poppins', sans-serif;">Trang chủ</a>
    </li>
    <li class="breadcrumb-item">
        <a href="logout.php" style="color: black;font-family: 'Poppins', sans-serif;">Đăng xuất</a>
    </li>
    <li class="breadcrumb-item active" style="color: white;font-family: 'Poppins', sans-serif;">Thông tin phim</li>
</ol>
<br>
    <div class="container">
		<div class="row">
			<div class="col-xs-12  toppad" >
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<?php 

							$movie_id=$_GET['movie_id'];	
							$_SESSION['movie_id']=$movie_id;
							$res=$conn->query("select * from movies where movie_id=$movie_id;");
                            $row=$res->fetch_object();
                                                  
                            echo "".$row->movie_name;
                            ?>
                            
						</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 col-lg-4 " align="center">
								<img alt="User Pic" src=<?php echo '"'.$row->image.'"';?> class=" img-responsive"> 
							</div>
							<div class=" col-md-8 col-lg-8 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Tên phim:</strong></td>
											<td><?php echo "".$row->movie_name;?> </td>
                                        </tr>
                                        <tr>
											<td><strong>Ngày phát hành:</strong></td>
											<td><?php echo "".$row->release_date;	?> </td>
											</tr>
										<tr>
											<td><strong>Thể loại:</strong></td>
											<td> <?php echo "".$row->movie_type;?> </td>
										</tr>
										<tr>
											<td><strong>Diễn viên:</strong></td>
											<td><?php echo "".$row->movie_cast;?> </td>
										</tr>
										<tr>
											<tr>
												<td><strong>Xếp hạng:</strong></td>
												<td><?php echo "".$row->rating;?>⭐ </td>
											</tr>
											<tr>
												<td><strong>Đạo diễn:</strong></td>
												<td><?php echo "".$row->director;	?> </td>
                                            </tr>
                                            <tr>
												<td><strong>Thời gian:</strong></td>
												<td><?php echo "".$row->duration;	?> </td>
                                            </tr>
                                            <tr>
												<td><strong> Trailer:</strong></td>
												<td><a target="_blank" href="<?php echo "".$row->link;?>"><button class="btn btn-danger">Xem Trailer</button></a></td>
											</tr>
										
											</tbody>
                                        </table>
<!--                                     
                                        <form action='SeatPreview/select.php' method='get' >
                                            <input type='hidden' name='movie_id' value="$_SESSION['movie_id']" >      -->
                                            <a href="SeatPreview/select.php?movie_id=<?php echo $_SESSION['movie_id'];?>"> <button   class='btn btn-danger' name='submit' style="margin-left: 31%;margin-top:5% ">Mua vé</button></a>
                                        <!-- </form> 
                                       -->

								</div>
							</div> 
						</div>
					</div>

				</div>
	</div>
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