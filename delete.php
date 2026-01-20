<?php
include "koneksi.php";

$id = $_GET['id'];

$sql ="DELETE FROM crud WHERE id=$id";
mysqli_query($conn, $sql);

mysqli_close($conn);

header("location: index.php");
exit();