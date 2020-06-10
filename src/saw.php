<?php
$bc1 = 30;
$bc2 = 20;
$bc3 = 20;
$bc4 = 20;
$bc5 = 10;
// Kriteria A1
$c1a1 = 2;
$c2a1 = 7000000;
$c3a1 = 2012;
$c4a1 = 7;
$c5a1 = 3;
// Kriteria A2
$c1a2 = 4;
$c2a2 = 10000000;
$c3a2 = 2015;
$c4a2 = 2;
$c5a2 = 3;
// Kriteria A3
$c1a3 = 3;
$c2a3 = 8500000;
$c3a3 = 2010;
$c4a3 = 4;
$c5a3 = 4;
$c11 = $bc1 / 100;
$c21 = $bc2 / 100;
$c31 = $bc3 / 100;
$c41 = $bc4 / 100;
$c51 = $bc5 / 100;

$a11 = $c1a1 / $c1a2 * $c11;
$a21 = $c1a2 / $c1a2 * $c11;
$a31 = $c1a3 / $c1a2 * $c11;

$a12 = $c2a1 / $c2a1 * $c21;
$a22 = $c2a1 / $c2a2 * $c21;
$a32 = $c2a1 / $c2a3 * $c21;

$a13 = $c3a1 / $c3a2 * $c31;
$a23 = $c3a2 / $c3a2 * $c31;
$a33 = $c3a3 / $c3a2 * $c31;

$a14 = $c4a2 / $c4a1 * $c41;
$a24 = $c4a2 / $c4a2 * $c41;
$a34 = $c4a2 / $c4a3 * $c41;

$a15 = $c5a1 / $c5a3 * $c51;
$a25 = $c5a2 / $c5a3 * $c51;
$a35 = $c5a3 / $c5a3 * $c51;

// Nilai Alternatif
$a1_al = $a11 + $a12 + $a13 + $a14 + $a15;
$a2_al = $a21 + $a22 + $a23 + $a24 + $a25;
$a3_al = $a31 + $a32 + $a33 + $a34 + $a35;
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

    <a class="navbar-brand mr-1" href="index.html">SAW Methods</a>

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
            Table Nilai Alternatif
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th>Bobot %</th>
                <th>Nama Kriteria</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
                <th>Jenis Atribut</th>
              </tr>
              <tr class="text-center">
                <td><?php echo $bc1 ?></td>
                <td>C1</td>
                <td><?php echo $c1a1 ?></td>
                <td><?php echo $c1a2 ?></td>
                <td><?php echo $c1a3 ?></td>
                <td>Benefit</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $bc2 ?></td>
                <td>C2</td>
                <td>Rp <?php echo $c2a1 ?></td>
                <td>Rp <?php echo $c2a2 ?></td>
                <td>Rp <?php echo $c2a3 ?></td>
                <td>Cost</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $bc3 ?></td>
                <td>C3</td>
                <td><?php echo $c3a1 ?></td>
                <td><?php echo $c3a2 ?></td>
                <td><?php echo $c3a3 ?></td>
                <td>Benefit</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $bc4 ?></td>
                <td>C4</td>
                <td><?php echo $c4a1 ?></td>
                <td><?php echo $c4a2 ?></td>
                <td><?php echo $c4a3 ?></td>
                <td>Cost</td>
              </tr>
              <tr class="text-center">
                <td><?php echo $bc5 ?></td>
                <td>C5</td>
                <td><?php echo $c5a1 ?></td>
                <td><?php echo $c5a2 ?></td>
                <td><?php echo $c5a3 ?></td>
                <td>Benefit</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="card-mb-3">
          <div class="card-header">
            Table Normalisasi Bobot
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th>Bobot %</th>
                <th>Nama Kriteria</th>
                <th>A1</th>
                <th>A2</th>
                <th>A3</th>
              </tr>
              <tr class="text-center">
                <td><?php echo $c11 ?></td>
                <td>C1</td>
                <td><?php echo sprintf("%.2f", $a11) ?></td>
                <td><?php echo sprintf("%.2f", $a21) ?></td>
                <td><?php echo sprintf("%.2f", $a31) ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $c21 ?></td>
                <td>C2</td>
                <td><?php echo sprintf("%.2f", $a12) ?></td>
                <td><?php echo sprintf("%.2f", $a22) ?></td>
                <td><?php echo sprintf("%.2f", $a32) ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $c31 ?></td>
                <td>C3</td>
                <td><?php echo sprintf("%.2f", $a13) ?></td>
                <td><?php echo sprintf("%.2f", $a23) ?></td>
                <td><?php echo sprintf("%.2f", $a33) ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $c41 ?></td>
                <td>C4</td>
                <td><?php echo sprintf("%.2f", $a14) ?></td>
                <td><?php echo sprintf("%.2f", $a24) ?></td>
                <td><?php echo sprintf("%.2f", $a34) ?></td>
              </tr>
              <tr class="text-center">
                <td><?php echo $c51 ?></td>
                <td>C5</td>
                <td><?php echo sprintf("%.2f", $a15) ?></td>
                <td><?php echo sprintf("%.2f", $a25) ?></td>
                <td><?php echo sprintf("%.2f", $a35) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table2 -->
        <div class="card-mb-3">
          <div class="card-header">
            Hitung Nilai Alternatif
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="bg-warning text-center">
                <th scope="col">Alternatif</th>
                <th scope="col">Nilai</th>
              </tr>
              <tr class="text-center">
                <td>A1</td>
                <td><?php echo sprintf("%.2f", $a1_al) ?></td>
              </tr>
              <tr class="text-center">
                <td>A2</td>
                <td><?php echo sprintf("%.2f", $a2_al) ?></td>
              </tr>
              <tr class="text-center">
                <td>A3</td>
                <td><?php echo sprintf("%.2f", $a3_al) ?></td>
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