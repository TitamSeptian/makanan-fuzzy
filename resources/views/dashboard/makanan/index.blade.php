@extends('dashboard.master', [$title = "- Makanan", $active = "makanan"]);
@push('css')
    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/select.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/modal.css">
@endpush
@push('js')
    <script src="js/default-assets/jquery.datatables.min.js"></script>
    <script src="js/default-assets/datatables.bootstrap4.js"></script>
    <script src="js/default-assets/datatable-responsive.min.js"></script>
    <script src="js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="js/default-assets/datatable-button.min.js"></script>
    <script src="js/default-assets/button.bootstrap4.min.js"></script>
    <script src="js/default-assets/button.html5.min.js"></script>
    <script src="js/default-assets/button.flash.min.js"></script>
    <script src="js/default-assets/button.print.min.js"></script>
    <script src="js/default-assets/datatables.keytable.min.js"></script>
    <script src="js/default-assets/datatables.select.min.js"></script>
    <script src="js/default-assets/modal-classes.js"></script>
    <script src="js/default-assets/modaleffects.js"></script>
    <script src="food.js"></script>
    <script>
        $(document).ready(function() {
            "use strict";
            $("#basic-datatable").DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                destroy: true,
                "info": false,
                ajax: "{{ route('food.data') }}",
                columns: [{
                        data: "nama",
                        name: "nama"
                    },
                    {
                        data: "jenis",
                        name: "jenis"
                    },
                    {
                        data: "harga",
                        name: "harga"
                    },
                    {
                        data: "mood",
                        name: "mood"
                    },
                    {
                        data: "rasa_pedas",
                        name: "rasa_pedas"
                    },
                    {
                        data: "rasa_manis",
                        name: "rasa_manis"
                    },
                ],
                keys: !0,
                language: {
                    paginate: {
                        previous: "<i class='arrow_carrot-left'>",
                        next: "<i class='arrow_carrot-right'>",
                    },
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass(
                        "pagination-rounded"
                    );
                },
            });
        });
    </script>
@endpush
@section('content')
    @include('modal')
    <div class="row">
        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">List Makanan</h4>
                    {{-- <p class="text-muted font-14 mb-4">
                        DataTables has most features enabled by default, so all you need to do to use it with your own
                        tables is to call the construction
                        function:
                        <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on any table. Events
                        (focus, blur, action etc) can be assigned to individual
                        cells, columns, rows or all cells.
                    </p> --}}
                    <button class="btn btn-primary float-right" id="btn-create" data-url="{{ route('food.create') }}">+
                        Tambah</button>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Makanan</th>
                                <th>Harga</th>
                                <th>Jenis</th>
                                <th>Tingkat Mood</th>
                                <th>Tingkat Pedas</th>
                                <th>Tingkat Manis</th>
                            </tr>
                        </thead>

                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
@endsection
