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
//For Movie
$id=$_GET['id'];	
$res=("select * from booking_movie where id='$id'");
$res = $conn ->query($res);
 while ($row = $res->fetch_assoc()){
  }

//For Event
$id=$_GET['id'];	
$res=("select * from booking_event where id='$id'");
$res = $conn ->query($res);
 while ($row = $res->fetch_assoc()){
  }
?>

<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Print Ticket</title>
        <link rel="shortcut icon" type="image/x-icon" href="../images/logo5.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">


    <style>
            th{
                text-align: center;
            }
            td{
                text-align: left;
            }
    </style>
    </head>
<body>
    <form method="post" action="" id="myfrm">
        <fieldset>
        <legend style="text-align: center;"><b>Vé điện tử có thể không cần sử dụng bản in</b></legend>

    <div style="background-color: #13B2B8; border-radius: 5px;">
        <img src="../images/logo5.png" style="width: 5%; vertical-align:middle; margin-left: 2%;">
        <h3 style="display:inline-block;font-family: 'Poppins', sans-serif;">Group 2</h3>
    </div>
    
<br>
<br>

<div class="container-fluid">
    <div class="row">
		<div class="col-md-12">
            <div class="panel panel-default">
        <div class="panel-heading" style="font-size: 150%; margin-left:1%;font-family: 'Poppins', sans-serif;"><b>Chi tiết vé </b></div><hr>
        
            <div class="panel-body"  style="padding: 2%; border-radius: 10px; border: 1px solid #00b3b3;">
                    <table role="table" class="table-striped table-bordered" style="width: 100%;" >
                      
									<thead role="rowgroup">
										<tr role="row">

                                            <th role="columnheader">TT</th>
                                            <th role="columnheader">Mã vé</th>
											<th role="columnheader">Tên khách hàng</th>
											<th role="columnheader">Tên phim / Sự kiện</th>
											<th role="columnheader">Địa điểm</th>
											<th role="columnheader">Ngày</th>
                                            <th role="columnheader">Thời gian</th>
                                            <th role="columnheader">Số ghế</th>
                                            <th role="columnheader">Tổng tiền</th>
											
										</tr>
									</thead>
									
                                    <tbody role="rowgroup">
                                    <?php

                                    
                                        $query = "select * from booking_movie where id='$id'  ";
                                        $result = $conn->query($query);
                                        $cnt=1;
                                
                                    
                                        while($row = $result->fetch_assoc()){
                                        echo "<tr role='row'>";
                                        echo "<td role='cell'>$cnt</td>";
                                        echo "<td role='cell'>".$row["ticket_id"]."</td>";
                                        echo "<td role='cell'>".$row["customer_name"]."</td>";
                                        echo "<td role='cell'>".$row["movie_name"]."</td>";
                                        echo "<td role='cell'>".$row["city_name"].",".$row["theatre_name"]."</td>";
                                        // echo "<td role='cell'>".$row["theatre_name"]."</td>";
                                        echo "<td role='cell'>".$row["date"]."</td>";
                                        echo "<td role='cell'>".$row["show_time"]."</td>";
                                        echo "<td role='cell'>".$row["no_of_seats"]."</td>";
                                        echo "<td role='cell'>".$row["amount"]."</td>";
                                            
                                        echo"</tr>";
                                        
                                        ?>
                                    <?php $cnt=$cnt+1; } ?>  

                       
                                </tbody>
                            </table>
                      
                
                    <table role="table" class="table-striped table-bordered" style="width: 100%;" >
                      
                                    <tbody role="rowgroup">
                                    <?php
                                        $query = "select * from booking_event where id='$id'  ";
                                        $result = $conn->query($query);
                                        $cnt=1;
                                
                                        while($row = $result->fetch_assoc()){
                                        echo "<tr role='row'>";
                                        echo "<td role='cell'>$cnt</td>";
                                        echo "<td role='cell'>".$row["ticket_id"]."</td>";
                                        echo "<td role='cell'>".$row["customer_name"]."</td>";
                                        echo "<td role='cell'>".$row["event_name"]."</td>";
                                        echo "<td role='cell'>".$row["location"]."</td>";
                                        echo "<td role='cell'>".$row["date"]."</td>";
                                        echo "<td role='cell'>".$row["time"]."</td>";
                                        echo "<td role='cell'>".$row["no_of_seats"]."</td>";
                                        echo "<td role='cell'>".$row["amount"]."</td>";
                                         
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

            <p style="font-weight: bold;">Hướng dẫn thực hiện giao dịch</p>
            <ul> 
                <li> Khách hàng khi mua vé trực tuyến tại trang web phải đăng nhập tài khoản thành viên và thực hiện theo các bước sau:
                <li>Bước 1: Quý khách lựa chọn suất chiếu theo phim hoặc suất chiếu theo rạp.</li>
                <li>Bước 2: Lựa chọn chỗ ngồi, các sản phẩm bắp nước kèm theo và kiểm tra tổng tiền cho giao dịch này.</li>
                <li>Bước 3: Thanh toán bằng một trong các hình thức thanh toán Trực tuyến sau: qua thẻ tín dụng (Visa, Master Card..), thẻ ATM nội địa...</li>
                <li>Bước 4: Thành viên vào Tài khoản của tôi để kiểm tra các giao dịch thành công.</li>
                <li>Bước 5: Quý khách vui lòng cung cấp mã đặt vé và các thông tin tài khoản thành viên dùng để đặt vé để nhận vé tại rạp.</li>
            </ul>

            <p style="font-weight: bold; color:red;">Quy định phòng chống dịch COVID-19</p>
            <ul> 
                <li>Vui lòng duy trì khoảng cách xã hội theo hướng dẫn của Chính phủ.</li>
                <li>Sử dụng khẩu trang là bắt buộc, nếu không có điều đó bạn sẽ không được phép vào bên trong rạp.</li>
                <li>Tuân thủ nghiêm ngặt quy trình kiểm tra vệ sinh trước khi vào rạp.</li>
                <li>Phải khai báo y tế trước khi vào rạp.</li>
            </ul>
<br>
<hr>
            <p style="font-weight: bold; color:blue; text-align: center;">Quý khách cần hỗ trợ hoặc tư vấn về dịch vụ và các vấn đề có liên quan, vui lòng liên hệ trực tiếp với chúng tôi để nhận được sự trợ giúp nhanh chóng nhất qua địa chỉ: phamthutra77200@gmail.com</p>
            
        </fieldset>
    <closeform></closeform></form>
    <p align="center"><input type="button" onclick="myPrint('myfrm')" value="In vé"></p>
    <script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
</body>
</html>