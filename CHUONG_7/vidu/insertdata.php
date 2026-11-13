<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="insertdata.php" method="post">
        Mã khách hàng:<input type="text" name="txtmakh" value=""><br>
        Tên khách hàng:<input type="text" name="txttenkh" value=""><br>
        Số điện thoại:<input type="text" name="txtsodt" value=""><br>
        Địa chỉ:<input type="text" name="txtdiachi" value=""><br>
        Nam sinh:<input type="text" name="txtnamsinh" value=""><br>
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
$makh="";
$tenkh="";
$namsinh="";
$sodienthoai="";
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
        $sodienthoai=$_POST['txtsodt'];
    }
    if(isset($_POST["txtdiachi"]))
    {
        $diachi=$_POST['txtdiachi'];
    }
   
    $str = "INSERT INTO khachhang (makh, tenkh, namsinh, dienthoai, diachi)
    VALUES('$makh', '$tenkh', '$namsinh', '$sodienthoai', '$diachi')";
    if(mysqli_query($conn, $str)){
        echo "them thanh cong";
    }
    else
    {
        echo "k them dc";
    }
   
}
?>
</body>
</html>