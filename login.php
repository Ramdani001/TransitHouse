<?php

$conn = mysqli_connect("localhost","root","", "transit_house");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn ,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    header("Location: admin.php");
    exit();
}else {
    echo "<script>alert('Username Atau Password Salah !!!')</script>";

    echo '<script>window.location.href = "index.php";</script>';

    
    exit();
}


?>