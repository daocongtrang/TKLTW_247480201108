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
    $str = "DELETE FROM  khachhang WHERE makh='k011'";
    $result = mysqli_query($conn, $str);
    if($result)
    {
      echo "mau tin da duoc xoa.";
    }
    else
     {
       echo "khong xoa duoc";
     }  

?>
