<?php
/*
    File digunakan untuk menampilkan List Resep Makanan
*/

$page = 1;
if (isset($_GET["page"])) {
    $page = intval($_GET["page"]);
}
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

<body style="overflow-x:hidden;">

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

            $limit = 4;
            $start = ($page - 1) * $limit;

            if (isset($_POST['search'])) {
                $search = htmlspecialchars($_POST['search']);
                $total = $db->executeQuery("SELECT COUNT(*) as total FROM recipe WHERE title LIKE '%$search%' AND  isActive = 1")->fetch_assoc()["total"];
                $total_page = ceil($total / $limit);

                $query = $db->executeQuery("SELECT * FROM recipe WHERE title LIKE '%$search%' AND isActive = 1 LIMIT $start, $limit");
            } else {
                $total = $db->executeQuery("SELECT COUNT(*) as total FROM recipe WHERE isActive = 1")->fetch_assoc()["total"];
                $total_page = ceil($total / $limit);

                $query = $db->executeQuery("SELECT * FROM recipe WHERE isActive = 1 ORDER BY recipeId DESC LIMIT $start, $limit");
            }

            if ($total > 0) {
                while ($row = $query->fetch_assoc()) {
                    echo '
                        <div class="col-md-3">
                        <a class="card" href="Detail.php?id=' . $row["recipeId"] . '">
                            <img class="image-card" src="./public/' . $row["photo"] . '" alt="Food Image" />
                            <p class="carousel-caption">' . $row["title"] . '</p>
                        </a>
                    </div>';
                }
            } else {
                echo '
                    <h2 class="w-100 text-center">No Recipe Found</h2>
                    ';
            }



            ?>

            <nav aria-label="Page navigation example" class="w-100 mt-5" style="display: flex; justify-content:center;">
                <ul class="pagination">
                    <?php
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="List.php?page=' . ($page - 1) . '">Previous</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><a class="page-link" href="List.php?page=' . ($page) . '">Previous</a></li>';
                    }

                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            echo '<li class="page-item active"><a class="page-link" href="List.php?page=' . $i . '">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="List.php?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    if ($page < $total_page) {
                        echo '<li class="page-item"><a class="page-link" href="List.php?page=' . ($page + 1) . '">Next</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><a class="page-link" href="List.php?page=' . ($page) . '">Next</a></li>';
                    }
                    ?>
                </ul>
            </nav>

        </div>
    </div>


    <?php
    require_once("./components/footer.php");
    ?>
</body>



</html>