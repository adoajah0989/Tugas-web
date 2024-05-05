<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh penggunaan IF</title>
    <!-- Bootstrap CSS -->
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet">
    <style>
        /* Optional: Tambahkan style CSS tambahan di sini */
        body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <x-navbar/>
    <div class="container">
        <h1 class="text-center mt-5">Contoh Penggunaan IF dengan Diskon</h1>
        <form class="mt-4" method="GET">
            <div class="form-group">
                <label for="total_beli">Besar Pembelian:</label>
                <input type="number" class="form-control" id="total_beli" name="total_beli" placeholder="Masukkan jumlah pembelian" required>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Tentukan Diskon</button>
        </form>

        <?php
        if (isset($_GET['total_beli'])) {
            $total_beli = intval($_GET['total_beli']);
            $diskon = 0;
            if ($total_beli >= 200000)
                $diskon = 0.1;
            else if ($total_beli >= 100000)
                $diskon = 0.05;
            else
                $diskon = 0.01;

            $diskon = $diskon * intval($total_beli);
            printf('<div class="mt-4">');
            printf('<p class="mb-1">Diskon: Rp %s</p>', number_format($diskon, 0, ',', '.'));
            printf('<p>Pembayaran: RP %s</p>', number_format($total_beli - $diskon, 0, ',', '.'));
            printf('</div>');
        }
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
