<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike | Beranda</title>

    <!-- link booststrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav class="navbar bg-dark navbar-expand-md fixed-top">
            <a class="navbar-brand font-weight-light" href="{{ url('beranda') }}"><img src="img/logoo.png" alt="" width="50px"
                    class="left"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon">
                    <img src="img/toggle.svg">
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapse_target">
                <!-- Tablet Dekstop -->
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-md-block d-sm-none">
                        <a href="{{ url('register') }}"><button class="btn btn-success mr-2">Register</button></a>
                    </li>
                    <li class="nav-item d-none d-md-block d-sm-none">
                        <a href="{{ url('login') }}"><button class="btn btn-info">Login</button></a>
                    </li>
                </ul>
                <!-- Smartphone -->
                <ul class="navbar-nav">
                    <li class="nav-item d-md-none d-sm-block mt-2 text-right">
                        <a href="{{ url('register') }}"><button class="btn btn-success mt-1">Register</button></a>
                    </li>
                    <li class="nav-item d-md-none d-sm-block mt-2 text-right">
                        <a href="{{ url('login') }}"><button class="btn btn-info">Login</button></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 img-fluid d-none d-md-block d-sm-none" src="./img/carousel.jpeg" height="501px"
                    alt="First slide">
                <img class="w-100 img-fluid d-md-none d-sm-block mt-5" src="./img/carousel.jpeg" height="120px"
                    alt="First slide">
            </div>
        </div>
        <!-- akhir carousel -->
    </div>

    <!-- ​content deskstop -->
    <div class="container mt-5 d-none d-lg-block">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <img src="./img/sepatu1.jpg" class="w-55 img-fluid">
            </div>
            <div class="col-md-6 my-auto">
                <h5 class="font-weight-bold">Sepatu Terbaru Nike Ini Dirancang untuk Mencegah Cedera</h5>
                <p class="mt-4">Bantalan empuk dan daya pental tinggi dari seri Lunar ideal untuk Anda yang berlari
                    jarak menengah hingga jauh</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <div class="container mt-5 d-none d-lg-block">
        <div class="row justify-content-center">
            <div class="col-md-6 my-auto">
                <h5 class="font-weight-bold">Pesan Desain Sepatu Khusus Untuk Kaki Anda Sendiri</h5>
                <p class="mt-4">Mampu meredam guncangan dengan baik, seri Air Max cocok untuk Anda yang pemula</p>
                <p>Sensasi menapak seolah tanpa alas kaki, gunakanlah seri Free</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
            <div class="col-md-4 text-center">
                <img src="./img/sepatu2.jpg" class="w-55 img-fluid">
            </div>
        </div>
    </div>
    <!-- akhir content deskstop -->

    <!-- ​content hp 5 inch -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-5 d-none d-sm-block d-md-none">
                <img src="./img/sepatu1.jpg" class="w-50">
            </div>
            <div class="col-md-6 my-auto d-none d-sm-block d-md-none">
                <h5 class="font-weight-bold">Sepatu Terbaru Nike Ini Dirancang untuk Mencegah Cedera</h5>
                <p class="mt-4">Bantalan empuk dan daya pental tinggi dari seri Lunar ideal untuk Anda yang berlari
                    jarak menengah hingga jauh</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-5 d-none d-sm-block d-md-none">
                <img src="./img/sepatu2.jpg" class="w-50">
            </div>
            <div class="col-md-6 my-auto d-none d-sm-block d-md-none">
                <h5 class="font-weight-bold">Pesan Desain Sepatu Khusus Untuk Kaki Anda Sendiri</h5>
                <p class="mt-4">Mampu meredam guncangan dengan baik, seri Air Max cocok untuk Anda yang pemula</p>
                <p>Sensasi menapak seolah tanpa alas kaki, gunakanlah seri Free</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <!-- akhir content hp 5 inch -->

    <!-- ​content tablet -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center d-none d-md-block d-lg-none">
                <img src="./img/sepatu1.jpg" class="w-55 img-fluid">
            </div>
            <div class="col-md-6 d-none d-md-block d-lg-none">
                <h5 class="font-weight-bold">Sepatu Terbaru Nike Ini Dirancang untuk Mencegah Cedera</h5>
                <p class="mt-4">Bantalan empuk dan daya pental tinggi dari seri Lunar ideal untuk Anda yang berlari
                    jarak menengah hingga jauh</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 my-auto d-none d-md-block d-lg-none">
                <h5 class="font-weight-bold">Pesan Desain Sepatu Khusus Untuk Kaki Anda Sendiri</h5>
                <p class="mt-4">Mampu meredam guncangan dengan baik, seri Air Max cocok untuk Anda yang pemula</p>
                <p>Sensasi menapak seolah tanpa alas kaki, gunakanlah seri Free</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
            <div class="col-md-4 text-center d-none d-md-block d-lg-none">
                <img src="./img/sepatu2.jpg" class="w-55 img-fluid">
            </div>
        </div>
    </div>
    <!-- akhir content tablet -->

    <!-- ​content hp < 5 inch -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-5 d-block d-sm-none">
                <img src="./img/sepatu1.jpg" class="w-50 img-fluid">
            </div>
            <div class="col-md-6 my-auto d-block d-sm-none">
                <h5 class="font-weight-bold">Sepatu Terbaru Nike Ini Dirancang untuk Mencegah Cedera</h5>
                <p class="mt-4">Bantalan empuk dan daya pental tinggi dari seri Lunar ideal untuk Anda yang berlari
                    jarak menengah hingga jauh</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-5 d-block d-sm-none">
                <img src="./img/sepatu2.jpg" class="w-50 img-fluid">
            </div>
            <div class="col-md-6 my-auto d-none d-block d-sm-none">
                <h5 class="font-weight-bold">Pesan Desain Sepatu Khusus Untuk Kaki Anda Sendiri</h5>
                <p class="mt-4">Mampu meredam guncangan dengan baik, seri Air Max cocok untuk Anda yang pemula</p>
                <p>Sensasi menapak seolah tanpa alas kaki, gunakanlah seri Free</p>
                <button type="button" class="btn btn-primary mt-3">Lihat Selengkapnya!</button>
            </div>
        </div>
    </div>
    <!-- akhir content hp < 5 inch -->

    <!-- cards -->
    <div class="d-flex flex-wrap justify-content-center">
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="./img/card1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nike Zoom Fly SP Fast Unisex</h5>
                <p class="card-text">Sepatu lari ini akan mendorong kaki terus berlari berkat desain bantalan sol
                    tengah dari bahan nilon yang dipenuhi bahan karbot.</p>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-warning">Beli Sekarang!</button>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="./img/card2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nike Air VaporMax Flyknit 2</h5>
                <p class="card-text">Sepatu lari seri Air VaporMax ini dirancang bersama teknologi yang menjadikan
                    bantalannya memberikan kenyamanan pada seluruh tapak kaki.</p>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-warning">Beli Sekarang!</button>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="./img/card3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nike LunarEpic Flyknit Shield</h5>
                <p class="card-text">Sepatu Nike LunarEpic Flyknit satu ini dihadirkan dengan fitur shield yang
                    antiair.</p>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-warning">Beli Sekarang!</button>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="./img/card4.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nike Epic React Flyknit</h5>
                <p class="card-text"> Sepatu ini kami rekomendasikan untuk Anda yang ingin berlatih maraton untuk
                    perlombaan.</p>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-warning">Beli Sekarang!</button>
                </div>
            </div>
        </div>
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="./img/card5.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nike Air Zoom Wildhorse 4
                </h5>
                <p class="card-text">Sepatu ini dapat dipakai pada medan yang tidak rata. Terbuat dari lapisan
                    tekstil dan mesh pada uppernya.</p>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-warning">Beli Sekarang!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir cards -->

    <!-- footer -->
    <div class="card-body d-flex justify-content-center bg-dark">
        <blockquote class="blockquote mb-0">
            <footer class="blockquote-footer">Copyright-2021<cite title="Source Title">.</cite>
            </footer>
        </blockquote>
    </div>
    <!-- akhir footer -->
</body>

</html>