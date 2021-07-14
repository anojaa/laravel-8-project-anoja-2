<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike | Register</title>

    <!-- link my css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                        <a href="{{ url('beranda') }}"><button class="btn btn-warning mr-2">Logout</button></a>
                    </li>
                </ul>
                <!--  Navbar Smartphone -->
                <ul class="navbar-nav">
                    <li class="nav-item d-md-none d-sm-block mt-2 text-right">
                        <a href="{{ url('beranda') }}"><button class="btn btn-warning mt-1">Logout</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- box register deskstop-->
    <div class="container mb-5 d-none d-lg-block">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-dark mb-0">
                        <h4 class="text-center text-light">Register Page</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}"method="post">
                            <label>
                                <h6>
                                    Email:
                                </h6>
                            </label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control">
                            </div>
                            <label>
                                <h6>
                                    Username:
                                </h6>
                            </label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control">
                            </div>
                            <label>
                                <h6>
                                    Password:
                                </h6>
                            </label>
                            <div class="form-group">
                                <input type="text" name="" class="form-control">
                            </div>
                            <label>
                                <h6>
                                    Confirm Password:
                                </h6>
                            </label>
                            <div class="form-group mb-5">
                                <input type="text" name="" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- box register hp 5 inch-->
    <div class="d-none d-sm-block d-md-none">
        <div class="container mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-dark mb-0">
                            <h4 class="text-center text-light">Register Page</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}"method="post">
                                <label>
                                    <h6>
                                        Email:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Username:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Password:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Confirm Password:
                                    </h6>
                                </label>
                                <div class="form-group mb-5">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- box register tablet-->
    <div class="d-none d-md-block d-lg-none">
        <div class="container mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-dark mb-0">
                            <h4 class="text-center text-light">Register Page</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}"method="post">
                                <label>
                                    <h6>
                                        Email:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Username:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Password:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Confirm Password:
                                    </h6>
                                </label>
                                <div class="form-group mb-5">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- box register hp < 5 inch-->
    <div class="d-block d-sm-none">
        <div class="container mb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header bg-dark mb-0">
                            <h4 class="text-center text-light">Register Page</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}"method="post">
                                <label>
                                    <h6>
                                        Email:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Username:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Password:
                                    </h6>
                                </label>
                                <div class="form-group">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <label>
                                    <h6>
                                        Confirm Password:
                                    </h6>
                                </label>
                                <div class="form-group mb-5">
                                    <input type="text" name="" class="form-control">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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