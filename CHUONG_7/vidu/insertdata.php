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


