<?php
include 'connection.php';
session_start();

if(!isset($_SESSION['admin_name'])){
  header('location:login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelola Pengaduan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">Admin | Karangjati</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $_SESSION['admin_name'] ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolauser.php">
              <i class="bi bi-circle"></i><span>Kelola User</span>
            </a>
          </li>
          <li>
            <a href="inputuser.php">
              <i class="bi bi-circle"></i><span>Tambahkan User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolaproduct.php">
              <i class="bi bi-circle"></i><span>Kelola Product</span>
            </a>
          </li>
          <li>
            <a href="inputproduct.php">
              <i class="bi bi-circle"></i><span>Tambahkan Product</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolaberita.php">
              <i class="bi bi-circle"></i><span>Kelola Berita</span>
            </a>
          </li>
          <li>
            <a href="inputberita.php">
              <i class="bi bi-circle"></i><span>Tambahkan Berita</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-person"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolavideo.php">
              <i class="bi bi-circle"></i><span>Kelola Video</span>
            </a>
          </li>
          <li>
            <a href="inputvideo.php">
              <i class="bi bi-circle"></i><span>Tambahkan video</span>
            </a>
          </li>
          <li>
            <a href="kelolafoto.php">
              <i class="bi bi-circle"></i><span>Kelola Foto</span>
            </a>
          </li>
          <li>
            <a href="inputfoto.php">
              <i class="bi bi-circle"></i><span>Input Foto</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-exclamation-diamond"></i><span>Speak Up</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolapengaduan.php" class="active">
              <i class="bi bi-circle"></i><span>Kelola Pengaduan</span>
            </a>
          </li>
          <li>
            <a href="kelolakomentar.php">
              <i class="bi bi-circle"></i><span>Kelola Komentar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Kelola Pengaduan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Speak Up</li>
          <li class="breadcrumb-item active">Kelola Pengaduan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">

        <div>
          <div class="container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Aduan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $adu = query("SELECT * FROM aduan");
                $i = 1;
                foreach($adu as $row):
                ?>
                <tr>
                  <th scope="row">
                    <?= $i;?>
                  </th>
                  <td>
                    <?= $row['name']?>
                  </td>
                  <td>
                    <?= $row['email']?>
                  </td>
                  <td>
                    <?= $row['aduan']?>
                  </td>
                  <td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                      data-bs-target="#editModal<?= $i;?>">Edit</button>
                    <a href="deletepengaduan.php?id=<?= $row['id'];?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="editModal<?= $i;?>" tabindex="-1" aria-labelledby="editModalLabel<?= $i;?>"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel<?= $i;?>">Edit Aduan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="POST">
                        <div class="modal-body">
                          <div class="form-floating mb-3">
                            <input id="name" type="text" class="form-control d-none" name="id" value="<?= $row['id']?>">
                            <input id="name" type="text" class="form-control" name="name" value="<?= $row['name']?>"
                              disabled>
                            <label for="name">Name:</label>
                            <small>Nama tidak bisa diganti.</small>
                          </div>
                          <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control" name="email"
                              value="<?= $row['email']?>">
                            <label for="email">Email:</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input id="aduan" type="aduan" name="aduan" class="form-control">
                            <label for="aduan">Aduan :</label>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" name="simpan" class="btn btn-primary"
                            data-bs-dismiss="modal">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <?php
                $i++;
                endforeach;
                if(isset($_POST['simpan'])){
                  $id = $_POST['id'                                     ];
                  $email = $_POST['email'];
                  $message = $_POST['aduan'];

                  $edit=  mysqli_query($conn, "UPDATE aduan SET name='$name',email='$email',aduan='$message' WHERE id='$id'");
                  if($edit){
                    echo '<script>
                        window.addEventListener("load",function (){window.location.href=window.location.href;},false);
                    </script>';
                  }
                  if(!$edit){
                    echo "GAGAl";
                  }
                }
                ?>
              </tbody>
            </table>
            <script>
              function showPw() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script>
          </div>

        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>A11.2022.14499 - ULIMA MUNA SYARIFAH</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>