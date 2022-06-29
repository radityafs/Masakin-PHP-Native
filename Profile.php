<?php

/*
    File digunakan untuk menampilkan detail resep user
    dan untuk akses ke halaman edit dan hapus resep
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/Logo.png" />
  <title>Profile</title>
  <link rel="icon" href="./assets/images/Logo.png" />
  <link rel="stylesheet" href="./assets/styles/navbar.css">
  <link rel="stylesheet" href="./assets/styles/footer.css">
  <link rel="stylesheet" href="./assets/styles/utility.css">
  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./assets/styles/profile.css" />
</head>

<body>
  <?php
  require_once("./components/navbar.php");


  if (isset($_SESSION["users"]) == false) {
    header("Location: login.php");
  }

  ?>

  <section style="padding-top: 70px;">
    <div class="container">
      <div class="profil-desc">
        <img <?= "src='./public/" . $_SESSION["users"]["photo"] . "'" ?> alt="Food Image" />
        <h2><?= $_SESSION["users"]["name"] ?></h2>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="list-action">
        <ul>
          <li><a class="active" href="profile.php">My Recipe</a></li>
        </ul>
      </div>
      <hr />
    </div>
  </section>

  <div class="section">
    <div class="container">
      <div class="row list-recipe">

        <?php
        require_once("./handler/DatabaseHandler.php");

        $db = new DatabaseHandler();
        $users_id = $_SESSION["users"]["id"];

        $query = $db->executeQuery("SELECT * FROM recipe WHERE authorId = $users_id");
        if ($query->num_rows > 0) {
          while ($row = $query->fetch_assoc()) {
            echo '
            <div class="col-md-3" style="position: relative;">
            <a class="card" href="Detail.php?id=' . $row['recipeId'] . '">
              <img class="image-card" src="./public/' . $row['photo'] . '" alt="' . $row['title'] . '" />
              <p class="carousel-caption" style="top: 0;">' . $row['title'] . '</p>

              <a href="Add.php?id=' . $row['recipeId'] . '" class="btn btn-warning" style="position: absolute; bottom:30px; margin-left:30px;">Edit</a>
              <a href="./handler/DeleteRecipe.php?id=' . $row["recipeId"] . '" class="btn btn-danger" style="position: absolute; bottom:30px; right:0; margin-right:30px;">Delete</a>
            </a>
          </div>
            ';
          }
        } else {
          echo "No recipe found";
        }

        ?>

      </div>
    </div>
  </div>

  <?php
  require_once('./components/footer.php');
  ?>
</body>

</html>