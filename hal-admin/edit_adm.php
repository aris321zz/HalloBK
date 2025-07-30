<?php
include "function.php";
$id = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "UPDATE admin SET username='$username', email='$email' ,password='$password' WHERE id_admin='$id'";
$result = mysqli_query($conn, $query);
if ($result) {
    header("location:data_admin.php");
} else {
    echo "data tidak dapat di edit" . mysqli_error($conn);
}