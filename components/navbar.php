<?php
/*
    File digunakan sebagai module navigation bar / header 
    yang akan digunakan untuk beberapa page
*/
?>

<?php
session_start();
?>
<nav class='navbar nav-wrapper navbar-expand-lg navbar-light bg-light bg-white py-40 w-100'>
  <div class='container-md'>
    <a class='navbar-brand' href='./'>
      <img src="./assets/images/logo.png" style="width: 40px; height:40px;" alt='dssds' />
    </a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='navbar-nav ms-auto text-lg gap-lg-0 gap-2'>
        <li class='nav-item my-auto me-lg-20'>
          <a class='nav-link' href='./List.php'>
            Find Recipe
          </a>
        </li>
        <li class='nav-item my-auto me-lg-20'>
          <a class='nav-link' href='./Add.php'>
            Add Recipe
          </a>
        </li>

        <?php
        if (isset($_SESSION["users"])) {
          echo '
                    <li class="nav-item my-auto dropdown d-flex">
                    <div class="vertical-line d-lg-block d-none"></div>
                    <div>
                      <a
                        class="dropdown-toggle ms-lg-40"
                        href="#"
                        role="button"
                        id="dropdownMenuLink"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <img
                          src="' . "./public/" . $_SESSION["users"]["photo"] . '"
                          class="rounded-circle"
                          style={{ width: "40px", height: "40px" }}
                          width="40"
                          height="40"
                          alt=""
                        />
                      </a>
  
                      <ul
                        class="dropdown-menu border-0"
                        aria-labelledby="dropdownMenuLink"
                      >
                        <li>
                          <a
                            class="dropdown-item text-lg color-palette-2"
                            href="Profile.php"
                          >
                            My Profile
                          </a>

                          <a
                          class="dropdown-item text-lg color-palette-2"
                          href="LogOut.php"
                        >
                          Log out
                        </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                    ';
        } else {
          echo '
                    <li class="nav-item my-auto me-lg-20">
                        <a style="text-decoration: none;" class="btn-nav" href="./Register.php">
                            Sign Up
                        </a>
                        
                    </li>';
        }
        ?>

      </ul>
    </div>
  </div>
</nav>