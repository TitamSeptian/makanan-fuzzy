$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("body").on("click", "#btn-create", function (e) {
    e.preventDefault();
    const url = $(this).data("url");
    const title = $(this).data("title");
    $.ajax({
        url: url,
        dataType: "html",
        success: (res) => {
            $("#modal-title").html(title);
            $("#modal-body").html(res);
            $("#myModal").modal("show");
        },
    });
});

$("body").on("submit", "#form-create", function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    const data = $(this).serialize();
    $(this).find(":input[type=submit]").prop("disabled", true);

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: (res) => {
            alert(res.msg);
            $(this).find(":input[type=submit]").prop("disabled", false);
            $("#basic-datatable").DataTable().ajax.reload();
            $("#myModal").modal("hide");
        },
        error: (xhr) => {
            alert("terjadi Kesalahan");
            $(this).find(":input[type=submit]").prop("disabled", false);
            $("#myModal").modal("hide");
        },
    });
});

$("body").on("submit", "#form-recommendation", function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    const data = $(this).serialize();
    $(this).find(":input[type=submit]").prop("disabled", true);

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: (res) => {
            // console.log(res.data);
            $("#res-wrap").html("");
            $.each(res.data, function (key, val) {
                // console.log(val);
                $("#res-wrap").append(`
                    <div class="col-md-3">
                        <div class="res-card">
                            <h3 id="nama">${val.nama}</h3>
                            <p id="harga">Rp. ${val.harga}</p>
                            <p id="fires">Fire Strength : ${res.fires[key]}</p>
                        </div>
                    </div>
                `);
            });
            // alert(res.msg);
            $(this).find(":input[type=submit]").prop("disabled", false);
        },
        error: (xhr) => {
            $("#res-wrap").html("");

            let errros = xhr.responseJSON; // console.log(xhr);
            if (xhr.status == 500) {
                alert("terjadi Kesalahan");
            }

            if (xhr.status == 404) {
                alert(errros.msg);
            }

            $(this).find(":input[type=submit]").prop("disabled", false);
        },
    });
});

$("body").on("click", ".btn-show", function (e) {
    e.preventDefault();
    const url = $(this).attr("href");
    const title = $(this).data("title");
    $.ajax({
        url: url,
        dataType: "html",
        success: (res) => {
            $("#modal-title").html(title);
            $("#modal-body").html(res);
            $("#myModal").modal("show");
        },
    });
});

$("body").on("click", ".btn-edit", function (e) {
    e.preventDefault();
    // alert("Please");
    const url = $(this).attr("href");
    const title = $(this).data("title");
    $.ajax({
        url: url,
        dataType: "html",
        success: (res) => {
            $("#modal-title").html(title);
            $("#modal-body").html(res);
            $("#myModal").modal("show");
        },
    });
});

$("body").on("submit", "#form-update", function (e) {
    e.preventDefault();
    const url = $(this).attr("action");
    const data = $(this).serialize();
    $(this).find(":input[type=submit]").prop("disabled", true);

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: (res) => {
            alert(res.msg);
            $(this).find(":input[type=submit]").prop("disabled", false);
            $("#basic-datatable").DataTable().ajax.reload();
            $("#myModal").modal("hide");
        },
        error: (xhr) => {
            alert("terjadi Kesalahan");
            $(this).find(":input[type=submit]").prop("disabled", false);
            $("#myModal").modal("hide");
        },
    });
});

$("body").on("click", ".btn-delete", function (e) {
    e.preventDefault();
    // alert("Please");
    // alert("asdasd");
    const url = $(this).attr("href");
    // $(this).find(":input[type=submit]").prop("disabled", true);
    if (confirm("Yakin akan di hapus ?")) {
        $.ajax({
            type: "POST",
            url: url,
            data: {
                _method: "DELETE",
            },
            success: (res) => {
                alert(res.msg);
                // $(this).find(":input[type=submit]").prop("disabled", false);
                $("#basic-datatable").DataTable().ajax.reload();
                $("#myModal").modal("hide");
            },
            error: (xhr) => {
                alert("terjadi Kesalahan");
                // $(this).find(":input[type=submit]").prop("disabled", false);
                $("#myModal").modal("hide");
            },
        });
    } else {
        alert("Dibatalkan");
    }
});

$(document).ready(function () {
    var body = $("body");
    var sto = $("#rec");
    var position = sto.offset().top - body.offset().top + body.scrollTop();

    $("#nav-rec").click(function () {
        $("html, body").animate(
            {
                scrollTop: position - 60,
            },
            800,
            function () {
                $(window).scrollTop(position - 60);
            }
        );
    });
});
