<?php
include "rumus.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard SPK</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-light bg-warning static-top">

    <a class="navbar-brand mr-1" href="index.html">WP Methods</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Methods</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Methods Screens:</h6>
          <a class="dropdown-item" href="saw.php">SAW</a>
          <a class="dropdown-item" href="wp.php">WP</a>
          <a class="dropdown-item" href="ahp.php">AHP</a>
          <a class="dropdown-item" href="electre.php">ELECTRE</a>
          <a class="dropdown-item" href="topsis.php">TOPSIS</a>
          <a class="dropdown-item" href="mora.php">MOORA</a>
          <a class="dropdown-item" href="gdss.php">GDSS</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card-mb-3">
          <div class="card-header">
            Data Normalisasi
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th>Bobot%</th>
                <th>Kriteria</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
              </tr>
              <tr class="text-center">
                <td><?php echo $wp_bobot1 ?></td>
                <td>C1</td>
                <td><?php echo $a1_c1 ?></td>
                <td><?php echo $a2_c1 ?></td>
                <td><?php echo $a3_c1 ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $wp_bobot2 ?></td>
                <td>C2</td>
                <td><?php echo $a1_c2 ?></td>
                <td><?php echo $a2_c2 ?></td>
                <td><?php echo $a3_c2 ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $wp_bobot3 ?></td>
                <td>C3</td>
                <td><?php echo $a1_c3 ?></td>
                <td><?php echo $a2_c3 ?></td>
                <td><?php echo $a3_c3 ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $wp_bobot4 ?></td>
                <td>C4</td>
                <td><?php echo $a1_c4 ?></td>
                <td><?php echo $a2_c4 ?></td>
                <td><?php echo $a3_c4 ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $wp_bobot5 ?></td>
                <td>C5</td>
                <td><?php echo $a1_c5 ?></td>
                <td><?php echo $a2_c5 ?></td>
                <td><?php echo $a3_c5 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table normalisasi -->
        <div class="card-mb-3">
          <div class="card-header">
            Hitung Nilai Si
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">SI</th>
                <th scope="col">Nilai</th>
              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo sprintf("%.2f", $wp_S1) ?></td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo sprintf("%.2f", $wp_S2) ?></td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo sprintf("%.2f", $wp_S3) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table SI -->
        <div class="card-mb-3">
          <div class="card-header">
            Hitung Nilai V
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">V</th>
                <th scope="col">Nilai</th>
              </tr>
              <tr class="text-center">
                <td>V1</td>
                <td><?php echo sprintf("%.2f", $wp_V1) ?></td>
              </tr>
              <tr class="text-center">
                <td>V2</td>
                <td><?php echo sprintf("%.2f", $wp_V2) ?></td>
              </tr>
              <tr class="text-center">
                <td>V3</td>
                <td><?php echo sprintf("%.2f", $wp_V3) ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

</body>

</html>