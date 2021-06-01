<?php

$koneksi = mysql_connect("localhost","root","","loginpwl")
    if($koneksi){

    }else{
        echo "<script>alert('Gagal koneksi ke database');</script>";
    }

?>