<?php

include 'connection.php';

$name = $_POST['name'];
$telpon = $_POST['telpon'];
$jadwal = $_POST['jadwal'];
$tanggal = $_POST['tanggal'];

// format tanggal ke bentuk format mysql
$format_tanggal=date("Y-m-d H:i:s",strtotime($tanggal));


$insert = mysqli_query($connect, "INSERT INTO reservasi SET name='$name', telpon='$telpon', jadwal='$jadwal', tanggal='$format_tanggal' ");

if($insert){
    header('location: index.php');
}else{
    echo 'input data gagal';
}