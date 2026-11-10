<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 /* $servername="localhost";
  $database="quanlybanhang";
  $username="root";
  $password="";
  $conn= mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn,$database);
  $str="select makh, tenkh from khachhang";
  $result=mysqli_query($str, $conn);
  while($row= mysql_fetch_assoc( $result))
  {
    echo("ma kh:"."$row['makh']"",ho ten:".$row['hoten'])."<br/>");
  }
  mysqli_free_result($result);
  mysqli_close();
*/
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
    $str = "SELECT makh, tenkh FROM khachhang";
    $result = mysqli_query($conn, $str);

    // Hiển thị dữ liệu
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Mã khách hàng: " . $row['makh'] .
             " - Họ tên: " . $row['tenkh'] . "<br/>";
    }
    // Giải phóng bộ nhớ
    mysqli_free_result($result);
    // Đóng kết nối
    mysqli_close($conn);
?>
</body>
</html>