<?php
//Matrix Perbandingan Kriteria

//C1
$c1_c1 = 1;
$c1_c2 = 2;
$c1_c3 = "1/6";

//C2
$c2_c1 = "1/2";
$c2_c2 = 1;
$c2_c3 = "1/9";

//C3
$c3_c1 = 6;
$c3_c2 = 9;
$c3_c3 = 1;


//Data Normalisasi
$c1_c1_n = 1;
$c1_c2_n = 2;
$c1_c3_n = 1 / 6;

//C2
$c2_c1_n = 1 / 2;
$c2_c2_n = 1;
$c2_c3_n = 1 / 9;

//C3
$c3_c1_n = 6;
$c3_c2_n = 9;
$c3_c3_n = 1;

//total 
$j_c1 = $c1_c1_n + $c2_c1_n + $c3_c1_n;
$j_c2 = $c1_c2_n + $c2_c2_n + $c3_c2_n;
$j_c3 = $c1_c3_n + $c2_c3_n + $c3_c3_n;


//data table hitung pw
//column C1
$c1_c1_pw = $c1_c1_n / $j_c1;
$c1_c2_pw = $c1_c2_n / $j_c2;
$c1_c3_pw = $c1_c3_n / $j_c3;
$jumlah_pw_c1 = $c1_c1_pw + $c1_c2_pw + $c1_c3_pw;
$pw_c1 = $jumlah_pw_c1 / 3;

//column c2
$c2_c1_pw = $c2_c1_n / $j_c1;
$c2_c2_pw = $c2_c2_n / $j_c2;
$c2_c3_pw = $c2_c3_n / $j_c3;
$jumlah_pw_c2 = $c2_c1_pw + $c2_c2_pw + $c2_c3_pw;
$pw_c2 = $jumlah_pw_c2 / 3;

//column c3
$c3_c1_pw = $c3_c1_n / $j_c1;
$c3_c2_pw = $c3_c2_n / $j_c2;
$c3_c3_pw = $c3_c3_n / $j_c3;
$jumlah_pw_c3 = $c3_c1_pw + $c3_c2_pw + $c3_c3_pw;
$pw_c3 = $jumlah_pw_c3 / 3;


//consisten ratio C1
$c1_cr = ($c1_c1_n * $pw_c1) + ($c1_c2_n * $pw_c2) + ($c1_c3_n * $pw_c3);

//consisten ratio C2
$c2_cr = ($c2_c1_n * $pw_c1) + ($c2_c2_n * $pw_c2) + ($c2_c3_n * $pw_c3);

//consisten ratio C3
$c3_cr = ($c3_c1_n * $pw_c1) + ($c3_c2_n * $pw_c2) + ($c3_c3_n * $pw_c3);


// membagi perhitungan di atas dengan PW
$p_cr_c1 = $c1_cr / $pw_c1;
$p_cr_c2 = $c2_cr / $pw_c2;
$p_cr_c3 = $c3_cr / $pw_c3;


//perhitungan lamda max,ci,cr
$lamda_max = ($p_cr_c1 + $p_cr_c2 + $p_cr_c3) / 3;
$CI = ($lamda_max - 3) / (3 - 1);
$CR = $CI / 0.58;
//KRITERIA SELESAI//

//Matrix Perbadingan Alternatif Kriteria 1

//A1
$a1_a1 = 1;
$a1_a2 = 2;
$a1_a3 = 4;

//A2
$a2_a1 = "1/2";
$a2_a2 = 1;
$a2_a3 = 5;

//A3
$a3_a1 = "1/4";
$a3_a2 = "1/6";
$a3_a3 = 1;

//Menghitung bobot prioritas
//A1
$a1_a1_n = 1;
$a1_a2_n = 2;
$a1_a3_n = 4;

//A2
$a2_a1_n = 1 / 2;
$a2_a2_n = 1;
$a2_a3_n = 5;

//A3
$a3_a1_n = 1 / 4;
$a3_a2_n = 1 / 6;
$a3_a3_n = 1;
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

        <a class="navbar-brand mr-1" href="index.html">GDSS Methods</a>

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
        <!-- Table matrix Kriteria -->
        <div class="container">
            <div class="container-fluid">
                <div class="card-mb-3">
                    <div class="card-header text-center">
                        Table Perbandingan Matrix
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center bg-warning">
                                <td></td>
                                <th scope="col">Harga Sewa</th>
                                <th scope="col">Jarak</th>
                                <th scope="col">Fasilitas</th>
                            </tr>
                            <tr class="text-center">
                                <th>Harga Sewa</th>
                                <td><?php echo $c1_c1 ?></td>
                                <td><?php echo $c1_c2 ?></td>
                                <td><?php echo $c1_c3 ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jarak</th>
                                <td><?php echo $c2_c1 ?></td>
                                <td><?php echo $c2_c2 ?></td>
                                <td><?php echo $c2_c3 ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Fasilitas</th>
                                <td><?php echo $c3_c1 ?></td>
                                <td><?php echo $c3_c2 ?></td>
                                <td><?php echo $c3_c3 ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-mb-3">
                    <div class="card-header text-center">
                        Menghitung bobot prioritas
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center bg-warning">
                                <td></td>
                                <th scope="col">Harga Sewa</th>
                                <th scope="col">Jarak</th>
                                <th scope="col">Fasilitas</th>
                            </tr>
                            <tr class="text-center">
                                <th>Harga Sewa</th>
                                <td><?php echo sprintf("%.2f", $c1_c1_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c1_c2_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c1_c3_n); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jarak</th>
                                <td><?php echo sprintf("%.2f", $c2_c1_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c2_c2_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c2_c3_n); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Fasilitas</th>
                                <td><?php echo sprintf("%.2f", $c3_c1_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c3_c2_n); ?></td>
                                <td><?php echo sprintf("%.2f", $c3_c3_n); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jumlah</th>
                                <td><?php echo sprintf("%.2f", $j_c1); ?></td>
                                <td><?php echo sprintf("%.2f", $j_c2); ?></td>
                                <td><?php echo sprintf("%.2f", $j_c3); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-mb-3">
                    <div class="card-header text-center">
                        Menghitung bobot prioritas
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center bg-warning">
                                <td></td>
                                <th scope="col">Harga Sewa</th>
                                <th scope="col">Jarak</th>
                                <th scope="col">Fasilitas</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">PW</th>
                            </tr>
                            <tr class="text-center">
                                <th>Harga Sewa</th>
                                <td><?php echo sprintf("%.2f", $c1_c1_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c1_c2_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c1_c3_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $jumlah_pw_c1); ?></td>
                                <td><?php echo sprintf("%.2f", $pw_c1); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jarak</th>
                                <td><?php echo sprintf("%.2f", $c2_c1_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c2_c2_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c2_c3_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $jumlah_pw_c2); ?></td>
                                <td><?php echo sprintf("%.2f", $pw_c2); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Fasilitas</th>
                                <td><?php echo sprintf("%.2f", $c3_c1_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c3_c2_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $c3_c3_pw); ?></td>
                                <td><?php echo sprintf("%.2f", $jumlah_pw_c3); ?></td>
                                <td><?php echo sprintf("%.2f", $pw_c3); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-mb-3">
                    <div class="card-header text-center bg-warning">
                        Menghitung Consisten Ratio
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center">
                                <th>Harga Sewa</th>
                                <td><?php echo sprintf("%.2f", $c1_cr); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jarak</th>
                                <td><?php echo sprintf("%.2f", $c2_cr); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Fasilitas</th>
                                <td><?php echo sprintf("%.2f", $c3_cr); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-mb-3">
                    <div class="card-header text-center bg-warning">
                        Membagi perhitungan di atas dengan PW
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center">
                                <th>Harga Sewa</th>
                                <td><?php echo sprintf("%.2f", $p_cr_c1); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Jarak</th>
                                <td><?php echo sprintf("%.2f", $p_cr_c2); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Fasilitas</th>
                                <td><?php echo sprintf("%.2f", $p_cr_c3); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-mb-3">
                    <div class="card-header text-center bg-warning">
                        Membagi Lamda Max,CI,CR
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center">
                                <th>Lamda Max</th>
                                <td><?php echo sprintf("%.2f", $lamda_max); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>CI</th>
                                <td><?php echo sprintf("%.2f", $CI); ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>CR</th>
                                <td><?php echo sprintf("%.2f", $CR); ?></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <br>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr class="text-center bg-warning">
                                <td>Harga Sewa</td>
                                <th scope="col">Championsa</th>
                                <th scope="col">Zona SM</th>
                                <th scope="col">Angkasa</th>
                            </tr>
                            <tr class="text-center">
                                <th>Championsa</th>
                                <td><?php echo $a1_a1 ?></td>
                                <td><?php echo $a1_a2 ?></td>
                                <td><?php echo $a1_a3 ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Zona SM</th>
                                <td><?php echo $a2_a1 ?></td>
                                <td><?php echo $a2_a2 ?></td>
                                <td><?php echo $a2_a3 ?></td>
                            </tr>
                            <tr class="text-center">
                                <th>Angkasa</th>
                                <td><?php echo $a3_a1 ?></td>
                                <td><?php echo $a3_a2 ?></td>
                                <td><?php echo $a3_a3 ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- end table Matrix Dominan Discordance G -->
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