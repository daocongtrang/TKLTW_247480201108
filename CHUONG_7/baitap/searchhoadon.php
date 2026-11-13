<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form  action="searchhoadon.php" method="post">
        Tìm kiếm:<input type="text" name="txttìm" value=""><br>
        <button type="submit"> Insert</button>
    </form>
    <?php
 $servername = "localhost";
 $database = "quanlybanhang";
 $username = "root";
 $password = "";
 $conn = mysqli_connect($servername, $username, $password,$database);
 if(!$conn)
 {
     die("khong the ket noi:". mysqli_connect_error());
     exit();
 }
 $timkiem="%";
 $sql=" SELECT * FROM hoadon where makh like '$timkiem' or tenkh like '$timkiem'";
 $result = mysqli_query($conn, $sql);
if ( mysqli_num_rows($result) > 0) {
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
 ?>
</body>
</html>