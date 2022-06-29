<?php
/*
    File digunakan untuk menampilkan halaman Landing Page / Halaman Utama
*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/Logo.png" />
    <link rel="stylesheet" href="./assets/styles/navbar.css">
    <link rel="stylesheet" href="./assets/styles/landing.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <title>Resepku</title>
</head>


<body>

    <?php
    require_once("./components/navbar.php");
    require_once './handler/DatabaseHandler.php';
    $db = new DatabaseHandler();
    ?>

    <div className="container-fluid" style="position: relative;">
        <section class="hero row">
            <div class="content col-10 col-sm-9 d-flex flex-column justify-content-center ff-airbnb">
                <h1 class="display-5 mb-3">Discover Recipe & Delicious Food</h1>
                <form class="search mb-3" action="List.php" method="POST">
                    <label class="py-2 px-4" htmlFor="search">
                        <img src="./assets/icons/search.svg" style="width: 25px; height:25px;"></i>
                    </label>
                    <input type="search" name="search" class="form-control p-3" id="search" placeholder="Search food you want to ...">
                </form>
            </div>
            <div class="decoration col-2 col-sm-3 d-flex align-items-center back-primary">
                <img class="d-none d-md-block" src="./assets/images/landing-hero.webp" alt="Hero" />
            </div>
        </section>


        <section class="suggestion ff-airbnb mb-10">
            <div class="title-section mb-4 mb-md-5">
                <h1>Popular For You!</h1>
            </div>
            <div class="row">
                <div class="left col-12 col-md-6">
                    <img src="./assets/images/landing-suggestion.webp" alt="Suggestion" />
                    <div></div>
                </div>
                <div class="right col-12 col-md-6">
                    <div>
                        <h1>Healthy Bone Broth Ramen (Quick & Easy)</h1>
                        <hr />
                        <p>
                            Quick + Easy Chicken Bone Broth Ramen- Healthy chicken ramen in a
                            hurry? That’s right!
                        </p>
                        <a to="/" class="btn back-primary text-light" style="width: 150px;">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <section class="new ff-airbnb mb-10">
            <div class="title-section mb-4 mb-md-5">
                <h1>New Recipe</h1>
            </div>
            <div class="row">
                <div class="left col-12 col-md-6">
                    <img src="./assets/images/landing-new.webp" alt="New Recipe" />
                    <div></div>
                </div>
                <div class="right col-12 col-md-6">
                    <div>
                        <h1>Healthy Bone Broth Ramen (Quick & Easy)</h1>
                        <hr />
                        <p>
                            Quick + Easy Chicken Bone Broth Ramen- Healthy chicken ramen in a
                            hurry? That’s right!
                        </p>
                        <a to="/" class="btn back-primary text-light" style="width: 150px;">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="popular ff-airbnb mb-10">
            <div class="title-section mb-4 mb-md-5">
                <h1>Latest Recipe</h1>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                    <?php
                    $query = $db->executeQuery("SELECT * FROM recipe ORDER BY recipeId DESC LIMIT 3");
                    while ($row = $query->fetch_assoc()) {
                        echo '
                        <div class="col">
                        <a href="detail.php?=' . $row['recipeId'] . '">
                            <div class="card align-items-center">
                                <p class="title text-dark text-str back-primary px-2 py-1 rounded">
                                    ' . $row['title'] . '
                                </p>
                                <img src="./public/' . $row['photo'] . '" class="card-img-top" alt=anu />
                            </div>
                        </a>
                    </div>';
                    }
                    ?>


                </div>

            </div>
        </section>

    </div>

    <?php
    require_once('./components/footer.php');
    ?>

</body>