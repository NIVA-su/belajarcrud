<?php

$host = "localhost";
$port = 3306;
$user = "root";
$pass = "";
$db = "belajarcrud";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Tidak Terkoneksi".mysqli_connect_error());
}
else{
    echo "terkoneksi";
}

?>