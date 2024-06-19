@extends('layouts.app')
@section('content')
    <section class="section-content">
        <h1 class="text-center p-4 katalog">Catalog</h1>
        <div class="container">
            @foreach ($jenis as $jenis_produk)
                <header class="section-heading mb-4">
                    <h1 class="text-center section-title">{{ $jenis_produk->name }}</h1>
                </header>
                <div class="row">
                    @foreach ($produk as $barang)
                        @if ($barang->jenis->id === $jenis_produk->id)
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card h-100">
                                    <a href="{{ route('show', ['id' => $barang->id]) }}" class="img-wrap p-2">
                                        <img src="{{ Vite::asset('../storage/app/public/files/' . $barang->encrypted_filename) }}"
                                            class="card-img-top">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $barang->nama_produk }}</h5>
                                        <h5 class="card-text">Rp.{{ $barang->price }}</h5>
                                        <p class="card-text">{{ $barang->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
