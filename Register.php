<?php

/*
    File ini digunakan untuk halaman registrasi user
*/

session_start();

if (isset($_SESSION["user"])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./assets/images/Logo.png" />

    <link rel="stylesheet" href="./assets/styles/auth.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">

    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="side col-sm-5 col-md-6 d-none d-sm-flex">
                <div class="icon text-center w-100">
                    <a to="/">
                        <img src="./assets/icons/logo.svg" width="100px" height="120px" color="#fff" />
                    </a>
                </div>
            </div>
            <div class="auth register col-sm-7 col-md-6">
                <div class="content ff-inter">
                    <h1 class="fs-4 fw-bold color-primary text-center mb-3">
                        Let&apos;s Get Started
                    </h1>
                    <h2 class="fs-6 text-secondary text-center mb-4">
                        Create new account to access all features
                    </h2>
                    <form action="./handler/Register.php" method="POST" enctype="multipart/form-data">
                        <div class=" mb-3">
                            <label class="form-label">
                                Name
                            </label>
                            <input type="text" class="form-control form-control-sm p-3" name="name" placeholder="Name" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                E-mail
                            </label>
                            <input type="email" class="form-control form-control-sm p-3" name="email" required placeholder="E-mail" />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="photo" class="form-label">
                                Photo
                            </label>
                            <input type="file" class="form-control form-control-sm p-3" name="photo" placeholder="Photo" />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="email" class="form-label">
                                Password
                            </label>
                            <input type="password" class="form-control form-control-sm p-3" name="password" required placeholder="Password" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" />
                            <label class="form-check-label" htmlFor="terms">
                                I agree to terms and conditions
                            </label>
                        </div>

                        <button type="submit" class="btn back-primary w-100 text-light mb-2">
                            Register Account
                        </button>
                    </form>
                    <p class="text-center text-secondary mt-4 ff-airbnb">
                        Already have account?
                        <a class="color-primary text-decoration-none" href="Login.php">
                            Log in Here
                        </a>
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </div>
</body>

</html>