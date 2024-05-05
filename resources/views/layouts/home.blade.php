<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <x-navbar/>
    <!-- Content -->


    <div class="container1 m-4 flex-column justify-content-around">
        <br>
        <br>
        
        <h1>Halo. Nama saya Nurmansyah</h1>

        <br>
        <div class="card shadow-sm  ">

            <div class="card-body">
                <h4 class="card-title">ini adalah daftar tugas pada setiap pertemuan</h4>
                <p>tugas :

                <div class="container justify-content-center btn-expand">
                    <a href="/pertemuan/2" class="btn btn-primary m-2 ">pertemuan 2</a>
                    <a href="/pertemuan/3" class="btn btn-primary m-2 ">pertemuan 3</a>
                    <a href="" class="btn btn-primary m-2 ">pertemuan 4</a>
                    <a href="" class="btn btn-primary m-2 ">pertemuan 5</a>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>