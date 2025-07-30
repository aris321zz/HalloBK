<?php

include "function.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$id = $_SESSION['id_user'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/Logo.png" type="image/png">
    <title>Hallo BK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    body {
        background-color: #01345b;
    }

    #btnnotif {
        background: #ffcf43;
    }

    .swing:hover {
        animation: swing 1s;
    }

    @keyframes swing {
        0% {
            transform: rotateZ(0deg) translate(0, 0);
        }

        20% {
            transform: rotateZ(10deg) translate(3px, -1px);
        }

        40% {
            transform: rotateZ(-10deg) translate(-3px, 1px);
        }

        60% {
            transform: rotateZ(11deg) translate(2px, -1px);
        }

        80% {
            transform: rotateZ(0deg) translate(0px, 0px);
        }
    }

    .sosial_media ul {
        position: relative;
        top: 50%;
        left: 50%;
        padding: 0;
        margin: 0;
        transform: translate(-50%, -50%);
        display: flex;
    }

    .sosial_media ul li {
        list-style: none;
        margin: 3px;
    }

    .sosial_media ul li .fab {
        font-size: 15px;
        line-height: 35px;
        transition: .3s;
        color: #000;
    }

    .sosial_media ul li .fab:hover {
        color: #fff;
    }

    .sosial_media ul li a {
        position: relative;
        display: block;
        width: 35px;
        height: 35px;
        border: grey;
        border-radius: 50%;
        background-color: #fff;
        text-align: center;
        transition: .6s;
        box-shadow: 0 5px 4px rgba(0, 0, 0, 0.700);
    }

    .sosial_media ul li a:hover {
        transform: translate(0, -10%);
    }

    .sosial_media ul li:nth-child(1) a:hover {
        background-color: #0077b5;
    }

    .sosial_media ul li:nth-child(2) a:hover {
        background-color: #e4405f;
    }

    .sosial_media ul li:nth-child(3) a:hover {
        background-color: #0077b5;
    }

    .sosial_media ul li:nth-child(4) a:hover {
        background-color: #000;
    }
    </style>
</head>

<body>
    <div class="container-fluid p-md-5 p-sm-3">
        <div class="row">
            <div class="col-sm-3 col-lg-2">
                <div class="container-sm text-bg-info border border-5 border-warning p-0 shadow-lg"
                    style="border-radius: 20px 100px;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none p-0 pb-md-3">
                        <div class="dropdown text text-center">
                            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-person-circle ms-3" viewBox="0 0 16 16"
                                    style="min-width: 20; max-width: 40; margin: 10px;">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                </svg>
                                <?php
                                $tampilpeg = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
                                $peg = mysqli_fetch_array($tampilpeg);
                                ?>
                                <strong><?= $peg['username']; ?></strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-white text-small shadow-lg">
                                <li>
                                    <a class="dropdown-item" href="edit_password.php">Edit Password</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                            </ul>
                        </div>
                    </a>

                    <hr>
                    <h3 style="text-align: center;"><?php echo $peg['username']; ?></h3>
                    <h5 style="text-align: center;"><?php echo $peg['kelas']; ?></h5>
                    <h6 style="text-align: center;"><?php echo $peg['tgl_lahir']; ?></h6>
                    <h6 style="text-align: center;"><?php echo $peg['email']; ?></h6>
                    <hr>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-info bg-info shadow-lg mb-3 border border-5 border-warning"
                    style="border-radius: 20px 100px 150px 100px;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="beranda_user.php">Hallo BK</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="beranda_user.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="konsul.php">Konsultasi</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Lainnya
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="profil_guru.html">Profil Guru </a></li>
                                        <!--<li><a class="dropdown-item" href="#">Another action</a></li>-->
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid bg-white rounded shadow-lg mt-3 border border-5 border-warning">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <button id="btnnotif" type="button"
                                class="btn swing position-relative mt-3 border-light text-white">
                                Notification
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-3 border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <?php
                    $query = $conn->query("SELECT * FROM tb_konsul WHERE email='$_SESSION[email]' ORDER BY id_konsul DESC");
                    $i = 1;
                    foreach ($query as $key => $row) {
                        $id = $row['id_konsul'];
                    ?>
                    <div class="card text-bg-light text-center mt-3 mx-5 border border-2 border-warning">
                        <div class="card-header border-warning"><?= $row['username']; ?></div>
                        <div class="card-body">
                            <h5 class="card-title">Curhatan Kamu</h5>
                            <p class="card-text"><?= $row['konsul']; ?>
                            </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Balasan</h5>
                            <p class="card-text"><?= $row['balasan']; ?>
                            </p>
                        </div>
                        <?php echo "<td><a class='btn btn-danger' style='width: 100px; margin: auto; 'href='hapus.php?id_konsul=$id'>Hapus</a></td>"; ?>
                        <br>
                        <div class="card-footer text-muted border-warning"><?= $row['date']; ?>
                        </div>

                    </div>
                    <br>
                    <br>
                    <?php } ?>
                    <div class="container-fluid bg-light mb-1 mx-0"
                        style="height: 100px; display:block; clear:both;">
                        <footer
                            class="d-flex flex-wrap justify-content-between align-items-center pt-0 my-3 border-top border-secondary">
                            <div class="col-md-4 d-flex align-items-center">
                                <a href="/" class="mb-1 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                                    <svg class="bi" width="30" height="24">
                                        <use xlink:href="#bootstrap"></use>
                                    </svg>
                                </a>
                                <span class="mb-3 mb-md-0 text-muted">© 2022 Hallo BK, Inc</span>
                            </div>
                            <div class="sosial_media pt-5">
                                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                                    <li><a href="profil_guru.html" target="blank">
                                            <i class="fab bi bi-people"></i> </a>
                                    </li>
                                    <li><a href="https:instagram.com/konselorskiel" target="blank">
                                            <i class="fab bi bi-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>