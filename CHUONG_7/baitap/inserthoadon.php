<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="inserthoadon.php" method="post">
        Mã  hoá đơn:<input type="text" name="txtmahoadon" value=""><br>
        Mã khách hàng:<input type="text" name="txtmakh" value=""><br>
        Mã hàng:<input type="text" name="txtmahang" value=""><br>
        Số lượng:<input type="text" name="txtsoluong" value=""><br>
        Thành tiền:<input type="text" name="txtthanhtien" value=""><br>
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
 $mahd="";
 $makh="";
 $mahang="";
 $soluong="";
 $thanhtien="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["txtmahoadon"]))
    {
        $mahd=$_POST['txtmahoadon'];
    }
    if(isset($_POST["txtmakh"]))
    {
        $makh=$_POST['txtmakh'];
    }

    if(isset($_POST["txtmahang"]))
    {
        $mahang=$_POST['txtmahang'];
    }

    if(isset($_POST["txtsoluong"]))
    {
        $soluong=$_POST['txtsoluong'];
    }
    if(isset($_POST["txtthanhtien"]))
    {
        $thanhtien=$_POST['txtthanhtien'];
    }
   
    $str = "INSERT INTO hoadon (mahd,makh,mahang,soluong,thanhtien)
    VALUES('$mahd', '$makh', '$mahang', '$soluong','$thanhtien')";
    if(mysqli_query($conn, $str))
    {
        echo "them thanh cong";
    }
    else
    {
        echo "k them dc";
    }
   $sql = "SELECT * FROM hoadon";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h3>Danh sách hoá đơn:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Mã hd</th><th>mã khách hàng</th><th>mã hàng</th><th>số lượng</th><th>thành tiền</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . ($row['mahd']) . "</td>";
        echo "<td>" . ($row['makh']) . "</td>";
        echo "<td>" . ($row['mahang']) . "</td>";
        echo "<td>" . ($row['soluong']) . "</td>";
        echo "<td>" . ($row['thanhtien']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 else {
    echo "<p>Chưa có dữ liệu hoá đơn nào.</p>";
}
}

?>
</body>
</html>