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
