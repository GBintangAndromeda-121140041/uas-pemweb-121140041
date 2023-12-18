<?php

include 'connection.php';

$name = $_GET['name'];
$delete = mysqli_query($connect, "DELETE FROM reservasi WHERE name='$name' ");

if($delete){
    header('location: index.php');
}else{
    echo 'delete data gagal';
}
