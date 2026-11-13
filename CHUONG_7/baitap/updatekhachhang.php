<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form  action="updatekhachhang.php" method="post">
        Mã khách hàng:<input type="text" name="txtmakh" value=""><br>
        Tên khách hàng:<input type="text" name="txttenkh" value=""><br>
        Số điện thoại:<input type="text" name="txtsodt" value=""><br>
        Địa chỉ:<input type="text" name="txtdiachi" value=""><br>
        Năm sinh:<input type="text" name="txtnamsinh" value=""><br>
        <button type="submit">Update</button>
    </form>
<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = ""
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn)
{
    die("khong the ket noi:". mysqli_connect_error());
    exit();
}
$makh="";
$tenkh="";
$namsinh="";
$dienthoai="";
$diachi="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["txtmakh"]))
    {
        $makh=$_POST['txtmakh'];
    }
    if(isset($_POST["txttenkh"]))
    {
        $tenkh=$_POST['txttenkh'];
    }

    if(isset($_POST["txtnamsinh"]))
    {
        $namsinh=$_POST['txtnamsinh'];
    }

    if(isset($_POST["txtsodt"]))
    {
        $dienthoai=$_POST['txtsodt'];
    }
    if(isset($_POST["txtdiachi"]))
    {
        $diachi=$_POST['txtdiachi'];
    }
   
    $str = "UPDATE  khachhang  SET tenkh='$tenkh',namsinh='$namsinh',dienthoai='$dienthoai',diachi='$diachi' WHERE  makh='$makh'";
    if(mysqli_query($conn, $str))
    {
        echo "Cập nhật thành công";
    }
    else
    {
        echo "k thêm dc";
    }
}
 $sql = "SELECT * FROM khachhang";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h3>Danh sách khách hàng:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Mã khách hàng</th><th>Tên khách hàng</th><th>năm sinh</th><th>điện thoại</th><th>địa chỉ</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . ($row['makh']) . "</td>";
        echo "<td>" . ($row['tenkh']) . "</td>";
        echo "<td>" . ($row['namsinh']) . "</td>";
        echo "<td>" . ($row['dienthoai']) . "</td>";
        echo "<td>" . ($row['diachi']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 else {
    echo "<p>Chưa có dữ liệu khách hàng nào.</p>";
}
mysqli_close($conn);
?>

</body>
</html>