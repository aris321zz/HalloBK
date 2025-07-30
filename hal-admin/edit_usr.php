<?php
include "function.php";
$id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$tgl_lahir = $_POST['tgl_lahir'];

$query = "UPDATE user SET username='$username', email='$email' ,password='$password' ,kelas='$kelas' ,tgl_lahir='$tgl_lahir' WHERE id_user='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:user.php");
} else {
    echo "data tidak dapat di edit" . mysqli_error($conn);
}