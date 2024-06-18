<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>

<body>
    <h1>Daftar Produk</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>Kode produk</th>
                <th>Nama produk</th>
                <th>Harga produk</th>
                <th>Jenis produk</th>
                <th>Deskripsi produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $produk)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td>{{ $produk->kode_produk }}</td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td align="center">Rp.{{ number_format($produk->price) }}</td>
                    <td>{{ $produk->jenis->name }}</td>
                    <td>{{ $produk->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
