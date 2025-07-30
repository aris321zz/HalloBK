<?php
include 'function.php';
$id = $_GET['id_admin'];
mysqli_query($conn, "DELETE FROM admin WHERE id_admin='$id'") or die(mysqli_error($conn));

header("location:data_admin.php?pesan=hapus");