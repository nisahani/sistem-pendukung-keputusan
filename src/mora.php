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

    <a class="navbar-brand mr-1" href="index.html">MOORA Methods</a>

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
            Matrix Keputusan (X)
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo $x_a1_1 ?></td>
                <td><?php echo $x_a1_2 ?></td>
                <td><?php echo $x_a1_3 ?></td>
                <td><?php echo $x_a1_4 ?></td>
                <td><?php echo $x_a1_5 ?></td>
                <td><?php echo $x_a1_6 ?></td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo $x_a2_1 ?></td>
                <td><?php echo $x_a2_2 ?></td>
                <td><?php echo $x_a2_3 ?></td>
                <td><?php echo $x_a2_4 ?></td>
                <td><?php echo $x_a2_5 ?></td>
                <td><?php echo $x_a2_6 ?></td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo $x_a3_1 ?></td>
                <td><?php echo $x_a3_2 ?></td>
                <td><?php echo $x_a3_3 ?></td>
                <td><?php echo $x_a3_4 ?></td>
                <td><?php echo $x_a3_5 ?></td>
                <td><?php echo $x_a3_6 ?></td>
              </tr>
              <tr class="text-center">
                <td>A4</td>
                <td><?php echo $x_a4_1 ?></td>
                <td><?php echo $x_a4_2 ?></td>
                <td><?php echo $x_a4_3 ?></td>
                <td><?php echo $x_a4_4 ?></td>
                <td><?php echo $x_a4_5 ?></td>
                <td><?php echo $x_a4_6 ?></td>
              </tr>
              <tr class="text-center">
                <td>A5</td>
                <td><?php echo $x_a5_1 ?></td>
                <td><?php echo $x_a5_2 ?></td>
                <td><?php echo $x_a5_3 ?></td>
                <td><?php echo $x_a5_4 ?></td>
                <td><?php echo $x_a5_5 ?></td>
                <td><?php echo $x_a5_6 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table Matrix Keputusan (X) -->
        <div class="card-mb-3">
          <div class="card-header">
            Matrix Normalisasi
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo sprintf("%.3f", $n_a1_1) ?></td>
                <td><?php echo sprintf("%.3f", $n_a1_2) ?></td>
                <td><?php echo sprintf("%.3f", $n_a1_3) ?></td>
                <td><?php echo sprintf("%.3f", $n_a1_4) ?></td>
                <td><?php echo sprintf("%.3f", $n_a1_5) ?></td>
                <td><?php echo sprintf("%.3f", $n_a1_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo sprintf("%.3f", $n_a2_1) ?></td>
                <td><?php echo sprintf("%.3f", $n_a2_2) ?></td>
                <td><?php echo sprintf("%.3f", $n_a2_3) ?></td>
                <td><?php echo sprintf("%.3f", $n_a2_4) ?></td>
                <td><?php echo sprintf("%.3f", $n_a2_5) ?></td>
                <td><?php echo sprintf("%.3f", $n_a2_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo sprintf("%.3f", $n_a3_1) ?></td>
                <td><?php echo sprintf("%.3f", $n_a3_2) ?></td>
                <td><?php echo sprintf("%.3f", $n_a3_3) ?></td>
                <td><?php echo sprintf("%.3f", $n_a3_4) ?></td>
                <td><?php echo sprintf("%.3f", $n_a3_5) ?></td>
                <td><?php echo sprintf("%.3f", $n_a3_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A4</td>
                <td><?php echo sprintf("%.3f", $n_a4_1) ?></td>
                <td><?php echo sprintf("%.3f", $n_a4_2) ?></td>
                <td><?php echo sprintf("%.3f", $n_a4_3) ?></td>
                <td><?php echo sprintf("%.3f", $n_a4_4) ?></td>
                <td><?php echo sprintf("%.3f", $n_a4_5) ?></td>
                <td><?php echo sprintf("%.3f", $n_a4_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A5</td>
                <td><?php echo sprintf("%.3f", $n_a5_1) ?></td>
                <td><?php echo sprintf("%.3f", $n_a5_2) ?></td>
                <td><?php echo sprintf("%.3f", $n_a5_3) ?></td>
                <td><?php echo sprintf("%.3f", $n_a5_4) ?></td>
                <td><?php echo sprintf("%.3f", $n_a5_5) ?></td>
                <td><?php echo sprintf("%.3f", $n_a5_6) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table Matrix Normalisasi -->
        <div class="card-mb-3">
          <div class="card-header">
            Matrix Normalisasi Bobot
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th>Bobot</th>
                <th><?php echo $mora_b_1 ?></th>
                <th><?php echo $mora_b_2 ?></th>
                <th><?php echo $mora_b_3 ?></th>
                <th><?php echo $mora_b_4 ?></th>
                <th><?php echo $mora_b_5 ?></th>
                <th><?php echo $mora_b_6 ?></th>
              </tr>
              <tr class="text-center">
                <th></th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>C6</th>
              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo sprintf("%.3f", $nb_a1_1) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a1_2) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a1_3) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a1_4) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a1_5) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a1_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo sprintf("%.3f", $nb_a2_1) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a2_2) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a2_3) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a2_4) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a2_5) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a2_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo sprintf("%.3f", $nb_a3_1) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a3_2) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a3_3) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a3_4) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a3_5) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a3_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A4</td>
                <td><?php echo sprintf("%.3f", $nb_a4_1) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a4_2) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a4_3) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a4_4) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a4_5) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a4_6) ?></td>
              </tr>
              <tr class="text-center">
                <td>A5</td>
                <td><?php echo sprintf("%.3f", $nb_a5_1) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a5_2) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a5_3) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a5_4) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a5_5) ?></td>
                <td><?php echo sprintf("%.3f", $nb_a5_6) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table Matrix Normalisasi Bobot -->
        <div class="card-mb-3">
          <div class="card-header">
            Menghitung Nilai YI
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>MAX</th>
                <th>MIN</th>
                <th>YI</th>
                <th>Rangking</th>

              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo sprintf("%.3f", $max_a1) ?></td>
                <td><?php echo sprintf("%.3f", $min_a1) ?></td>
                <td><?php echo sprintf("%.3f", $yi_a1) ?></td>
                <td>1</td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo sprintf("%.3f", $max_a2) ?></td>
                <td><?php echo sprintf("%.3f", $min_a2) ?></td>
                <td><?php echo sprintf("%.3f", $yi_a2) ?></td>
                <td>5</td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo sprintf("%.3f", $max_a3) ?></td>
                <td><?php echo sprintf("%.3f", $min_a3) ?></td>
                <td><?php echo sprintf("%.3f", $yi_a3) ?></td>
                <td>3</td>
              </tr>
              <tr class="text-center">
                <td>A4</td>
                <td><?php echo sprintf("%.3f", $max_a4) ?></td>
                <td><?php echo sprintf("%.3f", $min_a4) ?></td>
                <td><?php echo sprintf("%.3f", $yi_a4) ?></td>
                <td>2</td>
              </tr>
              <tr class="text-center">
                <td>A5</td>
                <td><?php echo sprintf("%.3f", $max_a5) ?></td>
                <td><?php echo sprintf("%.3f", $min_a5) ?></td>
                <td><?php echo sprintf("%.3f", $yi_a5) ?></td>
                <td>4</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table Menghitung Nilai YI -->
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