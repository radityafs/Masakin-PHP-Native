<?php
/*
    File digunakan untuk menampilkan List Resep Makanan
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/Logo.png" />
    <link rel="stylesheet" href="./assets/styles/navbar.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/styles/profile.css" />

    <title>List Resep Masakan</title>
</head>

<body style=" overflow-x:hidden;">

    <?php
    require_once("./components/navbar.php");
    ?>

    <div class="container" style="padding-top: 150px; margin-bottom:120px;">

        <div class="search w-100">
            <form class="search mx-auto mb-5" action="List.php" method="POST">
                <label class="px-4 py-3" style="position: absolute;" htmlFor="search">
                    <img class="image-card" src="./assets/icons/search.svg" style="width: 25px; height:25px;"></i>
                </label>
                <input style="padding-left: 55px !important;" type="search" name="search" class="form-control p-3" id="search" value="<?= isset($_POST["search"]) ? $_POST["search"] : "" ?>" placeholder="Find your recipe..">
            </form>
        </div>


        <div class="row list-recipe ">
            <?php
            require_once './handler/DatabaseHandler.php';
            $db = new DatabaseHandler();


            if (isset($_POST['search'])) {
                $search = htmlspecialchars($_POST['search']);
                $query = $db->executeQuery("SELECT * FROM recipe WHERE title LIKE '%$search%'");
            } else {
                $query = $db->executeQuery("SELECT * FROM recipe");
            }

            while ($row = $query->fetch_assoc()) {
                echo '
                <div class="col-md-3">
                <a class="card" href="Detail.php?id=' . $row["recipeId"] . '">
                    <img class="image-card" src="./public/' . $row["photo"] . '" alt="Food Image" />
                    <p class="carousel-caption">' . $row["title"] . '</p>
                </a>
            </div>';
            }
            ?>


        </div>
    </div>


    <?php
    require_once("./components/footer.php");
    ?>
</body>



</html>