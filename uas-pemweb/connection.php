<?php

$connect = mysqli_connect('localhost', 'root', '', 'pelanggan');

if (!$connect){
    exit('Gagal koneksi database');
}