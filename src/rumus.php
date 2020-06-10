<?php
// Rumus WP

// Data Bobot WP
$wp_bobot1 = 0.3;
$wp_bobot2 = 0.2;
$wp_bobot3 = 0.2;
$wp_bobot4 = 0.2;
$wp_bobot5 = 0.1;

// Kriteria 1 WP
$a1_c1 = 0.50;
$a1_c2 = 1.00;
$a1_c3 = 1.00;
$a1_c4 = 0.29;
$a1_c5 = 0.75;

// Kriteria 2 WP
$a2_c1 = 1.00;
$a2_c2 = 0.70;
$a2_c3 = 1.00;
$a2_c4 = 1.00;
$a2_c5 = 0.75;

// Kriteria 3 WP
$a3_c1 = 0.75;
$a3_c2 = 0.82;
$a3_c3 = 1.00;
$a3_c4 = 0.50;
$a3_c5 = 0.50;

// Menghitung nilai Si
$wp_S1 = (pow($a1_c1,$wp_bobot1))*(pow($a1_c2,$wp_bobot2)) * (pow($a1_c3,$wp_bobot3)) * (pow($a1_c4,$wp_bobot4)) * (pow($a1_c5,$wp_bobot5));
$wp_S2 = (pow($a2_c1,$wp_bobot1))*(pow($a2_c2,$wp_bobot2)) * (pow($a2_c3,$wp_bobot3)) * (pow($a2_c4,$wp_bobot4)) * (pow($a2_c5,$wp_bobot5));
$wp_S3 = (pow($a3_c1,$wp_bobot1))*(pow($a3_c2,$wp_bobot2)) * (pow($a3_c3,$wp_bobot3)) * (pow($a3_c4,$wp_bobot4)) * (pow($a3_c5,$wp_bobot5));

// Menghitung Nilai V
$jumlah_SI = $wp_S1 + $wp_S2 + $wp_S3;
$wp_V1 = $wp_S1 / $jumlah_SI;
$wp_V2 = $wp_S2 / $jumlah_SI;
$wp_V3 = $wp_S3 / $jumlah_SI;


// Rumus TOPSIS

// Bobot Topsis
$topsis_bobot1 = 30;
$topsis_bobot2 = 25;
$topsis_bobot3 = 20;
$topsis_bobot4 = 25;

// Skor tiap Alternatif (C1)
$c1_a1 = 3;
$c1_a2 = 4;
$c1_a3 = 5;

// Skor tiap Alternatif (C2)
$c2_a1 = 5;
$c2_a2 = 3;
$c2_a3 = 4;

// Skor tiap Alternatif (C3)
$c3_a1 = 3;
$c3_a2 = 2;
$c3_a3 = 5;

// Skor tiap Alternatif (C4)
$c4_a1 = 1;
$c4_a2 = 3;
$c4_a3 = 1;

// Pembobotan skor C1-C3
$skor_c1c3_1 = 1;
$skor_c1c3_2 = 2;
$skor_c1c3_3 = 3;
$skor_c1c3_4 = 4;
$skor_c1c3_5 = 5;

//Pembobotan skor C4
$skor_c4_1 = 1;
$skor_c4_2 = 1;
$skor_c4_3 = 2;

// Normalisasi Alternatif 1
$normalisasi_a1_1 = $c1_a1/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a1_2 = $c2_a1/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a1_3 = $c3_a1/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a1_4 =$c4_a1/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Alternatif 2
$normalisasi_a2_1 = $c1_a2/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a2_2 = $c2_a2/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a2_3 = $c3_a2/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a2_4 = $c4_a2/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Alternatif 3
$normalisasi_a3_1 = $c1_a3/sqrt(pow($c1_a1,2)+pow($c1_a2,2)+pow($c1_a3,2));
$normalisasi_a3_2 = $c2_a3/sqrt(pow($c2_a1,2)+pow($c2_a2,2)+pow($c2_a3,2));
$normalisasi_a3_3 = $c3_a3/sqrt(pow($c3_a1,2)+pow($c3_a2,2)+pow($c3_a3,2));
$normalisasi_a3_4 = $c4_a3/sqrt(pow($c4_a1,2)+pow($c4_a2,2)+pow($c4_a3,2));

// Normalisasi Terbobot Alternatif 1
$bobot_normalisasi_a1_1 = $normalisasi_a1_1 * $topsis_bobot1;
$bobot_normalisasi_a1_2 = $normalisasi_a1_2 * $topsis_bobot2;
$bobot_normalisasi_a1_3 = $normalisasi_a1_3 * $topsis_bobot3;
$bobot_normalisasi_a1_4 = $normalisasi_a1_4 * $topsis_bobot4;

// Normalisasi Terbobot Alternatif 2
$bobot_normalisasi_a2_1 = $normalisasi_a2_1 * $topsis_bobot1;
$bobot_normalisasi_a2_2 = $normalisasi_a2_2 * $topsis_bobot2;
$bobot_normalisasi_a2_3 = $normalisasi_a2_3 * $topsis_bobot3;
$bobot_normalisasi_a2_4 = $normalisasi_a2_4 * $topsis_bobot4;

// Normalisasi Terbobot Alternatif 3
$bobot_normalisasi_a3_1 = $normalisasi_a3_1 * $topsis_bobot1;
$bobot_normalisasi_a3_2 = $normalisasi_a3_2 * $topsis_bobot2;
$bobot_normalisasi_a3_3 = $normalisasi_a3_3 * $topsis_bobot3;
$bobot_normalisasi_a3_4 = $normalisasi_a3_4 * $topsis_bobot4;

// Menghitung Solusi Ideal Positif
$positif_1 = max($bobot_normalisasi_a1_1,$bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1);
$positif_2 = max($bobot_normalisasi_a1_2,$bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2);
$positif_3 = max($bobot_normalisasi_a1_3,$bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3);
$positif_4 = min($bobot_normalisasi_a1_4,$bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4);

// Menghitung Solusi Ideal Negatif
$negatif_1 = min($bobot_normalisasi_a1_1,$bobot_normalisasi_a2_1,$bobot_normalisasi_a3_1);
$negatif_2 = min($bobot_normalisasi_a1_2,$bobot_normalisasi_a2_2,$bobot_normalisasi_a3_2);
$negatif_3 = min($bobot_normalisasi_a1_3,$bobot_normalisasi_a2_3,$bobot_normalisasi_a3_3);
$negatif_4 = max($bobot_normalisasi_a1_4,$bobot_normalisasi_a2_4,$bobot_normalisasi_a3_4);

// Menghitung Jarak Ideal Positif
$ideal_pos_d1 = sqrt(pow(($positif_1-$bobot_normalisasi_a1_1),2)+pow(($positif_2-$bobot_normalisasi_a1_2),2)+pow(($positif_3-$bobot_normalisasi_a1_3),2)+pow(($positif_4-$bobot_normalisasi_a1_4),2));
$ideal_pos_d2 = sqrt(pow(($positif_1-$bobot_normalisasi_a2_1),2)+pow(($positif_2-$bobot_normalisasi_a2_2),2)+pow(($positif_3-$bobot_normalisasi_a2_3),2)+pow(($positif_4-$bobot_normalisasi_a2_4),2));
$ideal_pos_d3 = sqrt(pow(($positif_1-$bobot_normalisasi_a3_1),2)+pow(($positif_2-$bobot_normalisasi_a3_2),2)+pow(($positif_3-$bobot_normalisasi_a3_3),2)+pow(($positif_4-$bobot_normalisasi_a3_4),2)); 

// Menghitung Jarak Ideal Negatif
$ideal_neg_d1 = sqrt(pow(($negatif_1-$bobot_normalisasi_a1_1),2)+pow(($negatif_2-$bobot_normalisasi_a1_2),2)+pow(($negatif_3-$bobot_normalisasi_a1_3),2)+pow(($negatif_4-$bobot_normalisasi_a1_4),2));
$ideal_neg_d2 = sqrt(pow(($negatif_1-$bobot_normalisasi_a2_1),2)+pow(($negatif_2-$bobot_normalisasi_a2_2),2)+pow(($negatif_3-$bobot_normalisasi_a2_3),2)+pow(($negatif_4-$bobot_normalisasi_a2_4),2));
$ideal_neg_d3 = sqrt(pow(($negatif_1-$bobot_normalisasi_a3_1),2)+pow(($negatif_2-$bobot_normalisasi_a3_2),2)+pow(($negatif_3-$bobot_normalisasi_a3_3),2)+pow(($negatif_4-$bobot_normalisasi_a3_4),2));

// Menghitung skor akhir
$nilai_v1 = $ideal_neg_d1/($ideal_neg_d1+$ideal_pos_d1);
$nilai_v2 = $ideal_neg_d2/($ideal_neg_d2+$ideal_pos_d2);
$nilai_v3 = $ideal_neg_d3/($ideal_neg_d3+$ideal_pos_d3);


//  Rumus ELECTRE

// Bobot
$bobot_elec_1 = 3;
$bobot_elec_2 = 2;
$bobot_elec_3 = 2;
$bobot_elec_4 = 2;
$bobot_elec_5 = 1;

// Normalisasi matrix Keputusan alternatif 1
$normal_a1_1 = 2;
$normal_a1_2 = 4;
$normal_a1_3 = 2;
$normal_a1_4 = 3;
$normal_a1_5 = 3;

// Normalisasi matrix Keputusan alternatif 2
$normal_a2_1 = 4;
$normal_a2_2 = 1;
$normal_a2_3 = 5;
$normal_a2_4 = 5;
$normal_a2_5 = 3;

// Normalisasi matrix Keputusan alternatif 3
$normal_a3_1 = 3;
$normal_a3_2 = 2;
$normal_a3_3 = 1;
$normal_a3_4 = 4;
$normal_a3_5 = 4;

// Normalisasi Matrix R A1
$normal_r_a1_1 = $normal_a1_1 / sqrt(pow($normal_a1_1,2)+pow($normal_a2_1,2)+pow($normal_a3_1,2));
$normal_r_a1_2 = $normal_a1_2 / sqrt(pow($normal_a1_2,2)+pow($normal_a2_2,2)+pow($normal_a3_2,2));
$normal_r_a1_3 = $normal_a1_3 / sqrt(pow($normal_a1_3,2)+pow($normal_a2_3,2)+pow($normal_a3_3,2));
$normal_r_a1_4 = $normal_a1_4 / sqrt(pow($normal_a1_4,2)+pow($normal_a2_4,2)+pow($normal_a3_4,2));
$normal_r_a1_5 = $normal_a1_5 / sqrt(pow($normal_a1_5,2)+pow($normal_a2_5,2)+pow($normal_a3_5,2));

// Normalisasi Matrix R A2
$normal_r_a2_1 = $normal_a2_1 / sqrt(pow($normal_a1_1,2)+pow($normal_a2_1,2)+pow($normal_a3_1,2));
$normal_r_a2_2 = $normal_a2_2 / sqrt(pow($normal_a1_2,2)+pow($normal_a2_2,2)+pow($normal_a3_2,2));
$normal_r_a2_3 = $normal_a2_3 / sqrt(pow($normal_a1_3,2)+pow($normal_a2_3,2)+pow($normal_a3_3,2));
$normal_r_a2_4 = $normal_a2_4 / sqrt(pow($normal_a1_4,2)+pow($normal_a2_4,2)+pow($normal_a3_4,2));
$normal_r_a2_5 = $normal_a2_5 / sqrt(pow($normal_a1_5,2)+pow($normal_a2_5,2)+pow($normal_a3_5,2));

// Normalisasi Matrix A3 
$normal_r_a3_1 = $normal_a3_1 / sqrt(pow($normal_a1_1,2)+pow($normal_a2_1,2)+pow($normal_a3_1,2));
$normal_r_a3_2 = $normal_a3_2 / sqrt(pow($normal_a1_2,2)+pow($normal_a2_2,2)+pow($normal_a3_2,2));
$normal_r_a3_3 = $normal_a3_3 / sqrt(pow($normal_a1_3,2)+pow($normal_a2_3,2)+pow($normal_a3_3,2));
$normal_r_a3_4 = $normal_a3_4 / sqrt(pow($normal_a1_4,2)+pow($normal_a2_4,2)+pow($normal_a3_4,2));
$normal_r_a3_5 = $normal_a3_5 / sqrt(pow($normal_a1_5,2)+pow($normal_a2_5,2)+pow($normal_a3_5,2));

// Matrix V Pembobotan A1
$bobot_v1_1 = $normal_r_a1_1 * $bobot_elec_1;
$bobot_v1_2 = $normal_r_a1_2 * $bobot_elec_2;
$bobot_v1_3 = $normal_r_a1_3 * $bobot_elec_3;
$bobot_v1_4 = $normal_r_a1_4 * $bobot_elec_4;
$bobot_v1_5 = $normal_r_a1_5 * $bobot_elec_5;

// Matrix V Pembobotan A2
$bobot_v2_1 = $normal_r_a2_1 * $bobot_elec_1;
$bobot_v2_2 = $normal_r_a2_2 * $bobot_elec_2;
$bobot_v2_3 = $normal_r_a2_3 * $bobot_elec_3;
$bobot_v2_4 = $normal_r_a2_4 * $bobot_elec_4;
$bobot_v2_5 = $normal_r_a2_5 * $bobot_elec_5;

// Matrix V Pembobotan A3
$bobot_v3_1 = $normal_r_a3_1 * $bobot_elec_1;
$bobot_v3_2 = $normal_r_a3_2 * $bobot_elec_2;
$bobot_v3_3 = $normal_r_a3_3 * $bobot_elec_3;
$bobot_v3_4 = $normal_r_a3_4 * $bobot_elec_4;
$bobot_v3_5 = $normal_r_a3_5 * $bobot_elec_5;

// Matrix Concordance C A1
$C_a1_a1 = 0;
$C_a1_a2 = 3;
$C_a1_a3 = 4;

// Matrix Concordance C A2
$C_a2_a1 = 8;
$C_a2_a2 = 0;
$C_a2_a3 = 7;

// Matrix Concordance C A3
$C_a3_a1 = 6;
$C_a3_a2 = 3;
$C_a3_a3 = 0;

$threshold_C = ($C_a1_a1+$C_a1_a2+$C_a1_a3+$C_a2_a1+$C_a2_a2+$C_a2_a3+$C_a3_a1+$C_a3_a2+$C_a3_a3)/(3*(3-1));

// Matrix Decordance D A1
$D_a1_a1 = 0;
$D_a1_a2 = 0.851;
$D_a1_a3 = 0.638;

// Matrix Decordance D A2
$D_a2_a1 = 1;
$D_a2_a2 = 0;
$D_a2_a3 = 0.299;

// Matrix Decordance D A3
$D_a3_a1 = 1;
$D_a3_a2 = 1;
$D_a3_a3 = 0;

$threshold_D = ($D_a1_a1+$D_a1_a2+$D_a1_a3+$D_a2_a1+$D_a2_a2+$D_a2_a3+$D_a3_a1+$D_a3_a2+$D_a3_a3)/(3*(3-1));


// MORA

// bobot Mora
$mora_b_1 = 10;
$mora_b_2 = 5;
$mora_b_3 = 15;
$mora_b_4 = 10;
$mora_b_5 = 8;
$mora_b_6 = 6;
// Matrix Keputusan X A1
$x_a1_1 = 5;
$x_a1_2 = 13000;
$x_a1_3 = 2;
$x_a1_4 = 2;
$x_a1_5 = 1;
$x_a1_6 = 1;

// Matrix Keputusan X A2
$x_a2_1 = 2;
$x_a2_2 = 10000;
$x_a2_3 = 1;
$x_a2_4 = 1;
$x_a2_5 = 0;
$x_a2_6 = 1;

// Matrix Keputusan X A3
$x_a3_1 = 10;
$x_a3_2 = 17000;
$x_a3_3 = 3;
$x_a3_4 = 3;
$x_a3_5 = 0;
$x_a3_6 = 2;

// Matrix Keputusan X A4
$x_a4_1 = 1;
$x_a4_2 = 9000;
$x_a4_3 = 1;
$x_a4_4 = 1;
$x_a4_5 = 1;
$x_a4_6 = 1;

// Matrix Keputusan X A5
$x_a5_1 = 7;
$x_a5_2 = 14000;
$x_a5_3 = 2;
$x_a5_4 = 2;
$x_a5_5 = 0;
$x_a5_6 = 2;

// Matrix Normalisasi C1
$n_a1_1 = $x_a1_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a2_1 = $x_a2_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a3_1 = $x_a3_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a4_1 = $x_a4_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));
$n_a5_1 = $x_a5_1/sqrt(pow($x_a1_1,2)+pow($x_a2_1,2)+pow($x_a3_1,2)+pow($x_a4_1,2)+pow($x_a5_1,2));

// Matrix Normalisasi C2
$n_a1_2 = $x_a1_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a2_2 = $x_a2_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a3_2 = $x_a3_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a4_2 = $x_a4_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));
$n_a5_2 = $x_a5_2/sqrt(pow($x_a1_2,2)+pow($x_a2_2,2)+pow($x_a3_2,2)+pow($x_a4_2,2)+pow($x_a5_2,2));

// Matrix Normalisasi C3
$n_a1_3 = $x_a1_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a2_3 = $x_a2_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a3_3 = $x_a3_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a4_3 = $x_a4_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));
$n_a5_3 = $x_a5_3/sqrt(pow($x_a1_3,2)+pow($x_a2_3,2)+pow($x_a3_3,2)+pow($x_a4_3,2)+pow($x_a5_3,2));

// Matrix Normalisasi C4
$n_a1_4 = $x_a1_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a2_4 = $x_a2_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a3_4 = $x_a3_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a4_4 = $x_a4_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));
$n_a5_4 = $x_a5_4/sqrt(pow($x_a1_4,2)+pow($x_a2_4,2)+pow($x_a3_4,2)+pow($x_a4_4,2)+pow($x_a5_4,2));

// Matrix Normalisasi C5
$n_a1_5 = $x_a1_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a2_5 = $x_a2_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a3_5 = $x_a3_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a4_5 = $x_a4_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));
$n_a5_5 = $x_a5_5/sqrt(pow($x_a1_5,2)+pow($x_a2_5,2)+pow($x_a3_5,2)+pow($x_a4_5,2)+pow($x_a5_5,2));

// Matrix Normalisasi C6
$n_a1_6 = $x_a1_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a2_6 = $x_a2_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a3_6 = $x_a3_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a4_6 = $x_a4_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));
$n_a5_6 = $x_a5_6/sqrt(pow($x_a1_6,2)+pow($x_a2_6,2)+pow($x_a3_6,2)+pow($x_a4_6,2)+pow($x_a5_6,2));

// Matrix Normalisasi Bobot A1
$nb_a1_1 = $n_a1_1 * $mora_b_1;
$nb_a1_2 = $n_a1_2 * $mora_b_2;
$nb_a1_3 = $n_a1_3 * $mora_b_3;
$nb_a1_4 = $n_a1_4 * $mora_b_4;
$nb_a1_5 = $n_a1_5 * $mora_b_5;
$nb_a1_6 = $n_a1_6 * $mora_b_6;

// Matrix Normalisasi Bobot A2
$nb_a2_1 = $n_a2_1 * $mora_b_1;
$nb_a2_2 = $n_a2_2 * $mora_b_2;
$nb_a2_3 = $n_a2_3 * $mora_b_3;
$nb_a2_4 = $n_a2_4 * $mora_b_4;
$nb_a2_5 = $n_a2_5 * $mora_b_5;
$nb_a2_6 = $n_a2_6 * $mora_b_6;

// Matrix Normalisasi Bobot A3
$nb_a3_1 = $n_a3_1 * $mora_b_1;
$nb_a3_2 = $n_a3_2 * $mora_b_2;
$nb_a3_3 = $n_a3_3 * $mora_b_3;
$nb_a3_4 = $n_a3_4 * $mora_b_4;
$nb_a3_5 = $n_a3_5 * $mora_b_5;
$nb_a3_6 = $n_a3_6 * $mora_b_6;

// Matrix Normalisasi Bobot A4
$nb_a4_1 = $n_a4_1 * $mora_b_1;
$nb_a4_2 = $n_a4_2 * $mora_b_2;
$nb_a4_3 = $n_a4_3 * $mora_b_3;
$nb_a4_4 = $n_a4_4 * $mora_b_4;
$nb_a4_5 = $n_a4_5 * $mora_b_5;
$nb_a4_6 = $n_a4_6 * $mora_b_6;

// Matrix Normalisasi Bobot A5
$nb_a5_1 = $n_a5_1 * $mora_b_1;
$nb_a5_2 = $n_a5_2 * $mora_b_2;
$nb_a5_3 = $n_a5_3 * $mora_b_3;
$nb_a5_4 = $n_a5_4 * $mora_b_4;
$nb_a5_5 = $n_a5_5 * $mora_b_5;
$nb_a5_6 = $n_a5_6 * $mora_b_6;

// menghitung nilai Yi

// Nilai Max
$max_a1 = $nb_a1_3 + $nb_a1_4 + $nb_a1_5 + $nb_a1_6;
$max_a2 = $nb_a2_3 + $nb_a2_4 + $nb_a2_5 + $nb_a2_6;
$max_a3 = $nb_a3_3 + $nb_a3_4 + $nb_a3_5 + $nb_a3_6;
$max_a4 = $nb_a4_3 + $nb_a4_4 + $nb_a4_5 + $nb_a4_6;
$max_a5 = $nb_a5_3 + $nb_a5_4 + $nb_a5_5 + $nb_a5_6;

// Nilai Min
$min_a1 = $nb_a1_1 + $nb_a1_2;
$min_a2 = $nb_a2_1 + $nb_a2_2;
$min_a3 = $nb_a3_1 + $nb_a3_2;
$min_a4 = $nb_a4_1 + $nb_a4_2;
$min_a5 = $nb_a5_1 + $nb_a5_2;

// nilai YI
$yi_a1 = $max_a1 - $min_a1;
$yi_a2 = $max_a2 - $min_a2;
$yi_a3 = $max_a3 - $min_a3;
$yi_a4 = $max_a4 - $min_a4;
$yi_a5 = $max_a5 - $min_a5;
?>