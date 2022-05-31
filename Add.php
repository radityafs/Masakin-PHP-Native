<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/Logo.png" />

    <title>Add Recipe</title>

    <link rel="stylesheet" href="./assets/styles/utility.css">
    <link rel="stylesheet" href="./assets/styles/add.css">
    <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    require_once("./components/navbar.php")

    ?>
    <div class="container mb-5">
        <section class="add ff-airbnb">
            <form>
                <div class="mb-3">
                    <label htmlFor="title" class="form-label me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                        * Title
                    </label>
                    <input type="text" class="form-control form-control-sm p-3" id="title" placeholder="Title" required />
                </div>
                <div class="mb-3">
                    <label htmlFor="ingredients" class="form-label me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Required">
                        * Ingredients
                    </label>
                    <textarea class="form-control" id="ingredients" rows="10" placeholder="Ingredients"></textarea>
                </div>
                <div class="mb-3">
                    <label htmlFor="photo" class="form-label me-2">
                        Photo
                    </label>
                    <input type="file" class="form-control form-control-sm p-3" id="photo" placeholder="Photo" />
                </div>
                <div class="mb-3">
                    <label htmlFor="video" class="form-label me-2">
                        Video
                    </label>
                    <input type="file" class="form-control form-control-sm p-3" id="video" placeholder="Video" />
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

    require_once("./components/footer.php")

    ?>

</body>

</html>