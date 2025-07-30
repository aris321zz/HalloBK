<?php
include 'function.php';
$id = $_GET['id_konsul'];
mysqli_query($conn, "DELETE FROM tb_konsul WHERE id_konsul='$id'") or die(mysqli_error($conn));

header("location:beranda_user.php?pesan=hapus");