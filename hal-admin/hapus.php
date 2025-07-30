<?php
include 'function.php';
$id = $_GET['id_user'];
mysqli_query($conn, "DELETE FROM user WHERE id_user='$id'") or die(mysqli_error($conn));

header("location:user.php?pesan=hapus");