
<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";
    // Kết nối CSDL
    $conn = mysqli_connect($servername, $username, $password,$database);

    if (!$conn) {
        die("Kết nối thất bại: ".mysqli_connect_error());
    }
    // Truy vấn dữ liệu
    $str = "INSERT INTO khachhang VALUES('k011','Nguyễn Thị Lan','2000','0957654744','vĩnh lợi')";
    $result = mysqli_query($conn, $str);
    if($result)
    {
      echo "mau tin da duoc them.";
    }
    else
     {
       echo "khong them duoc";
     }  

?>
