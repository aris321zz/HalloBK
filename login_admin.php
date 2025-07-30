<?php


include 'function.php';

error_reporting(0);



if (isset($_SESSION['username'])) {
    header("Location: beranda_user.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        header("Location: hal-admin/beranda.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="image/Logo.png" type="image/png">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="gradient">
        <div id="Kotak_login" class="container mt-5 bg-light rounded-4 shadow-lg" style="width: 400px;">
            <img src="image/Logo.png" style="width: 250px; display: block; margin: auto;" alt="Logo">
            <h2 class="tulisan_login text-center">Login Admin</h2>

            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Email</label>
                    <input type="email" name="email" class="form-control border border-info" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="<?php echo $email; ?>" required="required">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-info"
                        id="exampleInputPassword1" value="<?php echo $_POST['password']; ?>" required="required">
                </div>
                <input type="submit" name="submit" class="tombol_login rounded mb-4 mt-3" value="LOGIN">
                <a href="index.php" style="color: blue; text-align:center;"> Login Sebagai User</a>
                <br />
                <br />
            </form>
        </div>
    </div>
    </div>


</body>

</html>