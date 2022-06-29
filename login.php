<?php

/*
    File digunakan untuk login page
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
    <link rel="stylesheet" href="./assets/styles/auth.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="icon" href="./assets/images/Logo.png" />

    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class='container-fluid'>
        <div class='row'>
            <div class="side col-sm-5 col-md-6 d-none d-sm-flex">
                <div class="icon text-center w-100">
                    <a to="/">
                        <img src="./assets/icons/logo.svg" width="100px" height="120px" color="#fff" />
                    </a>
                </div>
            </div>
            <div class='auth login col-sm-7 col-md-6'>
                <div class='content ff-inter'>
                    <div class='d-sm-none text-center mb-4'>

                    </div>
                    <h1 class='fs-4 fw-bold color-primary text-center mb-3'>
                        Welcome
                    </h1>
                    <h2 class='fs-6 text-secondary text-center mb-4'>
                        Log in into your existing account
                    </h2>
                    <form action="./handler/Login.php" method="POST">
                        <div class='mb-3'>
                            <label htmlFor='email' class='form-label'>
                                E-mail
                            </label>
                            <input type='email' class='form-control form-control-sm p-3' name='email' required placeholder='E-mail' />
                        </div>
                        <div class='mb-3'>
                            <label htmlFor='email' class='form-label'>
                                Password
                            </label>
                            <input type='password' class='form-control form-control-sm p-3' name='password' required placeholder='Password' />
                        </div>


                        <button type='submit' class='btn back-primary w-100 text-light mb-2'>
                            Log in
                        </button>
                    </form>
                    <div class='d-flex justify-content-end ff-airbnb'>
                        <Link class='link-secondary text-decoration-none' href='/auth/forgot'>
                        Forgot Password?
                        </Link>
                    </div>
                    <p class='text-center text-secondary mt-4 ff-airbnb'>
                        Don&apos;t have an account?
                        <a class='color-primary text-decoration-none' href='register.php'>
                            Sign Up
                        </a>
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </div>
</body>

</html>