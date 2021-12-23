@extends('dashboard.master', [$title = "- Dashboard", $active = "dashboard"]);
@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="text-uppercase font-14">
                                Total Makanan
                            </h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ count(\App\Models\Makanan::all()) }}
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <h5>Jenis Makanan</h5>
    <div class="row">

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Kuah
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        {{ count(\App\Models\Makanan::where('jenis', 'kuah')->get()) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Tidak Kuah
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                {{ count(\App\Models\Makanan::where('jenis', 'tidak')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>Mood Makanan</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Sedih
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ count(\App\Models\Makanan::where('f_mood', 'sedih')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Normal
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        {{ count(\App\Models\Makanan::where('f_mood', 'normal')->get()) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Senang
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                {{ count(\App\Models\Makanan::where('f_mood', 'senang')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>Makanan Manis</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Tidak Manis
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ count(\App\Models\Makanan::where('f_manis', 'tidak')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Normal
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        {{ count(\App\Models\Makanan::where('f_manis', 'normal')->get()) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Manis
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                {{ count(\App\Models\Makanan::where('f_manis', 'manis')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>Makanan Pedas</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Tidak Pedas
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ count(\App\Models\Makanan::where('f_pedas', 'tidak')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Normal
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        {{ count(\App\Models\Makanan::where('f_pedas', 'normal')->get()) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Pedas
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                {{ count(\App\Models\Makanan::where('f_pedas', 'pedas')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5>Harga Makanan</h5>
    <div class="row">
        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Murah
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                {{ count(\App\Models\Makanan::where('f_harga', 'murah')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Normal
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        {{ count(\App\Models\Makanan::where('f_harga', 'normal')->get()) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl">
            <!-- Card -->
            <div class="card box-margin">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Title -->
                            <h6 class="font-14 text-uppercase">
                                Mahal
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                {{ count(\App\Models\Makanan::where('f_harga', 'mahal')->get()) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
