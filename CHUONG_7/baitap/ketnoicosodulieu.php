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
mysqli_close($conn);
?>