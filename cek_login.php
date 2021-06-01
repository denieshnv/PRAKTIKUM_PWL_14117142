<?php

include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
$r = mysqli_num_rows($query);

if($r > 0){
    header("location:dashboard.php");
}
else{
    echo "<script>alert('Username atau password salah');window.location='index.php'</script>";
}
?>