<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/Logo.png" />
  <title>Profile</title>
  <link rel="icon" href="./assets/images/Logo.png" />

  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./assets/styles/profile.css" />
</head>

<body>
  <nav>
    <div class="header">
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="Add.php">Add Recipe</a></li>
        <li><a href="Profile.php">Profile</a></li>
      </ul>
    </div>
  </nav>

  <section>
    <div class="container">
      <div class="profil-desc">
        <img src="./assets/images/profile-image.png" alt="Food Image" />
        <h2>Garneta Sharina</h2>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="list-action">
        <ul>
          <li><a class="active" href="profile.php">My Recipe</a></li>
          <li><a href="profile.php">Saved Recipe</a></li>
          <li><a href="profile.php">Liked Recipe</a></li>
        </ul>
      </div>
      <hr />
    </div>
  </section>

  <div class="section">
    <div class="container">
      <div class="row list-recipe">
        <div class="col-md-3">
          <a class="card" href="detail.php?=1">
            <img src="./assets/images/food-image2.png" alt="Food Image" />
            <p class="carousel-caption">Bomb Chicken</p>
          </a>
        </div>
        <div class="col-md-3">
          <a class="card" href="detail.php?=1">
            <img src="./assets/images/food-image3.png" alt="Food Image" />
            <p class="carousel-caption">Loream Sandwich</p>
          </a>
        </div>
        <div class="col-md-3">
          <a class="card" href="detail.php?=1">
            <img src="./assets/images/food-image3.png" alt="Food Image" />
            <p class="carousel-caption">Loream Sandwich</p>
          </a>
        </div>
        <div class="col-md-3">
          <a class="card" href="detail.php?=1">
            <img src="./assets/images/food-image3.png" alt="Food Image" />
            <p class="carousel-caption">Loream Sandwich</p>
          </a>
        </div>
        <div class="col-md-3">
          <a class="card" href="detail.php?=1">
            <img src="./assets/images/food-image3.png" alt="Food Image" />
            <p class="carousel-caption">Loream Sandwich</p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once('./components/footer.php');
  ?>
</body>

</html>