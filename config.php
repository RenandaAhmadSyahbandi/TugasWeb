<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "dbperpus";

//create connection
$koneksi = mysqli_connect($servername, $username, $password, $database);

//check connection
if(!$koneksi) {
    die("KONEKSI GAGAL:" .mysqli_connect_error());
}


?>