<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/Logo.png" />

  <title>Detail Recipe</title>

  <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./assets/styles/detail.css" />

</head>

<body>
  <nav>
    <div class="header">
      <ul>
        <li><a class="active" href="/">Home</a></li>
        <li><a href="/Add.php">Add Recipe</a></li>
        <li><a href="/Profile.php">Profile</a></li>
      </ul>
    </div>
  </nav>

  <section>
    <div class="container">
      <h1 class="title">Loream Sandwich</h1>
      <div class="content-img">
        <img src="./assets/images/food-image.png" alt="Food Image" />
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="ingridients">
        <h2>Ingriedients</h2>
        <ul>
          <li>- 2 eggs</li>
          <li>- 2 tbsp mayonnaise</li>
          <li>- 3 slices bread</li>
          <li>- a little butter</li>
          <li>- ⅓ carton of cress</li>
          <li>
            - 2-3 slices of tomato or a lettuce leaf and a slice of ham or
            cheese
          </li>
          <li>- crisps , to serve</li>
        </ul>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <h2>Video Step</h2>

      <a class="card" href="/#">
        <img src="./assets/icons/button-image.svg" alt="Video Image" width="1082px" height="700px" />
      </a>

      <a class="card" href="/#">
        <img src="./assets/icons/button-image.svg" alt="Video Image" width="1082px" height="700px" />
      </a>
    </div>
  </section>

  <section>
    <div class="container">
      <form action="/#">
        <textarea placeholder="Comment :" name="comment"></textarea>
        <button type="submit" style="color: white">Send</button>
      </form>
    </div>
  </section>

  <section>
    <div class="container">
      <h2>Author</h2>
      <div class="comment">
        <div class="comment-img">
          <img src="./assets/images/comment-image.png" alt="Comment Image" />
        </div>

        <div class="comment-text">
          <a>Raditya Firman Syaputra</a>
          <p>Good Code, Good Recipe</p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <h1>Eat, Cook,Repeat</h1>
    <p>Share your best recipe by uploading here !</p>

    <div class="content">
      <ul>
        <li>Product</li>
        <li>Company</li>
        <li>Learn More</li>
        <li>Get In Touch</li>
      </ul>
    </div>
  </footer>
</body>

</html>