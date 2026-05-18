<?php

$koneksi = mysqli_connect('localhost','root','','alumni_db');
if (!$koneksi) {    
    // menutup dan menampilkan erorr
    die("koneksi gagal: ") . mysqli_connect_errno();
}
?>