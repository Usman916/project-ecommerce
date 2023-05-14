<?php
    $hostneme = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'dbpet';

    $conn = mysqli_connect($hostneme, $username, $password, $dbname) or die ('Gagal terhubung ke database');

?>