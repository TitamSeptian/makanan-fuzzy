$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("body").on("click", "#btn-create", function (e) {
    e.preventDefault();
    $("#myModal").modal("show");
});
