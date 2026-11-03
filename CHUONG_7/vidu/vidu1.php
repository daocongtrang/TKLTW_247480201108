<?php
$servername="localhost";
$database="quanlybanhang";
$username="root";
$password="";
$conn= mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo "connected successfully";
}
mysqli_select_db($conn,$database);
$str="SELECT * FROM khachhang";
$khachhang= mysqli_query($conn,$str);
while($row = mysqli_fetch_array($khachhang))
{
    echo $row ['makh'];
    echo $row ['tenkh'];
    echo $row ['namsinh'];
    echo $row ['dienthoai'];
    echo $row ['diachi']."<br>";
}
mysqli_close($conn);
?>