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
                                Budget
                            </h6>

                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                $2500
                            </span>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <img src="img/bg-img/icon-8.png" alt="">
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
                                Total Hours
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark mb-0">
                                663.5
                            </span>
                        </div>
                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <img src="img/bg-img/icon-9.png" alt="">
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
                                Progress
                            </h6>
                            <div class="row align-items-center no-gutters">
                                <div class="col-auto">
                                    <!-- Heading -->
                                    <span class="font-24 text-dark mr-2">
                                        84.5%
                                    </span>
                                </div>
                                <div class="col">
                                    <!-- Progress -->
                                    <div class="progress h-5">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <img src="img/bg-img/icon-10.png" alt="">
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
                                Cost/Unit
                            </h6>
                            <!-- Heading -->
                            <span class="font-24 text-dark">
                                $7.50
                            </span>
                        </div>
                        <div class="col-auto">
                            <!-- Icon -->
                            <div class="icon">
                                <img src="img/bg-img/icon-11.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
