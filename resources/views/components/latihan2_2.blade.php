<?php
// inisiasi variable yang digunakan
//nama peralatan

$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "Flashdisk";
$brg4 = "Pulpen";

//harga per unit peralatan

$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

//jumlah peralatan yang ada

$jmlbrg1 = 2;
$jmlbrg2 = 5;
$jmlbrg3 = 1;
$jmlbrg4 = 3;
//total harga per jenis peralatan

$th1 = $jmlbrg1 * $harga1;
$th2 = $jmlbrg2 * $harga2;
$th3 = $jmlbrg3 * $harga3;
$th4 = $jmlbrg4 * $harga4;

//hitung grand total nilai peralatan
$tharga = $th1 + $th2 + $th3 + $th4;

//besar diskon

$diskon = 5;

//jumlah total diskon yang diberikan

$tdiskon = ($diskon * $tharga) / 100;

//jumlah yang harus di bayar

$tdibayar = $tharga - $tdiskon;
?>

<html>

<head>
    <title>Daftar Peralatan Yang Dibeli</title>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet">
</head>

<body>
    <x-navbar/>
    <br>
    <div class="mt-5 container">
        <h2 class="text-sm-center mt-4 mb-5 ">Contoh Perhitungan dengan PHP</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="4" class="text-sm-center">Daftar Pemesanan Peralatan Kantor</th>
                    </tr>
                    <tr>
                        <th>Nama Peralatan</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="left"><?php echo $brg1; ?></td>
                        <td align="right"><?php echo $jmlbrg1; ?></td>
                        <td align="right"><?php echo $harga1; ?></td>
                        <td align="right"><?php echo $th1; ?></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo $brg2; ?></td>
                        <td align="right"><?php echo $jmlbrg2; ?></td>
                        <td align="right"><?php echo $harga2; ?></td>
                        <td align="right"><?php echo $th2; ?></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo $brg3; ?></td>
                        <td align="right"><?php echo $jmlbrg3; ?></td>
                        <td align="right"><?php echo $harga3; ?></td>
                        <td align="right"><?php echo $th3; ?></td>
                    </tr>
                    <tr>
                        <td align="left"><?php echo $brg4; ?></td>
                        <td align="right"><?php echo $jmlbrg4; ?></td>
                        <td align="right"><?php echo $harga4; ?></td>
                        <td align="right"><?php echo $th4; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Total Harga</td>
                        <td align="right"><?php echo $tharga; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">
                            Diskon <?php echo "( $diskon % )"; ?></td>
                        <td align="right"><?php echo $tdiskon; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Jumlah harus dibayar</td>
                        <td align="right"><?php echo $tdibayar; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>