<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="inserthanghoa.php" method="post">
        Mã  hàng:<input type="text" name="txtmahang" value=""><br>
        Tên hàng:<input type="text" name="txttenhang" value=""><br>
        Năm sản xuất:<input type="text" name="txtnamsx" value=""><br>
        Mã nhà sản xuất:<input type="text" name="txtmansx" value=""><br>
        Giá:<input type="text" name="txtgia" value=""><br>
       
        <button type="submit"> Insert</button>
    </form>
 <?php
 $servername = "localhost";
 $database = "quanlybanhang";
 $username = "root";
 $password = "";
 // Kết nối CSDL
 $conn = mysqli_connect($servername, $username, $password,$database);
 if(!$conn)
 {
     die("khong the ket noi:". mysqli_connect_error());
     exit();
 }
 $mahang="";
 $tenhang="";
 $mansx="";
 $namsx="";
 $gia="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["txtmahang"]))
    {
        $mahang=$_POST['txtmahang'];
    }
    if(isset($_POST["txttenhang"]))
    {
        $tenhang=$_POST['txttenhang'];
    }

    if(isset($_POST["txtmansx"]))
    {
        $mansx=$_POST['txtmansx'];
    }

    if(isset($_POST["txtnamsx"]))
    {
        $namsx=$_POST['txtnamsx'];
    }
    if(isset($_POST["txtgia"]))
    {
        $gia=$_POST['txtgia'];
    }
   
    $str = "INSERT INTO hanghoa (mahang, tenhang, mansx, namsx,gia)
    VALUES('$mahang', '$tenhang', '$mansx', '$namsx','$gia')";
    if(mysqli_query($conn, $str))
    {
        echo "them thanh cong";
    }
    else
    {
        echo "k them dc";
    }
   $sql = "SELECT * FROM hanghoa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h3>Danh sách hàng hóa:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Mã hàng</th><th>Tên hàng</th><th>Năm sản xuất</th><th>Mã NSX</th><th>Giá</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . ($row['mahang']) . "</td>";
        echo "<td>" . ($row['tenhang']) . "</td>";
        echo "<td>" . ($row['namsx']) . "</td>";
        echo "<td>" . ($row['mansx']) . "</td>";
        echo "<td>" . ($row['gia']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 else {
    echo "<p>Chưa có dữ liệu hàng hóa nào.</p>";
}
}

?>
</body>
</html>