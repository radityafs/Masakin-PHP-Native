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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
                    <form>
                        <div class="mb-3">
                            <label htmlFor="name" class="form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                                * Name
                            </label>
                            <input type="text" class="form-control form-control-sm p-3" id="name" placeholder="Name" required />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="email" class="form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                                * E-mail
                            </label>
                            <input type="email" class="form-control form-control-sm p-3" id="email" required placeholder="E-mail" />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="phone" class="form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                                * Phone Number
                            </label>
                            <input type="number" class="form-control form-control-sm p-3" id="phone" required placeholder="08XXXXXXXXXX" />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="photo" class="form-label">
                                Photo
                            </label>
                            <input type="file" class="form-control form-control-sm p-3" id="photo" placeholder="Photo" />
                        </div>
                        <div class="mb-3">
                            <label htmlFor="email" class="form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                                * Password
                            </label>
                            <input type="password" class="form-control form-control-sm p-3" id="password" required placeholder="Password" />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" />
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
                        <Link class="color-primary text-decoration-none" to="/auth">
                        Log in Here
                        </Link>
                    </p>
                    <br />
                </div>
            </div>
        </div>
    </div>
</body>

</html>