<?php

$connect = mysqli_connect('localhost', 'root', '', 'latihan');

if (!$connect) {
    exit('Gagal koneksi database ...');
}
