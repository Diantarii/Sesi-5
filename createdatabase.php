<?php
    include("konfigurasi.php");

    $cnn=mysqli_connect(DBHOST,DBUSER,DBPASS);

    if($cnn){

        $sql="CREATE DATABASE ".DBNAME;
        $hasil=mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan DATABASE ".DBNAME."SUKSES";
        }else{
            echo "Pembuatan DATABASE ".DBNAME."GAGAL";
        }
    }else{
        echo "Koneksi Ke MYSQL GAGAL";
    }
    