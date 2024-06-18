@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="tentangkami text-center">
                    <h1>Tentang Kami</h1>
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="img-fluid mb-4" style="max-width: 20%;"
                        alt="Logo">
                    <p class="text-justify">Toko kami adalah Toko aksesoris dengan berbahan dasar manik-manik yang menawan dan unik,
                        dirancang untuk melengkapi penampilan seseorang.
                        Dibuat dengan berbagai macam bentuk dan warna manik-manik yang memikat perhatian.
                        Dengan berbagai pilihan manik-manik, mulai dari yang berbentuk bulat, kupu-kupu, hingga yang berkilau, seseorang dapat menciptakan kombinasi yang unik sesuai dengan selera dan gaya pribadinya.
                        Kami menjual beberapa jenis produk seperti gelang, kalung, dan cincin. Beberapa produk dirancang dengan tambahan charm atau hiasan. Produk kami bisa menjadi hadiah yang bagi orang yang menerimanya.
                        Tidak hanya sebagai aksesori yang mempesona, produk manik-manik kami juga mencerminkan keahlian dan ketelitian para perajin yang membuatnya.
                        Dibuat dengan tangan yang teliti dan penuh kasih sayang. </p>
                </div>
            </div>
        </div>
    </div>
@endsection
