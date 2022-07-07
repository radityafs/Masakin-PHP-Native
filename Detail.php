<?php
/*
    File digunakan untuk menampilkan Detail Resep Masakan 
    dan menampilkan komentar
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/Logo.png" />

  <title>Detail Recipe</title>
  <link rel="stylesheet" href="./assets/styles/navbar.css">
  <link rel="stylesheet" href="./assets/styles/footer.css">
  <link rel="stylesheet" href="./assets/styles/utility.css">

  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./assets/styles/detail.css" />

</head>

<body>
  <?php
  require_once("./components/navbar.php");
  require_once("./handler/DatabaseHandler.php");

  $db = new DatabaseHandler();

  if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $query = $db->executeQuery("SELECT recipe.*, category.name AS category FROM recipe LEFT JOIN category ON recipe.categoryId = category.idCategory WHERE recipeId = " . $_GET["id"]);
    $recipe = $query->fetch_assoc();


    if ($recipe == null) {
      header("Location: List.php");
      exit();
    }
  } else {
    header("Location: List.php");
    exit();
  }

  ?>

  <section style="padding-top: 70px;">
    <div class="container">
      <h1 class="title mb-2"><?= $recipe["title"] ?></h1>
      <h5 class="title" style="font-size:28px;"><?= $recipe["category"] ?></h5>
      <div class="content-img">
        <img src="./public/<?= $recipe["photo"] ?>" alt="Food Image" />
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="ingridients">
        <h2>Ingriedients</h2>
        <ul>
          <?php
          $ingridients = explode("\n", $recipe["ingredients"]);
          foreach ($ingridients as $ingridient) {
            echo "<li>" . $ingridient . "</li>";
          }
          ?>
        </ul>
      </div>
    </div>
  </section>

  <?php

  if (isset($_SESSION['users']['id'])) {
    echo '<section>
    <div class="container">
      <div class="review" style="margin-bottom:10px;">
        <h2>Review</h2>
        <form action="./handler/AddReview.php?id=' . $id . '" method="post">
          <textarea name="comment" id="" cols="30" rows="10" placeholder="Write your review here"></textarea>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      </div>
      </section>';
  }

  ?>


  <section>
    <div class="container comment-section">
      <h2>Reviews</h2>
      <?php

      $commentRecipe = $db->executeQuery("SELECT users.photo AS photo, users.name AS name, reviews.*
      FROM reviews LEFT JOIN users ON reviews.userId = users.userId 
      WHERE recipeId =" . $_GET["id"]);

      while ($row = $commentRecipe->fetch_assoc()) {
        echo '
          <div class="comment">
          <div class="comment-img">
            <img src="./public/' . $row["photo"] . '" alt="Comment Image" />
          </div>
  
          <div class="comment-text">
            <a>' . $row["name"] . '</a>
            <p>' . $row["review"] . '</p>
          </div>
        </div>';
      }
      ?>


    </div>
  </section>

  <?php require_once("./components/footer.php"); ?>
</body>

</html>