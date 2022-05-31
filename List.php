<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/profile.css" />
    <link rel="icon" href="./assets/images/Logo.png" />

    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <title>List Resep</title>
</head>

<body style=" overflow-x:hidden;">

    <?php
    require_once("./components/navbar.php");
    ?>
    <div class="container" style="padding-top: 150px; margin-bottom:120px;">

        <div class="search w-100">
            <form class="search mx-auto mb-5" action="List.php" method="POST">
                <label class="px-4 py-3" style="position: absolute;" htmlFor="search">
                    <img src="./assets/icons/search.svg" style="width: 25px; height:25px;"></i>
                </label>
                <input type="search" class="form-control p-3" id="search">
            </form>
        </div>


        <div class="row list-recipe">
            <div class="col-md-3">
                <a class="card" href="Detail.php?id=1">
                    <img src="./assets/images/food-image2.png" alt="Food Image" />
                    <p class="carousel-caption">Bomb Chicken</p>
                </a>
            </div>
            <div class="col-md-3">
                <a class="card" href="Detail.php?id=1">
                    <img src="./assets/images/food-image3.png" alt="Food Image" />
                    <p class="carousel-caption">Loream Sandwich</p>
                </a>
            </div>
            <div class="col-md-3">
                <a class="card" href="Detail.php?id=1">
                    <img src="./assets/images/food-image3.png" alt="Food Image" />
                    <p class="carousel-caption">Loream Sandwich</p>
                </a>
            </div>
            <div class="col-md-3">
                <a class="card" href="Detail.php?id=1">
                    <img src="./assets/images/food-image3.png" alt="Food Image" />
                    <p class="carousel-caption">Loream Sandwich</p>
                </a>
            </div>
            <div class="col-md-3">
                <a class="card" href="#">
                    <img src="./assets/images/food-image3.png" alt="Food Image" />
                    <p class="carousel-caption">Loream Sandwich</p>
                </a>
            </div>
        </div>
    </div>


    <?php
    require_once("./components/footer.php");
    ?>
</body>



</html>