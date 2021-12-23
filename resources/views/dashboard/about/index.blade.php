@extends('dashboard.master', [$title = "- About", $active = "teams"]);
@push('css')
    <!-- These plugins only need for the run this page -->

    @push('js')

    @endpush
    @section('content')
        <div class="row">
            <div class="col-md-3">
                <div class="single-product-item mb-30">
                    <div class="product-card">
                        <a class="thumb-xl mb-2 rounded-circle" href="#"><img src="{{ asset('img/about-img/septian.png') }}"
                                alt="Septian"></a>
                        <!-- Product -->
                        <h3 class="product font-17 mb-15 mt-20">Septian Dwi Putra Pradipta</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="product-price mb-0 mt-0">Web Developer</h4>
                            <div class="div">
                                <div class="badge badge-success badge-pill">RPL 3B</div>
                            </div>
                        </div>
                        {{-- <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p> --}}

                        {{-- <div class="product-buttons">
                            <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-product-item mb-30">
                    <div class="product-card">
                        <a class="thumb-xl mb-2 rounded-circle" href="#"><img src="{{ asset('img/about-img/nika.png') }}"
                                alt="Septian"></a>
                        <!-- Product -->
                        <h3 class="product font-17 mb-15 mt-20">Nika Qisty Fatharani</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="product-price mb-0 mt-0">Document Team</h4>
                            <div class="div">
                                <div class="badge badge-success badge-pill">RPL 3B</div>
                            </div>
                        </div>
                        {{-- <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p> --}}

                        {{-- <div class="product-buttons">
                            <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-product-item mb-30">
                    <div class="product-card">
                        <a class="thumb-xl mb-2 rounded-circle" href="#"><img src="{{ asset('img/about-img/reyhan.png') }}"
                                alt="Septian"></a>
                        <!-- Product -->
                        <h3 class="product font-17 mb-15 mt-20">Reyhan Agus Priatna</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="product-price mb-0 mt-0">Document Team</h4>
                            <div class="div">
                                <div class="badge badge-success badge-pill">RPL 3B</div>
                            </div>
                        </div>
                        {{-- <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p> --}}

                        {{-- <div class="product-buttons">
                            <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-product-item mb-30">
                    <div class="product-card">
                        <a class="thumb-xl mb-2 rounded-circle" href="#"><img src="{{ asset('img/about-img/nikita.png') }}"
                                alt="Septian"></a>
                        <!-- Product -->
                        <h3 class="product font-17 mb-15 mt-20">Nikita Sabila</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="product-price mb-0 mt-0">Data Team</h4>
                            <div class="div">
                                <div class="badge badge-success badge-pill">RPL 3B</div>
                            </div>
                        </div>
                        {{-- <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p> --}}

                        {{-- <div class="product-buttons">
                            <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-product-item mb-30">
                    <div class="product-card">
                        <a class="thumb-xl mb-2 rounded-circle" href="#"><img src="{{ asset('img/about-img/reihan.png') }}"
                                alt="Septian"></a>
                        <!-- Product -->
                        <h3 class="product font-17 mb-15 mt-20">Reihan Manzis Syahputra</h3>
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="product-price mb-0 mt-0">Data Team</h4>
                            <div class="div">
                                <div class="badge badge-success badge-pill">RPL 3B</div>
                            </div>
                        </div>
                        {{-- <p class="mt-15 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, mollitia?</p> --}}

                        {{-- <div class="product-buttons">
                            <a class="btn btn-rounded btn-light mt-30" href="#">Add to Cart</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
