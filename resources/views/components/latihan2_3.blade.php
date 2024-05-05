
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <x-navbar/>
    <br>
    <br>

<div class=" container justify-content-center">
    <div class="row mt-5">
        <div class="col">
            <div class="card w-100 w-25 mx-auto">
                <div class="card-header">
                    <h2 class="card-title text-center">Kalkulator Sederhana</h2>
                </div>
                <div class="card-body">
                    <form action="" method="get">
                        <div class="mb-3">
                            <label for="angka1" class="form-label">Nilai 1:</label>
                            <input type="number" class="form-control" name="angka1" id="angka1" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="angka2" class="form-label">Nilai 2:</label>
                            <input type="number" class="form-control" name="angka2" id="angka2" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="operator" class="form-label">Operator:</label>
                            <select class="form-select" name="operator" id="operator">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
                        </div>
                    </form>
                    <div class="text-center mt-3" id="result-container"></div>

                </div>
            </div>
        </div>
    </div>
    <?php
if (isset($_GET['hitung'])) {
    $angka1 = $_GET['angka1'];
    $angka2 = $_GET['angka2'];
    $operator = $_GET['operator'];

    if (!is_numeric($angka1) || !is_numeric($angka2)) {
        echo "Error! Input must be numeric.";
    } else {
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    echo "Error! Pembagian dengan nol tidak dapat dilakukan.";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
        }

        echo "<script>
                document.getElementById('result-container').innerHTML = '<h3>Hasil:</h3><p>$hasil</p>';
              </script>";
    }
}
?>

</div>
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
