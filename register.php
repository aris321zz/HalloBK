<?php

include 'function.php';

error_reporting(0);



if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, email, password, kelas, tgl_lahir)
                    VALUES ('$username', '$email', '$password', '$kelas', '$tgl_lahir')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $kelas = "";
                $tgl_lahir = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="image/Logo.png" type="image/png">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="gradient">
        <div id="Kotak_login" class="container mt-5 bg-light rounded-4 shadow-lg" style="width: 400px;">
            <img src="image/Logo.png" style="width: 250px; display: block; margin: auto;" alt="Logo">
            <h2 class="tulisan_login text-center">Registrasi</h2>

            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Username</label>
                    <input type="text" name="username" class="form-control border border-info" id="exampleInputEmail1"
                        aria-describedby="usernameHelp" value="<?php echo $username; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Email</label>
                    <input type="email" name="email" class="form-control border border-info" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?php echo $email; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Kelas</label>
                    <input type="text" name="kelas" class="form-control border border-info" id="exampleInputEmail1"
                        aria-describedby="kelasHelp" value="<?php echo $kelas; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control border border-info" id="exampleInputEmail1"
                        aria-describedby="kelasHelp" value="<?php echo $tgl_lahir; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-info"
                        id="exampleInputPassword1" value="<?php echo $_POST['password']; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="cpassword" class="form-control border border-info"
                        id="exampleInputPassword1" value="<?php echo $_POST['cpassword']; ?>" required="required">
                </div>
                <input type="submit" name="submit" class="tombol_login rounded mb-4 mt-3" value="REGISTRASI">
                <a href="index.php" style="color: blue; text-align:center;">Sudah Punya Akun</a>
                <br />
                <br />
            </form>
        </div>
    </div>

</body>

</html>