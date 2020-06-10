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

    <a class="navbar-brand mr-1" href="index.html">TOPSIS Methods</a>

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
            Skor Setiap Alternatif
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>Sepatu 1</th>
                <th>Sepatu 2</th>
                <th>Sepatu 3</th>
              </tr>
              <tr class="text-center">
                <td>C1</td>
                <td><?php echo $c1_a1 ?></td>
                <td><?php echo $c1_a2 ?></td>
                <td><?php echo $c1_a3 ?></td>
              </tr>
              <tr class="text-center">
                <td>C2</td>
                <td><?php echo $c2_a1 ?></td>
                <td><?php echo $c2_a2 ?></td>
                <td><?php echo $c2_a3 ?></td>
              </tr>
              <tr class="text-center">
                <td>C3</td>
                <td><?php echo $c3_a1 ?></td>
                <td><?php echo $c3_a2 ?></td>
                <td><?php echo $c3_a3 ?></td>
              </tr>
              <tr class="text-center">
                <td>C4</td>
                <td><?php echo $c4_a1 ?></td>
                <td><?php echo $c4_a2 ?></td>
                <td><?php echo $c4_a3 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table alternatif -->
        <div class="card-mb-3">
          <div class="card-header">
            Pembobotan Skor Kriteria C1,C2,C3
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center">
                <td>Sangat Kurang</td>
                <td><?php echo $skor_c1c3_1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Kurang</td>
                <td><?php echo $skor_c1c3_2 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sedang</td>
                <td><?php echo $skor_c1c3_3 ?></td>
              </tr>
              <tr class="text-center">
                <td>Baik</td>
                <td><?php echo $skor_c1c3_4 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sangat Baik</td>
                <td><?php echo $skor_c1c3_5 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table Pembobotan C1-C3 -->
        <div class="card-mb-3">
          <div class="card-header">
            Pembobotan Skor Kriteria C4
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">Kriteria</th>
                <th scope="col">Nilai</th>
              </tr>
              <tr class="text-center">
                <td>Sangat Kurang</td>
                <td><?php echo $topsis_bobot1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Kurang</td>
                <td><?php echo $topsis_bobot1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sedang</td>
                <td><?php echo $topsis_bobot1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Baik</td>
                <td><?php echo $topsis_bobot1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sangat Baik</td>
                <td><?php echo $skor_c1c3_5 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end tabe pembobotan C4 -->
        <div class="card-mb-3">
          <div class="card-header">
            Pembobotan Skor Kriteria C1-C4
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">Kriteria</th>
                <th scope="col">Nilai</th>
              </tr>
              <tr class="text-center">
                <td>Sangat Kurang</td>
                <td><?php echo $topsis_bobot1 ?></td>
              </tr>
              <tr class="text-center">
                <td>Kurang</td>
                <td><?php echo $topsis_bobot2 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sedang</td>
                <td><?php echo $topsis_bobot3 ?></td>
              </tr>
              <tr class="text-center">
                <td>Sedang</td>
                <td><?php echo $topsis_bobot4 ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end tabe pembobotan C1-C4 -->
        <div class="card-mb-3">
          <div class="card-header">
            Langkah 1 : Normalisasi
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>Sepatu 1</th>
                <th>Sepatu 2</th>
                <th>Sepatu 3</th>
              </tr>
              <tr class="text-center">
                <td>C1</td>
                <td><?php echo sprintf("%.3f", $normalisasi_a1_1) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a2_1) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a3_1) ?></td>
              </tr>
              <tr class="text-center">
                <td>C2</td>
                <td><?php echo sprintf("%.3f", $normalisasi_a1_2) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a2_2) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a3_2) ?></td>
              </tr>
              <tr class="text-center">
                <td>C3</td>
                <td><?php echo sprintf("%.3f", $normalisasi_a1_3) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a2_3) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a3_3) ?></td>
              </tr>
              <tr class="text-center">
                <td>C4</td>
                <td><?php echo sprintf("%.3f", $normalisasi_a1_4) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a2_4) ?></td>
                <td><?php echo sprintf("%.3f", $normalisasi_a3_4) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table normalisasi -->
        <div class="card-mb-3">
          <div class="card-header">
            Langkah 2 : Normalisasi Terbobot
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th></th>
                <th>Sepatu 1</th>
                <th>Sepatu 2</th>
                <th>Sepatu 3</th>
              </tr>
              <tr class="text-center">
                <td>C1</td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_1) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_1) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_1) ?></td>
              </tr>
              <tr class="text-center">
                <td>C2</td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_2) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_2) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_2) ?></td>
              </tr>
              <tr class="text-center">
                <td>C3</td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_3) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_3) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_3) ?></td>
              </tr>
              <tr class="text-center">
                <td>C4</td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a1_4) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a2_4) ?></td>
                <td><?php echo sprintf("%.3f", $bobot_normalisasi_a3_4) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end table normalisasi terbobot -->
        <div class="card-mb-3">
          <div class="card-header">
            Langkah 3 : Menentukan Solusi Ideal Positif & Negatif
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">Kriteria</th>
                <th scope="col">Ideal Positif</th>
                <th scope="col">Ideal Negatif</th>
              </tr>
              <tr class="text-center">
                <td>C1</td>
                <td><?php echo sprintf("%.3f", max(
                      $bobot_normalisasi_a1_1,
                      $bobot_normalisasi_a2_1,
                      $bobot_normalisasi_a3_1
                    )) ?></td>
                <td><?php echo sprintf("%.3f", min(
                      $bobot_normalisasi_a1_1,
                      $bobot_normalisasi_a2_1,
                      $bobot_normalisasi_a3_1
                    )) ?></td>
              </tr>
              <tr class="text-center">
                <td>C2</td>
                <td><?php echo sprintf("%.3f", max(
                      $bobot_normalisasi_a1_2,
                      $bobot_normalisasi_a2_2,
                      $bobot_normalisasi_a3_2
                    )) ?></td>
                <td><?php echo sprintf("%.3f", min(
                      $bobot_normalisasi_a1_2,
                      $bobot_normalisasi_a2_2,
                      $bobot_normalisasi_a3_2
                    )) ?></td>
              </tr>
              <tr class="text-center">
                <td>C3</td>
                <td><?php echo sprintf("%.3f", max(
                      $bobot_normalisasi_a1_3,
                      $bobot_normalisasi_a2_3,
                      $bobot_normalisasi_a3_3
                    )) ?></td>
                <td><?php echo sprintf("%.3f", min(
                      $bobot_normalisasi_a1_3,
                      $bobot_normalisasi_a2_3,
                      $bobot_normalisasi_a3_3
                    )) ?></td>
              </tr>
              <tr class="text-center">
                <td>C4</td>
                <td><?php echo sprintf("%.3f", min(
                      $bobot_normalisasi_a1_4,
                      $bobot_normalisasi_a2_4,
                      $bobot_normalisasi_a3_4
                    )) ?></td>
                <td><?php echo sprintf("%.3f", max(
                      $bobot_normalisasi_a1_4,
                      $bobot_normalisasi_a2_4,
                      $bobot_normalisasi_a3_4
                    )) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end tabe pembobotan solusi ideal -->
        <div class="card-mb-3">
          <div class="card-header">
            Langkah 4 : Menentukan Jarak Ideal Positif & Negatif
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">Kriteria</th>
                <th scope="col">Jarak Ideal Positif</th>
                <th scope="col">Jarak Ideal Negatif</th>
              </tr>
              <tr class="text-center">
                <td>D1</td>
                <td><?php echo sprintf("%.3f", $ideal_pos_d1) ?></td>
                <td><?php echo sprintf("%.3f", $ideal_neg_d1) ?></td>
              </tr>
              <tr class="text-center">
                <td>D2</td>
                <td><?php echo sprintf("%.3f", $ideal_pos_d2) ?></td>
                <td><?php echo sprintf("%.3f", $ideal_neg_d2) ?></td>
              </tr>
              <tr class="text-center">
                <td>D3</td>
                <td><?php echo sprintf("%.3f", $ideal_pos_d3) ?></td>
                <td><?php echo sprintf("%.3f", $ideal_neg_d3) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end tabel jarak ideal positif & negatif -->
        <div class="card-mb-3">
          <div class="card-header">
            Langkah 5 : Menghitung Skor Akhir
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <tr class="text-center bg-warning">
                <th scope="col">V</th>
                <th scope="col">Nilai Akhir</th>
              </tr>
              <tr class="text-center">
                <td>V1</td>
                <td><?php echo sprintf("%.3f", $nilai_v1) ?></td>
              </tr>
              <tr class="text-center">
                <td>V2</td>
                <td><?php echo sprintf("%.3f", $nilai_v2) ?></td>
              </tr>
              <tr class="text-center">
                <td>V3</td>
                <td><?php echo sprintf("%.3f", $nilai_v3) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- end tabel Hitung V-->
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