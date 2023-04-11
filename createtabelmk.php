<?php
    include("konfigurasi.php");

    $cnn=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);

    if($cnn){
        $tabel="tbMK";
        $sql="CREATE TABLE $tabel(
            kodeMK VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(50),
            sks INT
        )";
        $hasil=mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan TABEL ". $tabel ." SUKSES";
        }else{
            echo "Pembuatan TABEL ". $tabel ." GAGAL";
        }
    }else{
        echo "Koneksi Ke MYSQL GAGAL";
    }
    