<?php
/*
    File digunakan untuk Menambahkan dan Edit Resep Masakan
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/Logo.png" />

    <title>Add Recipe</title>
    <link rel="stylesheet" href="./assets/styles/navbar.css">
    <link rel="stylesheet" href="./assets/styles/footer.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/add.css">
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    require_once("./components/navbar.php");
    if (isset($_SESSION['users']) == false) {
        header("Location: login.php");
    }

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        require_once("./handler/DatabaseHandler.php");
        $db = new DatabaseHandler();
        $recipe = $db->executeQuery("SELECT * FROM recipe WHERE recipeId = $id AND authorId = " . $_SESSION['users']['id']);

        $recipe = $recipe->fetch_assoc();
        if ($recipe == null) {
            header("Location: List.php");
        }
    }

    ?>

    <div class="container mb-5">
        <section class="add ff-airbnb">
            <form action="./handler/AddRecipe.php<?= isset($_GET['id']) ? "?id=$id" : "" ?>" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label htmlFor="photo" class="form-label me-2">
                        Photo
                    </label>
                    <input type="file" class="form-control form-control-sm p-3" name="photo" placeholder="Photo" required />
                </div>

                <div class="mb-3">
                    <label htmlFor="title" class="form-label me-2">
                        Title
                    </label>
                    <input type="text" class="form-control form-control-sm p-3" name="title" placeholder="Title" value="<?= isset($recipe["title"]) ? $recipe["title"] : ""  ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label me-2" title="Required">
                        Ingredients
                    </label>
                    <textarea class="form-control" name="ingredients" rows="10" placeholder="Ingredients" required><?= isset($recipe["ingredients"]) ? $recipe["ingredients"] : "" ?></textarea>
                </div>


                <div class="d-flex justify-content-center">

                    <button type="submit" class="btn back-primary w-100 text-light mb-2">
                        Post
                    </button>
                </div>
            </form>
        </section>
    </div>

    <?php
    require_once("./components/footer.php");
    ?>

</body>

</html>