<?php
    include("konfigurasi.php");

    $cnn=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);

    if($cnn){
        $tabel="tbMHS";
        $sql="CREATE TABLE $tabel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15),
            prodi VARCHAR(25),
            jeniskelamin VARCHAR(1),
            tgllahir DATE
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
    