@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="tentangkami text-center">
                    <h1>Tentang Kami</h1>
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="img-fluid mb-4" style="max-width: 20%;"
                        alt="Logo">
                    <p class="text-justify">blablabalbalbalbalblablablablabalbalbalbalblablablablab
                        albalbalbalblablablablabalbalbalbalblablablablabalbalbalbalb
                        blablabalbalbalbalblablablablabalbalbalbalblablablablabalbalbalbalblabla
                        blablabalbalbalbalblablavblablabalbalbalbalblablablablabalbalbalbalblabla
                        lablablablabalbalbalbalblablablablabalbalbalbalblablablablabalbalbalbalblabla </p>
                </div>
            </div>
        </div>
    </div>
@endsection
