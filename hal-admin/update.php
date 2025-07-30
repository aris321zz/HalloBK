<?php
include "function.php";
$id = $_POST['id_konsul'];
$balas = $_POST['balasan'];

$query = "UPDATE tb_konsul SET balasan='$balas' WHERE id_konsul='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:tb_konsul.php");
} else {
    echo "data tidak dapat di edit" . mysqli_error($conn);
}