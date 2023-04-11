<?php
    include("konfigurasi.php");

    // echo "Host:".DBNAME;

    $hasil=mysqli_connect(DBHOST,DBUSER,DBPASS);

    if($hasil){
        echo "Koneksi Ke MYSQL SUKSES";
    }else{
        echo "Koneksi Ke MYSQL GAGAL";
    }
    