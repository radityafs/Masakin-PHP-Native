<?php
session_start();

if (!isset($_SESSION['users']) || $_SESSION["users"]["role"] != "1") {
  header("Location: ../index.php");
  exit();
}


require_once '../handler/DatabaseHandler.php';

$db = new DatabaseHandler();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Masakin - Dashboard</title>


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Masakin Dashboard</sup></div>
      </a>

      <hr class="sidebar-divider my-0" />

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider" />

      <div class="sidebar-heading">Menu</div>

      <li class="nav-item">
        <a class="nav-link" href="./Category.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Category</span></a>
        <a class="nav-link" href="./Recipe.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Recipe</span></a>
      </li>



      <hr class="sidebar-divider d-none d-md-block" />

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION["users"]["name"] ?></span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="../Profile.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  My Profile
                </a>
                <a class="dropdown-item" href="../LogOut.php">
                  <i class=" fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

              </div>
            </li>
          </ul>
        </nav>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Category</h1>
          <p class="mb-4">Category Makanan yang bisa diinputkan.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Kategori</h6>
              <button type="button" class="btn btn-primary float-right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Kategori</button>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kategori</th>
                      <th>Jumlah</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query = "SELECT category.idCategory AS ID, category.name AS name, COUNT(recipe.recipeId) AS jumlah FROM category LEFT JOIN recipe ON category.idCategory = recipe.categoryId GROUP BY category.idCategory;";
                    $result = $db->executeQuery($query);
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<tr>";
                      echo "<td>" . $row['ID'] . "</td>";
                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['jumlah'] . "</td>";
                      echo '<td class="d-flex justify-content-center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="' . $row["name"] . '" data-id="' . $row["ID"] . '">Edit</button> </td>';
                      echo "</tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="./handler/addKategori.php">
            <div class="form-group">
              <input type="text" name="id" style="display: none;">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Kategori:</label>
              <input type="text" class="form-control" id="recipient-name" name="category" placeholder="Nama Kategori">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>

  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)
      var dataKategori = button.data('whatever')
      var dataId = button.data('id')

      var modal = $(this)
      if (dataKategori != undefined) {
        modal.find('.modal-title').text('Edit Kategori')

        modal.find('button[type="submit"]').text("Edit")
        modal.find("input[name=id]").val(dataId)
        modal.find('input[name=category]').val(dataKategori)
      } else {
        modal.find('.modal-title').text('Tambah Kategori')

        modal.find('button[type="submit"]').text("Tambah")
        modal.find("input[name=id]").val("")
        modal.find('input[name=category]').val("")

      }

    })
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>