<table class="table table-bordered table-hover mb-0 datatable" id="produkTable">
    <thead>
        <tr class="text-white"style="background-color: #9E7676">
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
                <td>{{ $index + 1 }}</td>
                <td>{{ $produk->kode_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>Rp.{{ number_format($produk->price) }}</td>
                <td>{{ $produk->jenis->name }}</td>
                <td>{{ $produk->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
