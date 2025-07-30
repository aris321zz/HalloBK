<?php
include 'function.php';
if (!isset($_SESSION['username'])) {
}
$username = $_SESSION['username'];
//ganti pw
if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $pw_lama = $_POST['pw_lama'];
    $pw_baru = $_POST['pw_baru'];
    $konf_pw = $_POST['konf_pw'];
    //cek pw lama
    $query = "SELECT * FROM user WHERE username='$username' AND password='$pw_lama'";
    $sql = mysqli_query($conn, $query);
    $hasil = mysqli_num_rows($sql);
    if (!$hasil >= 1) {
?>
<script lang="JavaScript">
alert("Password Tidak Sesuai Silahkan Ulang Kembali");
document.location = 'edit_password.php';
</script>
<?php
        unset($_SESSION['username']);
        session_destroy();
    } else if (empty($_POST['pw_baru']) || empty($_POST['konf_pw'])) {
        echo "<h3><font color=red>Ganti Password Gagal! Data Tidak Boleh Kosong</font></h3>";
    } else if (($_POST['pw_baru']) != ($_POST['konf_pw'])) {
        echo "<h3><font color=red<center>Ganti Password Gagal! Password Dan Konfirm Password Harus Sama</center></font></h3>";
    } else {
        $query = "UPDATE user SET password='$pw_baru' WHERE username='$username'";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            echo "<h3><font color=#8BB2D9><center>Ganti Password Berhasil</center></font></h3>";
        } else {
            echo "<h3><font color=red><center>Ganti Password Gagal</center></font></h3>";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/Logo.png" type="image/png">
    <title>edit_password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="gradient">
        <div class="container-sm align-middle shadow-lg border-2 mt-5 bg-light px-5 py-3 rounded-5"
            style="max-width: 500px;">
            <img src="image/Logo.png" alt="Logo" style="width: 150px; display: block; margin: auto;">
            <h2 class="jdl text-center">User-Profile</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label><br>
                    <b><i><?= $username ?></i></b><input type="hidden" name="username" id="username"
                        value="<?= $username ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password Lama</label><br>
                    <input type="password" name="pw_lama" id="pw_lama">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password Baru</label><br>
                    <input type="password" name="pw_baru" id="pw_baru">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Konfirmasi Password</label><br>
                    <input type="password" name="konf_pw" id="konf_pw">
                </div>
                <br />
                <a href="beranda_user.php" class="btn btn-danger" type="reset" name="">Batal</a>
                <input class="btn btn-success mx-3" type="submit" name="edit" value="Simpan">
                <br />
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>