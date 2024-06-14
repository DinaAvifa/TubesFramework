@extends('layouts.app')

@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <!-- Product Details -->
            <div class="p-5 bg-light rounded-3 col-xl-8 border">
                <div class="mb-3 text-center">
                    <img class="img-fluid bg-app rounded" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image"
                        style="width: 100px;">
                    <br>
                    <br>
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kodeProduk" class="form-label">Kode Produk</label>
                        <h5 class="form_control">{{ $produk->kode_produk }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="namaProduk" class="form-label">Nama Produk</label>
                        <h5 class="form_control">{{ $produk->nama_produk }}</h5>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="hargaProduk" class="form-label">Harga Produk</label>
                        <h5 class="form_control">Rp.{{ $produk->price }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                        <h5 class="form_control">{{ $produk->description }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('home') }}" class="btn btn-outline-danger btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Back
                        </a>
                    </div>
                </div>
            </div>
            <!-- Product Image -->
            <div class="col-xl-4 ">
                <div class="p-5 bg-light rounded-3 border">
                    <img src="{{ Vite::asset('storage/app/public/files/' . $produk->encrypted_filename) }}"
                        class="img-fluid rounded">
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="whatsapp://send?phone=6285234793561&text=Halo%2C%20saya%20ingin%20membuat%20pesanan%20{{ $produk->nama_produk }}%20dengan%20kode%20produk%20{{ $produk->kode_produk }}%20dengan%20harga%20Rp.{{ $produk->price }}.%0A%0A*Beri%20keterangan%20atau%20pesan%20tambahan%20disini*%0A%0ATerima%20kasih.&app_absent=0"
                                target="_blank" class="btn btn-outline-success btn-lg mt-3">
                                <i class="bi bi-whatsapp me-2"></i> Order Sekarang
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
