@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('produk.update', ['produk' => $produk->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <img class="img-fluid bg-app rounded"
                            src="{{ Vite::asset('resources/images/logo.png') }}"alt="image" style="width: 100px;">
                        </i>
                        </i>
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeProduk" class="form-label">Kode Produk</label>
                            <input class="form-control @error('kodeProduk')is-invalid @enderror" type="text"
                                name="kodeProduk" id="kodeProduk"
                                value="{{ $errors->any() ? old('kodeProduk') : $produk->kode_produk }}"
                                placeholder="Masukkan Nama Produk">
                            @error('kodeProduk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input class="form-control @error('namaProduk')is-invalid @enderror" type="text"
                                name="namaProduk" id="namaProduk"
                                value="{{ $errors->any() ? old('namaProduk') : $produk->nama_produk }}"
                                placeholder="Masukkan Nama Produk">
                            @error('namaProduk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga Produk</label>
                            <input type="number"class="form-control @error('harga') is-invalid @enderror" type="text"
                                name="harga" id="harga" value="{{ $errors->any() ? old('harga') : $produk->price }}"
                                placeholder="Masukkan Harga Produk">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control @error('deskripsiProduk') is-invalid @enderror" type="text" name="deskripsiProduk"
                                id="deskripsiProduk" placeholder="Dekripsi produk"> {{ $errors->any() ? old('deskripsiProduk') : $produk->description }}</textarea>
                            @error('deskripsiProduk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="jenis" class="form-label">Jenis Produk</label>
                            <select name="jenis" id="jenis" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('jenis');
                                    } else {
                                        $selected = $produk->jenis_id;
                                    }
                                @endphp
                                @foreach ($jenis as $jenis)
                                    <option value="{{ $jenis->id }}" {{ $selected == $jenis->id ? 'selected' : '' }}>
                                        {{ $jenis->code . ' - ' . $jenis->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jenis')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gambar" class="form-label">Gambar Produk</label>
                            @if ($produk->original_filename)
                                <h5>{{ $produk->original_filename }}</h5>
                                <a href="{{ route('produk.downloadFile', ['produkId' => $produk->id]) }}"
                                    class="btn btn-primary btn-sm mt-2">
                                    <i class="bi bi-download me-1"></i> Download Gambar
                                </a>
                            @else
                                <h5>Tidak ada</h5>
                            @endif
                        </div>
                        <div class="col-md-12 mb-3">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('produk.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@vite('resources/js/app.js')

