<!-- Mirrored from demo.riktheme.com/xvito/side-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 07:11:13 GMT -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required meta tags -->

    <title>Sistem Rekomendasi Makanan</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="img/core-img/favicon.png"> --}}
    {{-- @stack('css') --}}
    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="my-style.css">
    <link rel="icon" type="image/png" href="{{ asset('logo-sirekan.png') }}" />
</head>

<body class="">
    <nav class="navbar navbar-expand-lg fixed-top bg-orange">
        <!-- <img src="./assets/img/logo-hima-polos.png" class="navbar-brand logo-navbar"> -->
        <a href="index.html" class="navbar-brand text-uppercase font-weight-bold">
            <img src="{{ asset('logo-sirekan.png') }}" width="30" height="30">
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Home</a></li>
                <li class="nav-item "><a href="#" class="nav-link text-uppercase font-weight-bold">Rekomendasi</a>
                </li>
                <li class="nav-item "><a href="#" class="nav-link text-uppercase font-weight-bold">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid bg-image">
        <div class="d-flex flex-column justify-content-center vh-100 w-50 ">
            <h1 class="display-1 font-weight-bold"><span class="text-color-1">SI</span>REKAN</h1>
            <p class="h5">Sistem Rekomendasi Makanan</p>
            <div class="black-line my   -3"></div>
            <p>Aplikasi ini dibuat untuk menentukan makanan apa yang diinginkan berdasarkan Mood, Jenis, Pedas Manis dan
                Harga.
            </p>
            <div class="btn btn-color-1 w-25">Info Selengkapnya</div>
        </div>
    </div>
    <div class="container">
        <div class="form-makanan py-2 text-center">
            <h3 class="font-weight-bold">Bagaimana Mood kamu ?</h3>
            <div class="d-flex justify-content-center align-items-center">

                <label>
                    <input type="radio" class="custom-radio" name="mood" />
                    <div class="box">
                        <span>Sedih</span>
                    </div>
                </label>

                <label class="mx-2">
                    <input type="radio" class="custom-radio" name="mood" />
                    <div class="box">
                        <span>Biasa aja</span>
                    </div>
                </label>
                <label>
                    <input type="radio" class="custom-radio" name="mood" />
                    <div class="box">
                        <span>Senang</span>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-makanan py-2 text-center">
            <h3 class="font-weight-bold">Berkuah atau tidak</h3>
            <div class="d-flex justify-content-center align-items-center">

                <label>
                    <input type="radio" class="custom-radio" name="kuah" />
                    <div class="box">
                        <span>Tidak</span>
                    </div>
                </label>

                <label class="mx-2">
                    <input type="radio" class="custom-radio" name="kuah" />
                    <div class="box">
                        <span>Kuah</span>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-makanan py-2 text-center">
            <h3 class="font-weight-bold">Pedesnya ?</h3>
            <div class="d-flex justify-content-center align-items-center">

                <label>
                    <input type="radio" class="custom-radio" name="pedas" />
                    <div class="box">
                        <span>Tidak Pedas</span>
                    </div>
                </label>

                <label class="mx-2">
                    <input type="radio" class="custom-radio" name="pedas" />
                    <div class="box">
                        <span>Sedang</span>
                    </div>
                </label>
                <label>
                    <input type="radio" class="custom-radio" name="pedas" />
                    <div class="box">
                        <span>Pedas</span>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-makanan py-2 text-center">
            <h3 class="font-weight-bold">Manisnya ?</h3>
            <div class="d-flex justify-content-center align-items-center">

                <label>
                    <input type="radio" class="custom-radio" name="manis" />
                    <div class="box">
                        <span>Tidak Manis</span>
                    </div>
                </label>

                <label class="mx-2">
                    <input type="radio" class="custom-radio" name="manis" />
                    <div class="box">
                        <span>Sedang</span>
                    </div>
                </label>
                <label>
                    <input type="radio" class="custom-radio" name="manis" />
                    <div class="box">
                        <span>Manis</span>
                    </div>
                </label>
            </div>
        </div>
        <div class="form-makanan py-2 text-center">
            <h3 class="font-weight-bold">Budget ?</h3>
            <div class="d-flex justify-content-center align-items-center">

                <label>
                    <input type="radio" class="custom-radio" name="harga" />
                    <div class="box">
                        <span>Murah</span>
                    </div>
                </label>

                <label class="mx-2">
                    <input type="radio" class="custom-radio" name="harga" />
                    <div class="box">
                        <span>Sedang</span>
                    </div>
                </label>
                <label>
                    <input type="radio" class="custom-radio" name="harga" />
                    <div class="box">
                        <span>Mahal</span>
                    </div>
                </label>
            </div>
        </div>
        <button class="btn btn-color-1 btn-rounded text-center btn-block">Cari Rekomendasi</button>
    </div>
    <footer class="text-center mt-5 mb-2">
        <span>Copyright Sukses Team - 3B</span>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
