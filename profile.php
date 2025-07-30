<?php
include "function.php";
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$password = $row['password'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/Logo.png" type="image/png">
    <title>User-Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container-sm align-middle shadow-lg border-2 mt-5" style="max-width: 500px;">
        <img src="/image/Logo.png" alt="Logo" style="width: 200px; display: block; margin: auto;">
        <h2 class="prof text-center">User-Profile</h2>
        <form action="update.php" method="post">
            <input type="hidden" value="<?php echo $email; ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label><br>
                <?php echo $_SESSION['email']; ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label><br>
                <?php echo $_SESSION['username']; ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label><br>
                <?php echo $_SESSION['kelas']; ?>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label><br>
                <?php echo $_SESSION['tgl_lahir']; ?>
            </div>
            <br />
            <br />
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>