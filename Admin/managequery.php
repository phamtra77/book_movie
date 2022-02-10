<?php
session_start();
$conn = new mysqli("localhost", "root","","interim");

if($conn->connect_error){
    die("connection error");
}
if(strlen($_SESSION['login'])==0){
    header("location: index.php");

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
   <title>Manage Query</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />
    
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
    color: black;
}
#list:hover{    
    background-color: #ccccff;          
    }





	@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

		
		table, thead, tbody, th, td, tr {
			display: block;
      
      
      
		}

	
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

    tr {
      margin: 0 0 1rem 0;
      
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
		td {
			/* Behave  like a "row" */
			
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
    
		}

		td:before {
			position: absolute;

			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		
    td:nth-of-type(1):before { content: "Id"; }
		td:nth-of-type(2):before { content: "Name"; }
		td:nth-of-type(3):before { content: "Email"; }
		td:nth-of-type(4):before { content: "Contact No"; }
		td:nth-of-type(5):before { content: "Message"; }
		td:nth-of-type(6):before { content: "Posting date"; }
		td:nth-of-type(7):before { content: "Action"; }
    
		
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

    <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif; font-size: 1.5vw; color: black;"><img src="../images/logo5.png" style="width: 7%; margin-left:2%;">&nbsp <b>Group 2</b>
        </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
       
      </ul>
    </div>
  </nav>

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12">
            <h2 class="page-title" style="width:80%; padding:0.5%;margin-top:2%; padding-left: 1%; background-color:#336699;border-radius: 10px; box-shadow: 5px 5px #888888;color:#ffffcc;">Quản lý phản hồi của khách hàng</h2><br>
            <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 150%; margin-left:1%;font-family: 'Poppins', sans-serif;"><b>Chi tiết phản hồi </b></div><hr>
        

                      <?php   
                       if(isset($_REQUEST['eid']))
                       {
                         $eid=intval($_GET['eid']);
                         $status=1;
                         $sql = "update contactusquery SET status='$status' where  id='$eid'";
                         if (mysqli_query($conn, $sql)){
                           echo"<b style='color:#00b33c; margin-left:1%;'>Success: </b> <b>Succesfully archive!</b>";
                           }
                       }
                       if(isset($_REQUEST['del']))
                         {
                           $did=intval($_GET['del']);
                           $sql = "delete from contactusquery where  id='$did'";
                           if (mysqli_query($conn, $sql)){
                           echo"<b style='color:#00b33c;margin-left:1%;'>Success: </b> <b>Record Deleted Successfully!</b>";
                           }
                         } 
                         
                       ?>



<br>


				    <div class="panel-body"  style="padding: 2%; border-radius: 10px; border: 1px solid #00b3b3;">
                    <table role="table" class="table-striped table-bordered" style="width: 100%;" >
                      
									<thead role="rowgroup">
										<tr role="row">
										<th role="columnheader">Mã</th>
											<th role="columnheader">Tên khách hàng</th>
											<th role="columnheader">Email</th>
											<th role="columnheader">Điện thoại</th>
											<th role="columnheader">Nội dung phản hồi</th>
											<th role="columnheader">Ngày đăng</th>
											<th role="columnheader">Action</th>
										</tr>
									</thead>
									
									<tbody role="rowgroup">
                    <?php

                    

                        $query = "select * from contactusquery";
                        $result = $conn->query($query);
                        $cnt=1;
                
                       

                        while($row = $result->fetch_assoc()){
                        echo "<tr role='row'>";
                        echo "<td role='cell'>$cnt</td>";
                        echo "<td role='cell'>".$row["name"]."</td>";
                        echo "<td role='cell'>".$row["EmailId"]."</td>";
                        echo "<td role='cell'>".$row["ContactNumber"]."</td>";
                        echo "<td role='cell'>".$row["Message"]."</td>";
                        echo "<td role='cell'>".$row["PostingDate"]."</td>";
                        if($row['status'] == 1){
                          echo"<td>Read<br><a href='managequery.php?del=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to read?');\" style='color:#ff0000;'>Delete</a></td>";
                          }else{
                            echo"<td><a href='managequery.php?eid=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to read?');\"style='color:#ff0000;'>Pending</a>
                            <br><a href='managequery.php?eid=".$row["id"]."'  onclick=\"javascript:return confirm('Do you really want to read?');\" style='color:#ff0000;'>Delete</a></td>";  
                          }
                            
                         echo"</tr>";
                        
                         ?>
                      <?php $cnt=$cnt+1; } ?>  

                       
                     </tbody>
                </table>

               

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
