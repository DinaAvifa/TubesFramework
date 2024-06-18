<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Produk;
use App\Models\Jenis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $produk = Produk::all();
        $jenis = Jenis::all();
        $pageTitle = 'Beadssesories';
        return view('home', compact('pageTitle', 'produk','jenis'));

    }
    public function show(string $id)
    {
        $pageTitle = ' Detail Produk';
        // ELOQUENT
        $produk = Produk::find($id);
        return view('produk.show', compact('pageTitle', 'produk', ));
    }
}