$(function () {
    $("#produkTable").DataTable({
        serverSide: true,
        processing: true,
        ajax: "/getProduk",
        columns: [
            { data: "id", name: "id", visible: false },
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
                orderable: false,
                searchable: false,
            },
            { data: "kode_produk", name: "kode_produk" },
            { data: "nama_produk", name: "nama_produk" },
            { data: "price", name: "price" },
            { data: "jenis.name", name: "jenis.name" },
            { data: "description", name: "description" },
            {
                data: "action",
                name: "action",
                orderable: false,
                searchable: false,
            },
        ],
        order: [[0, "desc"]],
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"],
        ],
    });
    $(".datatable").on("click", ".btn-delete", function (e) {
        e.preventDefault();

        var form = $(this).closest("form");
        var name = $(this).data("name");

        Swal.fire({
            title: "Apakah anda yakin untuk menghapus\n" + name + "?",
            text: "Anda tidak bisa mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonClass: "bg-primary",
            confirmButtonText: "Iya!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
