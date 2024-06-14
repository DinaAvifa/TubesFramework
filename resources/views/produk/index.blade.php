@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="{{ route('produk.exportExcel') }}" class="btn btn-success">
                            <i class="bi bi-download me-1"></i>Export to Excel
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('produk.exportPdf') }}" class="btn btn-danger ">
                            <i class="bi bi-download me-1"></i>Export to PDF
                        </a>
                    </li>
                    <li class="list-inline-item">|</li>
                    <li class="list-inline-item">
                        <a href="{{ route('produk.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Tambahkan Produk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3 bg-light">
            <table class="table table-bordered table-hover mb-0 datatable" id="produkTable">
                <thead>
                    <tr class="text-white"style="background-color: #9E7676">
                        <th>id</th>
                        <th>no</th>
                        <th>Kode produk</th>
                        <th>Nama produk</th>
                        <th>Harga produk</th>
                        <th>Jenis produk</th>
                        <th>Deskripsi produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="p-1"></div>
    
@endsection
