    <div class="d-flex">
        <div>
            <a href="{{ route('produk.edit', ['produk' => $produk->id]) }}"class="btn btn-outline-warning btn-sm me-2">
                <i class="bi-pencil-square"></i>
            </a>
        </div>
        <div>
            <form action="{{ route('produk.destroy', ['produk' => $produk->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 btn-delete"
                    data-name="{{ $produk->kode_produk . ' ' . $produk->nama_produk }}">
                    <i class="bi-trash"></i>
                </button>
            </form>
        </div>
    </div>
