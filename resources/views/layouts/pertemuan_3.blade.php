<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">



</head>

<body>

    <x-navbar />
    <div class="container mt-xl-5 ">
        <br>
        <br>
        <br>
    </div>
    <div class="container bg-light rounded text-center p-3 shadow-sm ">
        <h1>Pertemuan 3</h1>
    </div>
    <div class="card m-4 mt-5 w-75 w-md-100 mx-auto ">
        <div class="card-body">
            <h4 class="card-title">Pertemuan 3</h4>
            <p>Latihan :

            <div class="container justify-content-center btn-expand">
                <a href="/pertemuan/3/1" class="btn btn-primary m-2 ">Latihan 1</a>
                <a href="/pertemuan/3/2" class="btn btn-primary m-2 ">Latihan 2</a>
                <a href="/pertemuan/3/3" class="btn btn-primary m-2 ">Tugas 3</a>
            </div>
        </div>
    </div>



    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>